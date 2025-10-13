<?php

namespace App\architecture\onion\domain\sevice\shipping;

class FedExShipping implements ShippingInterface
{

    public function name(): string
    {
        // TODO: Implement name() method.
    }

    public function cost(float $subtotal): float
    {
        // TODO: Implement cost() method.
    }

    public function etaDays(): int
    {
        // TODO: Implement etaDays() method.
    }
}
