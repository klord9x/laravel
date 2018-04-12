<?php

namespace App\Http\Controllers\Auth;

use App\Handlers\PassportHandler;
use App\Http\Middleware\Soap\PassportVerify;
use App\Http\Services\Bridge\Soap;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Validation\ValidationException;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';
    private $_passportHandler;

    /**
     * Create a new controller instance.
     *
     * @param PassportHandler $passportHandler
     */
    public function __construct(PassportHandler $passportHandler)
    {
        $this->middleware(['guest', 'passport:'.PassportHandler::PASSPORT_FUNCTION_REGISTER]);
        $this->_passportHandler = $passportHandler;
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'username' => 'required|string|max:20|unique:users',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array $data
     * @return \App\User
     * @throws ValidationException
     */
    protected function create(array $data)
    {
        $status = session(PassportVerify::STATUS_RESPONSE);
        if ($status != PassportHandler::SUCCESS_CALL) {
            // let's create an empty validator, assuming that we have no any errors yet
            $validator = Validator::make([], []);
            // add an error
//            $validator->errors()->add('some_field', 'some_translated_error_key');
            $messages = $this->_passportHandler->messages();
            $error = $messages[$status];
            $key = key($error);
            $validator->getMessageBag()->add($key, '['.$status.'] '.$error[$key]);

            throw new ValidationException($validator);
        }
        $userId = session(PassportVerify::CURRENT_USER_ID);
        $user = session(PassportVerify::PREFIX_AUTHENTICATED.'_'.$userId);

        return $user;
//        return User::create([
//            'name' => $data['name'],
//            'email' => $data['email'],
//            'password' => bcrypt($data['password']),
//            'username' => $data['username']
//        ]);
    }

    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     * @throws ValidationException
     */
    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        event(new Registered($user = $this->create($request->all())));

        $this->guard()->login($user);

        return $this->registered($request, $user)
            ?: redirect($this->redirectPath());
    }
}
