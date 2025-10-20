<?php

namespace App\architecture\onion\domain\entity;


class Product extends AbstractEntity
{
    private Category $category;


    private ?Shipping $shipping = null;
    private string $productTitle;
    private string $productDescription;
    private string $productImage;
    private float $productPrice;

    private int $stock = 0;

    private array $tag = [];
    public array $productOptions = [];
    public array $productVariants = [];

    public function getCategory(): Category
    {
        return $this->category;
    }

    public function setCategory(Category $category): void
    {
        $this->category = $category;
    }

    public function getTag(): array
    {
        return $this->tag;
    }

    public function setTag(array $tag): void
    {
        $this->tag = $tag;
    }

    public function getProductTitle(): string
    {
        return $this->productTitle;
    }

    public function setProductTitle(string $productTitle): void
    {
        $this->productTitle = $productTitle;
    }

    public function getProductDescription(): string
    {
        return $this->productDescription;
    }

    public function setProductDescription(string $productDescription): void
    {
        $this->productDescription = $productDescription;
    }

    public function getProductImage(): string
    {
        return $this->productImage;
    }

    public function setProductImage(string $productImage): void
    {
        $this->productImage = $productImage;
    }

    public function getProductPrice(): float
    {
        return $this->productPrice;
    }

    public function setProductPrice(float $productPrice): void
    {
        $this->productPrice = $productPrice;
    }

    public function getShipping(): Shipping
    {
        return $this->shipping;
    }

    public function setShipping(Shipping $shipping): void
    {
        $this->shipping = $shipping;
    }

    public function getProductOptions(): array
    {
        return $this->productOptions;
    }

    public function setProductOptions(array $productOptions): void
    {
        $this->productOptions = $productOptions;
    }

    public function getProductVariants(): array
    {
        return $this->productVariants;
    }

    public function setProductVariants(array $productVariants): void
    {
        $this->productVariants = $productVariants;
    }

    public function getStock(): int
    {
        return $this->stock;
    }

    public function setStock(int $stock): void
    {
        $this->stock = $stock;
    }
}
