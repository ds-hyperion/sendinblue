<?php

namespace Hyperion\Sendinblue\Service;

use Hyperion\Sendinblue\Plugin;

abstract class AbstractSendinblueService
{
    protected $apiInstance;

    public function __construct()
    {
        $credentials = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', get_option(Plugin::SENDINBLUE_API_KEY_OPTION));

        $this->apiInstance = new SendinBlue\Client\Api\ContactsApi(
            new GuzzleHttp\Client(),
            $credentials
        );
    }
}