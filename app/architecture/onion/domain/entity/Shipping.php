<?php

namespace App\architecture\onion\domain\entity;

class Shipping extends AbstractEntity
{
    private float $shippingCost;
    private ?string $method = null;
    private ?int $etaDays = null;
    private ?string $currency = null;
    public function getShippingCost(): float
    {
        return $this->shippingCost;
    }

    public function setShippingCost(float $shippingCost): void
    {
        $this->shippingCost = $shippingCost;
    }

    public function getMethod(): ?string { return $this->method; }
    public function setMethod(?string $method): void { $this->method = $method; }

    public function getEtaDays(): ?int { return $this->etaDays; }
    public function setEtaDays(?int $etaDays): void { $this->etaDays = $etaDays; }

    public function getCurrency(): ?string { return $this->currency; }
    public function setCurrency(?string $currency): void { $this->currency = $currency; }


}
