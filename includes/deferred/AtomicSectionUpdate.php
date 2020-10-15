<?php

/**
 * Deferrable Update for closure/callback updates via IDatabase::doAtomicSection()
 * @since 1.27
 */
class AtomicSectionUpdate implements DeferrableUpdate, DeferrableCallback
{
    /** @var IDatabase */
    private $dbw;
    /** @var string */
    private $fname;
    /** @var callable|null */
    private $callback;

    /**
     * @param IDatabase $dbw
     * @param string $fname Caller name (usually __METHOD__)
     * @param callable $callback
     * @see IDatabase::doAtomicSection()
     */
    public function __construct(IDatabase $dbw, $fname, callable $callback)
    {
        $this->dbw = $dbw;
        $this->fname = $fname;
        $this->callback = $callback;

        if ($this->dbw->trxLevel()) {
            $this->dbw->onTransactionResolution([ $this, 'cancelOnRollback' ], $fname);
        }
    }

    public function doUpdate()
    {
        if ($this->callback) {
            $this->dbw->doAtomicSection($this->fname, $this->callback);
        }
    }

    public function cancelOnRollback($trigger)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function getOrigin()
    {
        return $this->fname;
    }
}
