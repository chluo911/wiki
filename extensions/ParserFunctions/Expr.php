<?php

if (!defined('MEDIAWIKI')) {
    die('This file is a MediaWiki extension, it is not a valid entry point');
}

// Character classes
define('EXPR_WHITE_CLASS', " \t\r\n");
define('EXPR_NUMBER_CLASS', '0123456789.');

// Token types
define('EXPR_WHITE', 1);
define('EXPR_NUMBER', 2);
define('EXPR_NEGATIVE', 3);
define('EXPR_POSITIVE', 4);
define('EXPR_PLUS', 5);
define('EXPR_MINUS', 6);
define('EXPR_TIMES', 7);
define('EXPR_DIVIDE', 8);
define('EXPR_MOD', 9);
define('EXPR_OPEN', 10);
define('EXPR_CLOSE', 11);
define('EXPR_AND', 12);
define('EXPR_OR', 13);
define('EXPR_NOT', 14);
define('EXPR_EQUALITY', 15);
define('EXPR_LESS', 16);
define('EXPR_GREATER', 17);
define('EXPR_LESSEQ', 18);
define('EXPR_GREATEREQ', 19);
define('EXPR_NOTEQ', 20);
define('EXPR_ROUND', 21);
define('EXPR_EXPONENT', 22);
define('EXPR_SINE', 23);
define('EXPR_COSINE', 24);
define('EXPR_TANGENS', 25);
define('EXPR_ARCSINE', 26);
define('EXPR_ARCCOS', 27);
define('EXPR_ARCTAN', 28);
define('EXPR_EXP', 29);
define('EXPR_LN', 30);
define('EXPR_ABS', 31);
define('EXPR_FLOOR', 32);
define('EXPR_TRUNC', 33);
define('EXPR_CEIL', 34);
define('EXPR_POW', 35);
define('EXPR_PI', 36);
define('EXPR_FMOD', 37);
define('EXPR_SQRT', 38);

class ExprError extends Exception
{
    /**
     * @param $msg string
     * @param $parameter string
     */
    public function __construct($msg, $parameter = '')
    {
        // Give grep a chance to find the usages:
        // pfunc_expr_stack_exhausted, pfunc_expr_unexpected_number, pfunc_expr_preg_match_failure,
        // pfunc_expr_unrecognised_word, pfunc_expr_unexpected_operator, pfunc_expr_missing_operand,
        // pfunc_expr_unexpected_closing_bracket, pfunc_expr_unrecognised_punctuation,
        // pfunc_expr_unclosed_bracket, pfunc_expr_division_by_zero, pfunc_expr_invalid_argument,
        // pfunc_expr_invalid_argument_ln, pfunc_expr_unknown_error, pfunc_expr_not_a_number
        $this->message = wfMessage("pfunc_expr_$msg", $parameter)->inContentLanguage()->text();
    }
}

class ExprParser
{
    public $maxStackSize = 100;

    public $precedence = array(
        EXPR_NEGATIVE => 10,
        EXPR_POSITIVE => 10,
        EXPR_EXPONENT => 10,
        EXPR_SINE => 9,
        EXPR_COSINE => 9,
        EXPR_TANGENS => 9,
        EXPR_ARCSINE => 9,
        EXPR_ARCCOS => 9,
        EXPR_ARCTAN => 9,
        EXPR_EXP => 9,
        EXPR_LN => 9,
        EXPR_ABS => 9,
        EXPR_FLOOR => 9,
        EXPR_TRUNC => 9,
        EXPR_CEIL => 9,
        EXPR_NOT => 9,
        EXPR_SQRT => 9,
        EXPR_POW => 8,
        EXPR_TIMES => 7,
        EXPR_DIVIDE => 7,
        EXPR_MOD => 7,
        EXPR_FMOD => 7,
        EXPR_PLUS => 6,
        EXPR_MINUS => 6,
        EXPR_ROUND => 5,
        EXPR_EQUALITY => 4,
        EXPR_LESS => 4,
        EXPR_GREATER => 4,
        EXPR_LESSEQ => 4,
        EXPR_GREATEREQ => 4,
        EXPR_NOTEQ => 4,
        EXPR_AND => 3,
        EXPR_OR => 2,
        EXPR_PI => 0,
        EXPR_OPEN => -1,
        EXPR_CLOSE => -1,
    );

    public $names = array(
        EXPR_NEGATIVE => '-',
        EXPR_POSITIVE => '+',
        EXPR_NOT => 'not',
        EXPR_TIMES => '*',
        EXPR_DIVIDE => '/',
        EXPR_MOD => 'mod',
        EXPR_FMOD => 'fmod',
        EXPR_PLUS => '+',
        EXPR_MINUS => '-',
        EXPR_ROUND => 'round',
        EXPR_EQUALITY => '=',
        EXPR_LESS => '<',
        EXPR_GREATER => '>',
        EXPR_LESSEQ => '<=',
        EXPR_GREATEREQ => '>=',
        EXPR_NOTEQ => '<>',
        EXPR_AND => 'and',
        EXPR_OR => 'or',
        EXPR_EXPONENT => 'e',
        EXPR_SINE => 'sin',
        EXPR_COSINE => 'cos',
        EXPR_TANGENS => 'tan',
        EXPR_ARCSINE => 'asin',
        EXPR_ARCCOS => 'acos',
        EXPR_ARCTAN => 'atan',
        EXPR_LN => 'ln',
        EXPR_EXP => 'exp',
        EXPR_ABS => 'abs',
        EXPR_FLOOR => 'floor',
        EXPR_TRUNC => 'trunc',
        EXPR_CEIL => 'ceil',
        EXPR_POW => '^',
        EXPR_PI => 'pi',
        EXPR_SQRT => 'sqrt',
    );

    public $words = array(
        'mod' => EXPR_MOD,
        'fmod' => EXPR_FMOD,
        'and' => EXPR_AND,
        'or' => EXPR_OR,
        'not' => EXPR_NOT,
        'round' => EXPR_ROUND,
        'div' => EXPR_DIVIDE,
        'e' => EXPR_EXPONENT,
        'sin' => EXPR_SINE,
        'cos' => EXPR_COSINE,
        'tan' => EXPR_TANGENS,
        'asin' => EXPR_ARCSINE,
        'acos' => EXPR_ARCCOS,
        'atan' => EXPR_ARCTAN,
        'exp' => EXPR_EXP,
        'ln' => EXPR_LN,
        'abs' => EXPR_ABS,
        'trunc' => EXPR_TRUNC,
        'floor' => EXPR_FLOOR,
        'ceil' => EXPR_CEIL,
        'pi' => EXPR_PI,
        'sqrt' => EXPR_SQRT,
    );

    /**
     * Evaluate a mathematical expression
     *
     * The algorithm here is based on the infix to RPN algorithm given in
     * http://montcs.bloomu.edu/~bobmon/Information/RPN/infix2rpn.shtml
     * It's essentially the same as Dijkstra's shunting yard algorithm.
     * @param $expr string
     * @throws ExprError
     * @return string
     */
    public function doExpression($expr)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @param $op int
     * @param $stack array
     * @throws ExprError
     */
    public function doOperation($op, &$stack)
    {
        switch ($op) {
            case EXPR_NEGATIVE:
                if (count($stack) < 1) {
                    throw new ExprError('missing_operand', $this->names[$op]);
                }
                $arg = array_pop($stack);
                $stack[] = -$arg;
                break;
            case EXPR_POSITIVE:
                if (count($stack) < 1) {
                    throw new ExprError('missing_operand', $this->names[$op]);
                }
                break;
            case EXPR_TIMES:
                if (count($stack) < 2) {
                    throw new ExprError('missing_operand', $this->names[$op]);
                }
                $right = array_pop($stack);
                $left = array_pop($stack);
                $stack[] = $left * $right;
                    break;
            case EXPR_DIVIDE:
                if (count($stack) < 2) {
                    throw new ExprError('missing_operand', $this->names[$op]);
                }
                $right = array_pop($stack);
                $left = array_pop($stack);
                if (!$right) {
                    throw new ExprError('division_by_zero', $this->names[$op]);
                }
                $stack[] = $left / $right;
                break;
            case EXPR_MOD:
                if (count($stack) < 2) {
                    throw new ExprError('missing_operand', $this->names[$op]);
                }
                $right = (int)array_pop($stack);
                $left = (int)array_pop($stack);
                if (!$right) {
                    throw new ExprError('division_by_zero', $this->names[$op]);
                }
                $stack[] = $left % $right;
                break;
            case EXPR_FMOD:
                if (count($stack) < 2) {
                    throw new ExprError('missing_operand', $this->names[$op]);
                }
                $right = (double)array_pop($stack);
                $left = (double)array_pop($stack);
                if (!$right) {
                    throw new ExprError('division_by_zero', $this->names[$op]);
                }
                $stack[] = fmod($left, $right);
                break;
            case EXPR_PLUS:
                if (count($stack) < 2) {
                    throw new ExprError('missing_operand', $this->names[$op]);
                }
                $right = array_pop($stack);
                $left = array_pop($stack);
                $stack[] = $left + $right;
                break;
            case EXPR_MINUS:
                if (count($stack) < 2) {
                    throw new ExprError('missing_operand', $this->names[$op]);
                }
                $right = array_pop($stack);
                $left = array_pop($stack);
                $stack[] = $left - $right;
                break;
            case EXPR_AND:
                if (count($stack) < 2) {
                    throw new ExprError('missing_operand', $this->names[$op]);
                }
                $right = array_pop($stack);
                $left = array_pop($stack);
                $stack[] = ($left && $right) ? 1 : 0;
                break;
            case EXPR_OR:
                if (count($stack) < 2) {
                    throw new ExprError('missing_operand', $this->names[$op]);
                }
                $right = array_pop($stack);
                $left = array_pop($stack);
                $stack[] = ($left || $right) ? 1 : 0;
                break;
            case EXPR_EQUALITY:
                if (count($stack) < 2) {
                    throw new ExprError('missing_operand', $this->names[$op]);
                }
                $right = array_pop($stack);
                $left = array_pop($stack);
                $stack[] = ($left == $right) ? 1 : 0;
                break;
            case EXPR_NOT:
                if (count($stack) < 1) {
                    throw new ExprError('missing_operand', $this->names[$op]);
                }
                $arg = array_pop($stack);
                $stack[] = (!$arg) ? 1 : 0;
                break;
            case EXPR_ROUND:
                if (count($stack) < 2) {
                    throw new ExprError('missing_operand', $this->names[$op]);
                }
                $digits = (int)array_pop($stack);
                $value = array_pop($stack);
                $stack[] = round($value, $digits);
                break;
            case EXPR_LESS:
                if (count($stack) < 2) {
                    throw new ExprError('missing_operand', $this->names[$op]);
                }
                $right = array_pop($stack);
                $left = array_pop($stack);
                $stack[] = ($left < $right) ? 1 : 0;
                break;
            case EXPR_GREATER:
                if (count($stack) < 2) {
                    throw new ExprError('missing_operand', $this->names[$op]);
                }
                $right = array_pop($stack);
                $left = array_pop($stack);
                $stack[] = ($left > $right) ? 1 : 0;
                break;
            case EXPR_LESSEQ:
                if (count($stack) < 2) {
                    throw new ExprError('missing_operand', $this->names[$op]);
                }
                $right = array_pop($stack);
                $left = array_pop($stack);
                $stack[] = ($left <= $right) ? 1 : 0;
                break;
            case EXPR_GREATEREQ:
                if (count($stack) < 2) {
                    throw new ExprError('missing_operand', $this->names[$op]);
                }
                $right = array_pop($stack);
                $left = array_pop($stack);
                $stack[] = ($left >= $right) ? 1 : 0;
                break;
            case EXPR_NOTEQ:
                if (count($stack) < 2) {
                    throw new ExprError('missing_operand', $this->names[$op]);
                }
                $right = array_pop($stack);
                $left = array_pop($stack);
                $stack[] = ($left != $right) ? 1 : 0;
                break;
            case EXPR_EXPONENT:
                if (count($stack) < 2) {
                    throw new ExprError('missing_operand', $this->names[$op]);
                }
                $right = array_pop($stack);
                $left = array_pop($stack);
                $stack[] = $left * pow(10, $right);
                break;
            case EXPR_SINE:
                if (count($stack) < 1) {
                    throw new ExprError('missing_operand', $this->names[$op]);
                }
                $arg = array_pop($stack);
                $stack[] = sin($arg);
                break;
            case EXPR_COSINE:
                if (count($stack) < 1) {
                    throw new ExprError('missing_operand', $this->names[$op]);
                }
                $arg = array_pop($stack);
                $stack[] = cos($arg);
                break;
            case EXPR_TANGENS:
                if (count($stack) < 1) {
                    throw new ExprError('missing_operand', $this->names[$op]);
                }
                $arg = array_pop($stack);
                $stack[] = tan($arg);
                break;
            case EXPR_ARCSINE:
                if (count($stack) < 1) {
                    throw new ExprError('missing_operand', $this->names[$op]);
                }
                $arg = array_pop($stack);
                if ($arg < -1 || $arg > 1) {
                    throw new ExprError('invalid_argument', $this->names[$op]);
                }
                $stack[] = asin($arg);
                break;
            case EXPR_ARCCOS:
                if (count($stack) < 1) {
                    throw new ExprError('missing_operand', $this->names[$op]);
                }
                $arg = array_pop($stack);
                if ($arg < -1 || $arg > 1) {
                    throw new ExprError('invalid_argument', $this->names[$op]);
                }
                $stack[] = acos($arg);
                break;
            case EXPR_ARCTAN:
                if (count($stack) < 1) {
                    throw new ExprError('missing_operand', $this->names[$op]);
                }
                $arg = array_pop($stack);
                $stack[] = atan($arg);
                break;
            case EXPR_EXP:
                if (count($stack) < 1) {
                    throw new ExprError('missing_operand', $this->names[$op]);
                }
                $arg = array_pop($stack);
                $stack[] = exp($arg);
                break;
            case EXPR_LN:
                if (count($stack) < 1) {
                    throw new ExprError('missing_operand', $this->names[$op]);
                }
                $arg = array_pop($stack);
                if ($arg <= 0) {
                    throw new ExprError('invalid_argument_ln', $this->names[$op]);
                }
                $stack[] = log($arg);
                break;
            case EXPR_ABS:
                if (count($stack) < 1) {
                    throw new ExprError('missing_operand', $this->names[$op]);
                }
                $arg = array_pop($stack);
                $stack[] = abs($arg);
                break;
            case EXPR_FLOOR:
                if (count($stack) < 1) {
                    throw new ExprError('missing_operand', $this->names[$op]);
                }
                $arg = array_pop($stack);
                $stack[] = floor($arg);
                break;
            case EXPR_TRUNC:
                if (count($stack) < 1) {
                    throw new ExprError('missing_operand', $this->names[$op]);
                }
                $arg = array_pop($stack);
                $stack[] = (int)$arg;
                break;
            case EXPR_CEIL:
                if (count($stack) < 1) {
                    throw new ExprError('missing_operand', $this->names[$op]);
                }
                $arg = array_pop($stack);
                $stack[] = ceil($arg);
                break;
            case EXPR_POW:
                if (count($stack) < 2) {
                    throw new ExprError('missing_operand', $this->names[$op]);
                }
                $right = array_pop($stack);
                $left = array_pop($stack);
                if (false === ($stack[] = pow($left, $right))) {
                    throw new ExprError('division_by_zero', $this->names[$op]);
                }
                break;
            case EXPR_SQRT:
                if (count($stack) < 1) {
                    throw new ExprError('missing_operand', $this->names[$op]);
                }
                $arg = array_pop($stack);
                $result = sqrt($arg);
                if (is_nan($result)) {
                    throw new ExprError('not_a_number', $this->names[$op]);
                }
                $stack[] = $result;
                break;
            default:
                // Should be impossible to reach here.
                throw new ExprError('unknown_error');
        }
    }
}
