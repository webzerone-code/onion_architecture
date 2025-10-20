<?php

namespace App\architecture\onion\domain\entity;

// Optional Class For Clearer Code
class ProductOption extends AbstractEntity
{
    private string $name; // Color
    private array $value; // ["Red", "Blue", "Green"]
}
