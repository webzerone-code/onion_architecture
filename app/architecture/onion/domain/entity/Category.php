<?php

namespace App\architecture\onion\domain\entity;

class Category extends AbstractEntity
{
    private string $categoryTitle;
    private array $products;

    public function getCategoryTitle(): string
    {
        return $this->categoryTitle;
    }

    public function setCategoryTitle(string $categoryTitle): void
    {
        $this->categoryTitle = $categoryTitle;
    }

    public function getProducts(): array
    {
        return $this->products;
    }

    public function setProducts(array $products): void
    {
        $this->products = $products;
    }
}
