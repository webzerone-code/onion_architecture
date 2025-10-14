<?php

namespace App\architecture\onion\domain\sevice\shipping;

class FedExShipping implements ShippingInterface
{

    public function name(): string
    {
        return "FedEx";
    }

    public function cost(float $subtotal): float
    {
        return $subtotal + 100;
    }

    public function etaDays(): int
    {
        return 10;
    }
}
