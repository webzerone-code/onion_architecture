<?php

namespace App\architecture\onion\application\services;

use App\architecture\onion\domain\entity\Product;
use App\architecture\onion\domain\entity\Shipping;
use App\architecture\onion\domain\sevice\shipping\ShippingInterface;

class ShippingService
{
    public function apply(Product $product, ShippingInterface $method, string $currency = 'USD'): Product
    {
        $shipping = new Shipping();
        $shipping->setMethod($method->name());
        $shipping->setShippingCost($method->cost($product->getProductPrice()));
        $shipping->setEtaDays($method->etaDays());
        $shipping->setCurrency($currency);

        $product->setShipping($shipping);
        return $product;
    }
}
