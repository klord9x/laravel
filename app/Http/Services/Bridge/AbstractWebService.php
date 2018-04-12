<?php

namespace App\Http\Services\Bridge;

abstract class AbstractWebService
{
    //Config global
    protected $domain = '';
    protected $wsdlUri = '';
    public $secret = '^$!Ju$PCak)v@(Nv8Cy(';
    public $key = '$zc*E!8r5Mn#6%@@^%z#';
    public $agent = 'wg001';
    public $encryptKey = 'xR4IMJ(!*(X%&976@H#C'; //'encryptKey'        => 'xR4IMJ(!*(X%&976@H#C',

    const SIGN_PASSPORT = 1;
    const SIGN_PAYMENT = 2;

    //info
    public $username;
    public $email;
    public $sign;
    public $password;
    public $activeKey;
    public $soapWrapper;
    public $cardSerial;


    /**
     * encryptPassword
     * @param $input
     * @param $encryptionKey
     * @return string
     */
    public function encryptPassword($input, $encryptionKey)
    {
        $block = mcrypt_get_block_size(MCRYPT_TRIPLEDES, MCRYPT_MODE_ECB);
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
