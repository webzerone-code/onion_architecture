<?php

namespace App\architecture\onion\domain\sevice\shipping;

class ExpressShipping implements ShippingInterface
{

    public function name(): string
    {
        return "Express";
    }

    public function cost(float $subtotal): float
    {
        return $subtotal + 100;
    }

    public function etaDays(): int
    {
        return 15;
    }
}
