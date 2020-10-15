<?php

/**
 * Email Blacklisting
 */
class EmailBlacklist extends BaseBlacklist
{
    /**
     * @param array $links
     * @param Title $title
     * @param bool $preventLog
     * @return mixed
     */
    public function filter(array $links, Title $title, $preventLog = false)
    {
        throw new LogicException(__CLASS__ . ' cannot be used to filter links.');
    }

    /**
     * Returns the code for the blacklist implementation
     *
     * @return string
     */
    protected function getBlacklistType()
    {
        return 'email';
    }

    /**
     * Checks a User object for a blacklisted email address
     *
     * @param User $user
     * @return bool True on valid email
     */
    public function checkUser(User $user)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
