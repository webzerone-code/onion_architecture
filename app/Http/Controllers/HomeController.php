<?php

namespace App\Http\Controllers;

use App\architecture\onion\application\services\ProductApplicationService;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private ProductApplicationService $productService;
    public function __construct(ProductApplicationService $productService)
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
