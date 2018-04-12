<?php

namespace App\Handlers;

use App\Http\Services\Bridge\AbstractWebService as BaseHandler;
use App\Http\Services\Bridge\Soap;
use Artisaninweb\SoapWrapper\Exceptions\ServiceAlreadyExists;
use Illuminate\Http\Request;

class PassportHandler extends BaseHandler
{
    //Define error code:
    const ERROR_AGENT_FAIL = 0;
    const ERROR_SIGN_FAIL = -100;
    const ERROR_USER_INCORRECT = -1;
    const ERROR_PASSWORD_INCORRECT = -2;
    const ERROR_EMAIL_INCORRECT = -3;
    const ERROR_NAME_INCORRECT = -4;
    const ERROR_DATE_INCORRECT = -5;
    const ERROR_SEX_INCORRECT = -6;
    const ERROR_CMND_INCORRECT = -7;
    const ERROR_MOBILE_INCORRECT = -8;
    const ERROR_ADDRESS_INCORRECT = -9;
    const ERROR_CITY_INCORRECT = -10;
    const ERROR_COMPANY_INCORRECT = -11;
    const ERROR_COMPANY_ADDRESS_INCORRECT = -12;
    const ERROR_USER_EXIST = -13;
    const ERROR_SYSTEM = -14;
    const SUCCESS_CALL = 1;
    const ERROR_ACTIVE_KEY_INCORRECT = -15;
    const ERROR_USER_OR_ACTIVE_INCORRECT = -16;
    const ERROR_USER_NOT_EXIST = -17;
    const ERROR_PASSWORD_FAIL = -18;
    const ERROR_PASSWORD_NEW_INCORRECT = -19;
    const ERROR_RESET_KEY_INCORRECT = -20;
    const ERROR_RESET_KEY_FAIL = -21;

    //Passport:
    const WRAPPER_PASSPORT = 'Passport';
    const PASSPORT_FUNCTION_LOGIN = 'authenticatePassport';
    const PASSPORT_FUNCTION_REGISTER = 'registerPassport';
    const PASSPORT_FUNCTION_ACTIVE = 'activatePassport';
    const PASSPORT_FUNCTION_CHECK_USER = 'checkuserPassport';
    const PASSPORT_FUNCTION_PROFILE = 'profilePassport';
    const PASSPORT_FUNCTION_PROFILE_UPDATE = 'updateProfilePassport';
    const PASSPORT_FUNCTION_PASSWORD_CHANGE = 'changePasswordPassport';
    const PASSPORT_FUNCTION_PASSWORD_FORGOT = 'forgotPasswordPassport';
    const PASSPORT_FUNCTION_PASSWORD_RESET = 'resetPasswordPassport';

    protected $uriList = [
        //passport URI:
        self::PASSPORT_FUNCTION_REGISTER => '/passport/register/wsdl',
        self::PASSPORT_FUNCTION_ACTIVE => '/passport/activate/wsdl',
        self::PASSPORT_FUNCTION_LOGIN => '/passport/authenticate/wsdl',
        self::PASSPORT_FUNCTION_CHECK_USER => '/passport/checkuser/wsdl',
        self::PASSPORT_FUNCTION_PROFILE => '/passport/profile/wsdl',
        self::PASSPORT_FUNCTION_PROFILE_UPDATE => '/passport/updateprofile/wsdl',
        self::PASSPORT_FUNCTION_PASSWORD_CHANGE => '/passport/changepassword/wsdl',
        self::PASSPORT_FUNCTION_PASSWORD_FORGOT => '/passport/forgotpassword/wsdl',
        self::PASSPORT_FUNCTION_PASSWORD_RESET => '/passport/resetpassword/wsdl',
    ];

    protected $domain = 'http://dev.pp.100d.mobi';

    /**
     * @var Soap
     */
    private $_soap;

    /**
     * SoapController constructor.
     *
     */
    public function __construct()
    {
        try {
            $this->_soap = Soap::getInstance($this->domain, $this->uriList);
        } catch (ServiceAlreadyExists $e) {
        }
    }

    /**
     * @param Request $request
     * @return mixed|null
     */
    public function login(Request $request)
    {
        /* Set your parameters for the request */
        $this->password = self::encryptPassword($request->password, $this->encryptKey);
        $this->username = $request->email;
        $params = array(
            'agent' => $this->agent,
            'key'   => $this->key,
            'username'     => $this->username,
            'password'       => $this->password,
            'sign'       => $this->getSign(),
        );

        return $this->_soap->call(self::PASSPORT_FUNCTION_LOGIN, $params);
    }

    /**
     * @param Request $request
     * @return mixed|null
     */
    public function register(Request $request)
    {
        /* Set your parameters for the request */
        $this->password = self::encryptPassword($request->password, $this->encryptKey);
        $this->username = $request->username;
        $params = array(
            'agent' => $this->agent,
            'key'   => $this->key,
            'username'     => $request->username,
            'password'       => $this->password,
            'email'       => $request->email,
            'fullname'       => $request->name,
//            'birthday'       => $request->birthday,
//            'sex'       => $request->sex,
//            'identityNumber'       => $request->identityNumber,
//            'mobile'       => $request->mobile,
//            'address'       => $request->address,
//            'city'       => $request->city,
//            'company'       => $request->company,
//            'companyAddress'       => $request->companyAddress,
            'sign'       => $this->getSign(),
        );

        return $this->_soap->call(self::PASSPORT_FUNCTION_REGISTER, $params);
    }

    /**
     * active user
     * @param Request $request
     * @return mixed|null
     */
    public function active(Request $request)
    {
        /* Set your parameters for the request */
        $this->username = $request->username;
        $params = array(
            'agent' => $this->agent,
            'key'   => $this->key,
            'username'     => $request->username,
            //todo: How to get it from user registered.
            'activeKey'       => $this->activeKey,
            'sign'       => $this->getSign(),
        );

        return $this->_soap->call(self::PASSPORT_FUNCTION_ACTIVE, $params);
    }

    /**
     * @param Request $request
     * @return mixed|null
     */
    public function checkUser(Request $request)
    {
        /* Set your parameters for the request */
        $this->username = $request->username;
        $params = array(
            'agent' => $this->agent,
            'key'   => $this->key,
            'username'     => $request->username,
        );

        return $this->_soap->call(self::PASSPORT_FUNCTION_CHECK_USER, $params);
    }

    /**
     * @param Request $request
     * @return mixed|null
     */
    public function profile(Request $request)
    {
        /* Set your parameters for the request */
        $this->username = $request->username;
        $params = array(
            'agent' => $this->agent,
            'key'   => $this->key,
            'username'     => $request->username,
            'sign'       => $this->getSign(),
        );

        return $this->_soap->call(self::PASSPORT_FUNCTION_PROFILE, $params);
    }

    /**
     * @param Request $request
     * @return mixed|null
     */
    public function updateProfile(Request $request)
    {
        /* Set your parameters for the request */
        $this->username = $request->username;
        $params = array(
            'agent' => $this->agent,
            'key'   => $this->key,
            'username'     => $request->username,
            'email'       => $request->email,
            'fullname'       => $request->name,
            'birthday'       => $request->birthday,
            'sex'       => $request->sex,
            'identityNumber'       => $request->identityNumber,
            'mobile'       => $request->mobile,
            'address'       => $request->address,
            'city'       => $request->city,
            'company'       => $request->company,
            'companyAddress'       => $request->companyAddress,
            'sign'       => $this->getSign(),
        );

        return $this->_soap->call(self::PASSPORT_FUNCTION_PROFILE_UPDATE, $params);
    }

    /**
     * @param Request $request
     * @return mixed|null
     */
    public function changePassword(Request $request)
    {
        /* Set your parameters for the request */
        $oldPassword = self::encryptPassword($request->oldpassword, $this->encryptKey);
        $newPassword = self::encryptPassword($request->newpassword, $this->encryptKey);
        $this->username = $request->username;
        $params = array(
            'agent' => $this->agent,
            'key'   => $this->key,
            'username'     => $request->username,
            'oldpassword'       => $oldPassword,
            'newpassword'       => $newPassword,
            'sign'       => $this->getSign(),
        );

        return $this->_soap->call(self::PASSPORT_FUNCTION_PASSWORD_CHANGE, $params);
    }

    /**
     * @param Request $request
     * @return mixed|null
     */
    public function forgotPassword(Request $request)
    {
        /* Set your parameters for the request */
        $this->username = $request->username;
        $params = array(
            'agent' => $this->agent,
            'key'   => $this->key,
            'username'     => $request->username,
            'sign'       => $this->getSign(),
        );

        return $this->_soap->call(self::PASSPORT_FUNCTION_PASSWORD_FORGOT, $params);
    }

    /**
     * @param Request $request
     * @return mixed|null
     */
    public function resetPassword(Request $request)
    {
        /* Set your parameters for the request */
        $this->password = self::encryptPassword($request->password, $this->encryptKey);
        $this->username = $request->username;
        $params = array(
            'agent' => $this->agent,
            'key'   => $this->key,
            'username'     => $request->username,
            'password'       => $this->password,
            'secretKey'       => $this->secret,
            'sign'       => $this->getSign(),
        );

        return $this->_soap->call(self::PASSPORT_FUNCTION_PASSWORD_RESET, $params);
    }

    /**
     * get messages error
     * @return array
     */
    public function messages()
    {
        return [
            self::ERROR_AGENT_FAIL => ['agent' => 'Thông tin đại lý không đúng'],
            self::ERROR_SIGN_FAIL => ['sign' => 'Chữ ký không đúng'],
            self::ERROR_USER_INCORRECT => ['username' => 'Tên đăng nhập không hợp lệ'],
            self::ERROR_PASSWORD_INCORRECT => ['password' => 'Mật khẩu không hợp lệ'],
            self::ERROR_EMAIL_INCORRECT => ['email' =>'Email không hợp lệ'],
            self::ERROR_NAME_INCORRECT => ['full_name' => 'Họ tên không hợp lệ'],
            self::ERROR_DATE_INCORRECT => ['birthday' => 'Ngày sinh không hợp lệ'],
            self::ERROR_SEX_INCORRECT => ['sex' => 'Giới tính không hợp lệ'],
            self::ERROR_CMND_INCORRECT => ['cmnd' => 'CMND không hợp lệ'],
            self::ERROR_MOBILE_INCORRECT => ['mobile' => 'Số điện thoại không hợp lệ'],
            self::ERROR_ADDRESS_INCORRECT => ['address' => 'Địa chỉ không hợp lệ'],
            self::ERROR_CITY_INCORRECT => ['city' => 'Tỉnh/thành phố không hợp lệ'],
            self::ERROR_COMPANY_INCORRECT => ['company' => 'Tên công ty không hợp lệ'],
            self::ERROR_COMPANY_ADDRESS_INCORRECT => ['company_address' => 'Địa chỉ công ty không hợp lệ'],
            self::ERROR_USER_EXIST => ['username' => 'Tên đăng nhập đã tồn tại'],
            self::ERROR_SYSTEM => ['error' => 'Lỗi hệ thống'],
            self::ERROR_ACTIVE_KEY_INCORRECT => ['active_key' => 'Activekey ko hop le'],
            self::ERROR_USER_OR_ACTIVE_INCORRECT => ['username' => 'Username hoac activeKey khong dung'],
            self::ERROR_USER_NOT_EXIST => ['username' => 'Username khong ton tai'],
            self::ERROR_PASSWORD_FAIL => ['password' => 'Mat khau khong dung'],
            self::ERROR_PASSWORD_NEW_INCORRECT => ['password' => 'Mat khau moi khong hop le'],
            self::ERROR_RESET_KEY_INCORRECT => ['reset_key' => 'ResetKey không hợp lệ'],
            self::ERROR_RESET_KEY_FAIL => ['reset_key' => 'ResetKey không đúng'],
        ];
    }
}
