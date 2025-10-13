<?php

namespace App\architecture\onion\domain\sevice\shipping;

interface ShippingInterface
{
    public function name(): string;          // 'standard', 'express', 'free', etc.
    public function cost(float $subtotal): float;
    public function etaDays(): int;
}
