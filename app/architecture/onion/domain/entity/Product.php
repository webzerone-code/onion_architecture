<?php

namespace App\architecture\onion\domain\entity;


class Product extends AbstractEntity
{
    private Category $category;
    private Tag $tag;
    public string $productTitle;
    public string $productDescription;
    public string $productImage;
    public float $productPrice;

    public function getCategory(): Category
    {
        return $this->category;
    }

    public function setCategory(Category $category): void
    {
        $this->category = $category;
    }

    public function getTag(): Tag
    {
        return $this->tag;
    }

    public function setTag(Tag $tag): void
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
}
