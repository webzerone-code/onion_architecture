<?php

namespace App\architecture\onion\domain\entity;

class ProductVariant
{
    private string $id;
    private array $optionsValues; // {"Color": "Red", "Size": "L"}
    private float $priceAdjustment;
    private int $stock;

    public function __construct(string $id, array $optionsValues, float $priceAdjustment, int $stock)
    {
        $this->id = $id;
        $this->optionsValues = $optionsValues;
        $this->priceAdjustment = $priceAdjustment;
        $this->stock = $stock;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getOptionsValues(): array
    {
        return $this->optionsValues;
    }

    public function getPriceAdjustment(): float
    {
        return $this->priceAdjustment;
    }

    public function getStock(): int
    {
        return $this->stock;
    }

}
