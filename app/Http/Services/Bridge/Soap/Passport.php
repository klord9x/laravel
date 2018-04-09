<?php

namespace App\Http\Services\Bridge\Soap;

use Artisaninweb\SoapWrapper\Exceptions\ServiceAlreadyExists;

class Passport
{
    const WRAPPER_NAME = 'Passport';
    const FUNCTION_LOGIN = 'authenticatePassport';
    const FUNCTION_REGISTER = 'registerPassport';
    const FUNCTION_ACTIVE = 'activatePassport';
    const FUNCTION_CHECK_USER = 'checkuserPassport';
    const FUNCTION_PROFILE = 'profilePassport';
    const FUNCTION_PROFILE_UPDATE = 'updateProfilePassport';
    const FUNCTION_PASSWORD_CHANGE = 'changePasswordPassport';
    const FUNCTION_PASSWORD_FORGOT = 'forgotPasswordPassport';
    const FUNCTION_PASSWORD_RESET = 'resetPasswordPassport';
    protected $password;

    public $uriList = [
        '/passport/register/wsdl',
        '/passport/activate/wsdl',
        '/passport/authenticate/wsdl',
        '/passport/checkuser/wsdl',
        '/passport/profile/wsdl',
        '/passport/updateprofile/wsdl',
        '/passport/changepassword/wsdl',
        '/passport/forgotpassword/wsdl',
        '/passport/resetpassword/wsdl',
        ];

    /**
     * Add all services passport
     * @param array $uriList
     * @throws ServiceAlreadyExists
     */
    public function init(array $uriList = null)
    {
        if (empty($uriList)) {
            $uriList = $this->uriList;
        }

        foreach ($uriList as $uri) {
            $this->wsdlUri = $uri;
            $this->soapWrapper->add(self::WRAPPER_NAME, function ($service) {
                $service
                    ->wsdl($this->domain . $this->wsdlUri)
                    ->trace(true);
            });
        }
    }

    /**
     * get sign=MD5(key+MD5(username+password)+secret). Secret được cấp bởi API
     * @return string
     */
    public function getSign()
    {
        $this->sign = md5($this->key.md5($this->username.$this->password).$this->secret);
        return $this->sign;
    }
}
