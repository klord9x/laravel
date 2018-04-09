<?php

namespace App\Http\Middleware\Soap;

use App\Handlers\PassportHandler;
use App\Http\Services\Bridge\Soap;
use App\User;
use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class PassportVerify
{
    const STATUS_SUCCESS = 1;
    const PREFIX_AUTHENTICATED = 'AAA';
    const CURRENT_USER_ID = 'UserId';
    const STATUS_RESPONSE = 'Status';
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
        $response = null;
        $passPort = new PassportHandler();
        switch ($function) {
            case Soap::PASSPORT_FUNCTION_LOGIN:
                $response = $passPort->login($request);
                break;
            case Soap::PASSPORT_FUNCTION_REGISTER:
                $response = $passPort->register($request);
                break;
            default:
                return $next($request);
        }

        //Login success:
        session([PassportVerify::STATUS_RESPONSE => $response['status']]);
        if (is_array($response) && $response['status'] == self::STATUS_SUCCESS) {
            //TODO: check, add/update user to db.
            $user = null;
            $result = $response['result'];
            if (is_object($result)) {
                $credentials = ['email' => $result->email,
                    'username' => $result->username,
                ];
                $user = User::firstOrNew($credentials);
                $user->name = $result->fullname;
                $user->id = $result->id;
                $user->password = Hash::make($request->password);

//                $request->session()->put(PassportVerify::PASSPORT_AUTHENTICATED, $user);
                //TODO: Save user/status info to session.
                session([PassportVerify::PREFIX_AUTHENTICATED.'_'.$user->id => $user]);
                session([PassportVerify::CURRENT_USER_ID => $user->id]);
//                switch ($function) {
//                    case Soap::PASSPORT_FUNCTION_LOGIN:
//                        session([PassportVerify::PREFIX_AUTHENTICATED.'_'.$user->id => $user]);
//                        break;
//                    case Soap::PASSPORT_FUNCTION_REGISTER:
//                        session([PassportVerify::PREFIX_USER_ID.'_'.$user->username => $user]);
//                        break;
//                    default:
//                        break;
//                }

//                session(['aaa1111123' => $user]);

//                $b = session($user->id);
//                $a = session(PassportVerify::PASSPORT_AUTHENTICATED);
//                $value = $request->session()->pull(PassportVerify::PASSPORT_AUTHENTICATED, 'default');
//                $value = $request->session()->get('key');
//                Session::set('authenticated', $user);
//                $user->id = $result->id;
                //$user->save();
//                Auth::login($user, true);
//                Auth::attempt(['email' => $result->email, 'password' => $request->password]);
                Auth::login($user);
                //TODO: Why logged, but can't send info to another controller.
//                if (Auth::check()) {
//                    $ad = Auth::user();
//                    return redirect('/home');
////                     The user is logged in...
//                }
//                Auth::attempt();
//                Auth::guard('web')->login($user);
//                return redirect('/home');
//                $temp = Auth::user();
                // Login and "remember" the given user...
                //Auth::login($user, true);
            }
        }

        return $next($request);
        //return response('Unauthorized.', 401);
    }
}
