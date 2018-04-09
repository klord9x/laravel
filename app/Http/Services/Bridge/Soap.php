<?php

namespace App\Http\Services\Bridge;

use Artisaninweb\SoapWrapper\SoapWrapper;

final class Soap extends AbstractWebService
{
    //Config global
    protected $domain = 'http://dev.pp.100d.mobi';
    protected $wsdlUri = '';
    public $secret = '^$!Ju$PCak)v@(Nv8Cy(';
    public $key = '$zc*E!8r5Mn#6%@@^%z#';
    public $agent = 'wg001';
    public $encryptKey = 'xR4IMJ(!*(X%&976@H#C'; //'encryptKey'        => 'xR4IMJ(!*(X%&976@H#C',


    public $username;
    public $sign;
    public $password;
    public $soapWrapper;

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

    public $uriList = [
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

    /**
     * Soap constructor.
     * @param SoapWrapper $soapWrapper
     */
    private function __construct(SoapWrapper $soapWrapper)
    {
        $this->soapWrapper = $soapWrapper;
    }

    /**
     * @var Passport
     */
    private static $instance;

    /**
     * gets the instance via lazy initialization (created on first usage)
     */
    public static function getInstance(): Soap
    {
        if (null === static::$instance) {
            $soapWrapper = new SoapWrapper();
            static::$instance = new static($soapWrapper);
        }

        static::$instance->init();

        return static::$instance;
    }

    /**
     * prevent the instance from being cloned (which would create a second instance of it)
     */
    private function __clone()
    {
    }

    /**
     * prevent from being unserialized (which would create a second instance of it)
     */
    private function __wakeup()
    {
    }

    public function call($call, array $parameters)
    {
        $result = null;
        /* Invoke webservice method with your parameters, in this case: Function1 */
        try {
            // Without classmap
            $result = $this->soapWrapper->call($call.'.'.$call, $parameters);
        } catch (\Exception $e) {

        }

        return $result;
    }

    /**
     * Add all services passport
     * @param array $uriList
     * @throws \Artisaninweb\SoapWrapper\Exceptions\ServiceAlreadyExists
     */
    public function init(array $uriList = null)
    {
        if (empty($uriList)) {
            $uriList = $this->uriList;
        }

        foreach ($uriList as $name => $uri) {
            $this->wsdlUri = $uri;
            $this->soapWrapper->add($name, function ($service) {
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
