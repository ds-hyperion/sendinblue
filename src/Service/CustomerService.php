<?php

namespace Hyperion\Sendinblue\Service;

use Exception;

class CustomerService extends AbstractSendinblueService
{
    public function createCustomer(
        string $email,
        array $customerInfo,
        array $listIds = []
    )
    {
        $createContact = new \SendinBlue\Client\Model\CreateContact([
            'email' => $email,
            'updateEnabled' => true,
            'attributes' => [$customerInfo],
            'listIds' =>[$listIds]
        ]);

        try {
            $result = $this->apiInstance->createContact($createContact);
        } catch (Exception $e) {
            echo 'Exception when calling ContactsApi->createContact: ', $e->getMessage(), PHP_EOL;
        }
    }
}