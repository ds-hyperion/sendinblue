<?php

namespace Hyperion\Sendinblue\Service;

class CustomerService extends AbstractSendinblueService
{
    public static function createCustomer(
        string $email,
        array $customerInfo,
        array $listIds = []
    )
    {
        $configuration = self::getCredentials();

        $apiInstance = new \SendinBlue\Client\Api\ContactsApi(
            new \GuzzleHttp\Client(),
            $configuration
        );

        $createContact = new \SendinBlue\Client\Model\CreateContact([
            'email' => $email,
            'updateEnabled' => true,
            'attributes' => $customerInfo,
            'listIds' => $listIds
        ]);

        return $apiInstance->createContact($createContact);
    }
}