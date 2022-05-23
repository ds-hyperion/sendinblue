<?php

namespace Hyperion\Sendinblue\Service;

use Hyperion\Sendinblue\Plugin;

abstract class AbstractSendinblueService
{
    private static $credentials = null;

    protected static function getCredentials()
    {
        if(get_option(Plugin::SENDINBLUE_APIKEY_OPTION) === false) {
            throw new \Exception("API key for sendinblue not configured");
        }

        if(!self::$credentials) {
            self::$credentials = \SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', get_option(Plugin::SENDINBLUE_APIKEY_OPTION));
        }

        return self::$credentials;
    }
}