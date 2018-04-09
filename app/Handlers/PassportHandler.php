<?php

namespace App\Handlers;

use App\Http\Services\Bridge\Soap;
use Illuminate\Http\Request;
use SoapClient;

class PassportHandler
{
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
        $this->_soap = Soap::getInstance();
    }

    /**
     * @param Request $request
     * @return mixed|null
     */
    public function login(Request $request)
    {
        /* Set your parameters for the request */
        $this->_soap->password = $request->password;
        $this->_soap->username = $request->email;
        $params = array(
            'agent' => $this->_soap->agent,
            'key'   => $this->_soap->key,
            'username'     => $this->_soap->username,
            'password'       => $this->_soap->password,
            'sign'       => $this->_soap->getSign(),
        );
        $response = $this->_soap->call(Soap::PASSPORT_FUNCTION_LOGIN, $params);

        return $response;
    }

    /**
     * @param Request $request
     * @return mixed|null
     */
    public function register(Request $request)
    {
        /* Set your parameters for the request */
        $this->_soap->password = $request->password;
        $this->_soap->username = $request->username;
        $params = array(
            'agent' => $this->_soap->agent,
            'key'   => $this->_soap->key,
            'username'     => $request->username,
            'password'       => $request->password,
//            'email'       => $request->email,
//            'fullname'       => $request->fullname,
//            'birthday'       => $request->birthday,
//            'sex'       => $request->sex,
//            'identityNumber'       => $request->identityNumber,
//            'mobile'       => $request->mobile,
//            'address'       => $request->address,
//            'city'       => $request->city,
//            'company'       => $request->company,
//            'companyAddress'       => $request->companyAddress,
            'sign'       => $this->_soap->getSign(),
        );
        $response = $this->_soap->call(Soap::PASSPORT_FUNCTION_REGISTER, $params);

        return $response;
    }

    /**
     * Use the SoapWrapper
     */
//    public function show()
//    {
////        $domain='http://dev.pp.100d.mobi';
////        $_WSDL_URI_reg = "/passport/authenticate/wsdl/";
////        $secret = '^$!Ju$PCak)v@(Nv8Cy(';
////        $parameters ['agent'] = 'wg001';//
////        $parameters ['key'] = '$zc*E!8r5Mn#6%@@^%z#';
////        $parameters ['username'] = 'lethanhtinh291';
////        $parameters ['sign'] = md5($parameters['key'].md5($parameters['username']).$secret);
//
//        /* Initialize webservice with your WSDL */
////        $client = new SoapClient('http://dev.pp.100d.mobi/passport/authenticate/wsdl/');
////        $client = new SoapClient($domain.$_WSDL_URI_reg, array("trace" => 1, "stream_context" => "", "exceptions" => true));
////
////        //$result = $client->functionName();
////
////        /* Fill your Contact Object */
////        //$contact = new Contact(100, "John");
////
////        /* Set your parameters for the request */
////        $params = array(
////            'agent' => 'wg001',
////            'key'   => '$zc*E!8r5Mn#6%@@^%z#',
////            'username'     => 'huan',
////            'password'       => '1000',
////            'sign'       => '1000',
////        );
////
////        /* Invoke webservice method with your parameters, in this case: Function1 */
////        $response = $client->__soapCall("authenticatePassport", array($params));
////
////        /* Print webservice response */
////        var_dump($response);
//
//        $this->soapWrapper->add('Passport', function ($service) {
//            $service
//                ->wsdl('http://dev.pp.100d.mobi/passport/authenticate/wsdl/')
//                ->trace(true)
//                ->classmap([
//                    authenticatePassport::class,
//                ]);
//        });
//
////        var_dump($this);
////        exit('ddd');
////
////        // Without classmap
//        $response = $this->soapWrapper->call('Passport.authenticatePassport', [
//            'agent' => 'wg001',
//            'key'   => '$zc*E!8r5Mn#6%@@^%z#',
//            'username'     => 'huan',
//            'password'       => '1000',
//            'sign'       => '1000',
//        ]);
//
////
//        var_dump($response);
////
////        // With classmap
////        $response = $this->soapWrapper->call('Currency.GetConversionAmount', [
////            new GetConversionAmount('USD', 'EUR', '2014-06-05', '1000')
////        ]);
////
////        var_dump($response);
//        exit;
//    }

    public function test()
    {
        $domain='http://dev.pp.100d.mobi';
        $_WSDL_URI_reg = "/passport/authenticate/wsdl";
        $secret = '^$!Ju$PCak)v@(Nv8Cy(';
    //
        $parameters ['agent'] = 'wg001';//
        $parameters ['key'] = '$zc*E!8r5Mn#6%@@^%z#';//
        $parameters ['username'] = 'huank29';//
        //Hash
    $parameters ['password'] = self::encryptPassword('123456', $this->_soap->encryptKey);//admin1234 //Ode+9ILqf0308UxIk4zclw==
    //$parameters ['email'] = 'email@email.com';
    //$parameters ['fullname'] = 'Fullname';
    //$parameters ['birthday'] = '2018-01-01';
    //$parameters ['sex'] = 1;
    //$parameters ['identityNumber'] = 123456789;
    //$parameters ['mobile'] = 12345678910;
    //$parameters ['address'] = 'Address';
    //$parameters ['city'] = 10;
    //$parameters ['company'] = 'Name company';
    //$parameters ['companyAddress'] = 'Company Address';
    $parameters ['sign'] = md5( $parameters ['key'] . md5 ( $parameters ['username'] . $parameters ['password'] ) . $secret );//
//        $parameters ['sign'] = md5($parameters['key'].md5($parameters['username']).$secret);//
    //$parameters ['activeKey'] = '9aaa0f8b66e3cac1a4e4c2bfa533db40';//
    //die(var_dump($parameters));
        try {
            $client = new SoapClient($domain.$_WSDL_URI_reg, array("trace" => 1, "stream_context" => "", "exceptions" => true));
            $result = $client->authenticatePassport($parameters);
            var_dump($result); die();
        } catch(SoapFault $fault) {
            $errors = $client->__getLastRequest();
            $errors2 = $client->__getLastResponse();
            var_dump($errors);
            var_dump($errors2);
            die();
            //var_dump($fault); die();
        }
    }

    /**
     * encryptPassword
     * @param $input
     * @param $encryptionKey
     * @return string
     */
    public function encryptPassword($input, $encryptionKey)
    {
        $block = mcrypt_get_block_size('tripledes', 'ecb');
        $padding = $block - (strlen($input) % $block);

        $input .= str_repeat(chr($padding), $padding);

        // generate a 24 byte key from the md5 of the seed
        $key = substr(md5($encryptionKey), 0, 24);

        $ivSize = mcrypt_get_iv_size(MCRYPT_TRIPLEDES, MCRYPT_MODE_ECB);
        $iv = mcrypt_create_iv($ivSize, MCRYPT_RAND);

        // encrypt
        $encryptedData = mcrypt_encrypt(MCRYPT_TRIPLEDES, $key, $input, MCRYPT_MODE_ECB, $iv);

        return base64_encode($encryptedData);
    }

}
