<?php

class ApiTestContext extends RequestContext
{

    /**
     * Returns a DerivativeContext with the request variables in place
     *
     * @param WebRequest $request WebRequest request object including parameters and session
     * @param User|null $user User or null
     * @return DerivativeContext
     */
    public function newTestContext(WebRequest $request, User $user = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
