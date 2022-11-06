<?php
namespace App\Services;

use Braintree\Gateway;

Class BrainTreeService extends Gateway{

    public function __construct(){
        return parent::__construct([
            'environment' => env(),
            'merchantId' => 'use_your_merchant_id',
            'publicKey' => 'use_your_public_key',
            'privateKey' => 'use_your_private_key'
        ]);
    }
}
