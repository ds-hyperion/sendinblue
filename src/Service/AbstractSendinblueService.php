<?php

namespace Hyperion\Sendinblue\Service;

abstract class AbstractSendinblueService
{
    protected $apiInstance;

    public function __construct()
    {
        $credentials = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', '');

        $this->apiInstance = new SendinBlue\Client\Api\ContactsApi(
            new GuzzleHttp\Client(),
            $credentials
        );
    }
}