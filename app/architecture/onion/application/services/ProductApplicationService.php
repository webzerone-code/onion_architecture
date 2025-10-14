<?php

namespace App\architecture\onion\application\services;

use App\architecture\onion\domain\entity\Category;
use App\architecture\onion\domain\entity\Product;
use App\architecture\onion\domain\entity\Tag;
use App\architecture\onion\domain\repository\ProductRepositoryInterface;
use App\architecture\onion\domain\sevice\product\ProductService;
use App\architecture\onion\domain\sevice\product\ProductServiceInterface;
use App\architecture\onion\domain\sevice\shipping\ExpressShipping;

class ProductApplicationService
{
    private ProductRepositoryInterface $productRepositoryInterface;
    public function __construct(ProductRepositoryInterface $productRepositoryInterface)
    {
        $this->productRepositoryInterface = $productRepositoryInterface;
    }

    public function createProduct(string $productTitle, string $productDescription,string $productImage,float $productPrice):Product
    {
        $productService = $this->productServiceInstance();
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

        $productPrice = $productService->getShippingCost($productPrice);

        $product->setProductPrice($productPrice);
        $dbProduct = $this->productRepositoryInterface->create($product);
        $product->setId($dbProduct);
        return $product;
    }

    private function productServiceInstance(): ProductServiceInterface
    {
        $shipping = new ExpressShipping();
        return new ProductService($shipping);
    }
}
