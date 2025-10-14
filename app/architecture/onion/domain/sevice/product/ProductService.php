<?php

namespace App\architecture\onion\domain\sevice\product;

use App\architecture\onion\domain\entity\Product;
use App\architecture\onion\domain\sevice\shipping\ShippingInterface;

class ProductService implements ProductServiceInterface
{
    private ShippingInterface $shipping;
    public function __construct(ShippingInterface $shipping)
    {
        $this->shipping = $shipping;
    }

    public function getShippingCost(float $price): float
    {
        return $this->shipping->cost($price);
    }
}
