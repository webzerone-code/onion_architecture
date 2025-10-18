<?php

namespace App\architecture\onion\application\services;

use App\architecture\onion\application\services\factories\ShippingFactory;
use App\architecture\onion\application\services\factories\ShippingFactoryInterface;
use App\architecture\onion\domain\entity\Category;
use App\architecture\onion\domain\entity\Product;
use App\architecture\onion\domain\entity\Tag;
use App\architecture\onion\domain\repository\ProductRepositoryInterface;
use App\architecture\onion\domain\sevice\product\ProductService;
use App\architecture\onion\domain\sevice\product\ProductServiceInterface;

class ProductApplicationService
{
    private ProductRepositoryInterface $productRepositoryInterface;
    private ProductServiceInterface $productService;
    private ShippingFactoryInterface $shippingFactoryInterface;
    public function __construct(ProductRepositoryInterface $productRepositoryInterface,ProductServiceInterface $productService,ShippingFactoryInterface $shippingFactoryInterface)
    {
        $this->productRepositoryInterface = $productRepositoryInterface;
        $this->productService = $productService;
        $this->shippingFactoryInterface = $shippingFactoryInterface;
    }

    public function createProduct(string $productTitle, string $productDescription,string $productImage,float $productPrice):Product
    {
        //$productService = $this->productServiceInstance();
        $product  = new Product();
        $category = new Category();
        $category->setId(1);
        $tag      = new Tag();
        $tag->setId(1);
        $product->setCategory($category);
        $product->setTag($tag);
        $product->setProductTitle($productTitle);
        $product->setProductDescription($productDescription);
        $product->setProductImage($productImage);

        $productPrice = $this->productService->getShippingCost($productPrice,$this->shippingFactoryInterface->make('express')); // this need to be changes no need to inject the shipping in the product service u can simply call the shipping service and add the price for the actual product

        $product->setProductPrice($productPrice);
        $dbProduct = $this->productRepositoryInterface->create($product);
        $product->setId($dbProduct);
        return $product;
    }
}
