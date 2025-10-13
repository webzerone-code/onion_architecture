<?php

namespace App\Http\Controllers;

use App\architecture\onion\application\services\ProductService;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private ProductService $productService;
    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }
    public function index()
    {
        return $this->productService->createProduct(
            "My Product",
            "description",
            "productImage",
            20.00
        )->getId();
    }
}
