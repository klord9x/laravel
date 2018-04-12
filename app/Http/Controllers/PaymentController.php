<?php

namespace App\Http\Controllers;

use App\Handlers\PaymentHandler;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class PaymentController extends Controller
{
    private $_paymentHandler;

    public function __construct(PaymentHandler $paymentHandler)
    {
        $this->middleware('auth');
        $this->_paymentHandler = $paymentHandler;
    }

    /**
     * Show the application's pay form.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('pages.payment');
    }

    /**
     * @param Request $request
     * @return void
     * @throws ValidationException
     */
    public function pay(Request $request)
    {
        $this->validator($request->all())->validate();

        switch ($request->plus) {
            case 'on':
                $result = $this->_paymentHandler->chargePlus($request);
                break;
            default:
                $result = $this->_paymentHandler->chargeNotPlus($request);
                break;
        }

        if (!empty($result) && $result['status'] != PaymentHandler::SUCCESS_PAY) {
            $validator = Validator::make([], []);
            // add an error
            $messages = $this->_paymentHandler->messages();
            $error = $messages[$result['status']];
            $key = key($error);
            $validator->getMessageBag()->add($key, '['.$result['status'].'] '.$error[$key]);

            throw new ValidationException($validator);
        }
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
            'username' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'cardCode' => 'required|string|min:10|max:16',
            'cardSerial' => 'required|string|min:8|max:16',
            'cardType' => "required|string|in:" . PaymentHandler::CARD_TYPE_MOBIPHONE . "," .  PaymentHandler::CARD_TYPE_VIETTEL . "," .  PaymentHandler::CARD_TYPE_VINAPHONE,
        ]);
    }
}
