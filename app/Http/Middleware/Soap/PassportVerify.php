<?php

namespace App\Http\Middleware\Soap;

use App\Handlers\PassportHandler;
use App\Http\Services\Bridge\Soap;
use Closure;

class PassportVerify
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @param $function
     * @return mixed
     */
    public function handle($request, Closure $next, $function)
    {
        if (!$request->has(['email', 'password'])) {
            return $next($request);
        }
        // Perform action
        //Verify passport soap:
        $passPort = new PassportHandler();
        switch ($function) {
            case Soap::PASSPORT_FUNCTION_LOGIN:
                $passPort->login($request);
                break;
            case Soap::PASSPORT_FUNCTION_REGISTER:
                $passPort->register($request);
                break;
        }


        return $next($request);
    }
}
