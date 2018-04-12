<?php

namespace App\Http\Services\Bridge;

use Artisaninweb\SoapWrapper\SoapWrapper;

final class Soap extends AbstractWebService
{
    /**
     * Soap constructor.
     * @param SoapWrapper $soapWrapper
     * @param string $domain
     */
    private function __construct(SoapWrapper $soapWrapper, string $domain)
    {
        $this->soapWrapper = $soapWrapper;
        $this->domain = $domain;
    }

    /**
     * @var Soap
     */
    private static $instance;

    /**
     * gets the instance via lazy initialization (created on first usage)
     * @param string $domain
     * @param array|null $uriList
     * @return Soap
     * @throws \Artisaninweb\SoapWrapper\Exceptions\ServiceAlreadyExists
     */
    public static function getInstance(string $domain, array $uriList = null): Soap
    {
        if (null === static::$instance) {
            $soapWrapper = new SoapWrapper();
            static::$instance = new static($soapWrapper, $domain);
            static::$instance->init($uriList);
        }


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
            //If you want to call __soapCall, you must wrap the arguments in another array as follows:
            $result = $this->soapWrapper->call($call.'.'.$call, [$parameters]);
        } catch (\Exception $e) {

        }

        return $result;
    }

    /**
     * Add all services
     * @param array $uriList
     * @throws \Artisaninweb\SoapWrapper\Exceptions\ServiceAlreadyExists
     */
    public function init(array $uriList = null)
    {
        if (empty($uriList)) {
            return;
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
}
