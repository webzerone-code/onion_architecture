<?php

namespace App\architecture\onion\application\services\factories;

use App\architecture\onion\domain\sevice\shipping\ExpressShipping;
use App\architecture\onion\domain\sevice\shipping\FedExShipping;
use App\architecture\onion\domain\sevice\shipping\ShippingInterface;

class ShippingFactory implements ShippingFactoryInterface
{
    public function make(string $method): ShippingInterface
    {
        $key = strtolower(trim($method));
        switch ($key) {
            case 'express':
                return new ExpressShipping();
            case 'fedex':
                return new FedExShipping();
            default:
                throw new \InvalidArgumentException("Unknown shipping method: {$method}");
        }
    }
}
