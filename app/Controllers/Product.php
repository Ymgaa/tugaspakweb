<?php

namespace App\Controllers;

use App\Models\ProductModel;

class Product extends BaseController
{
    public function index()
    {
        $product = new ProductModel();
        echo $product->getData();
    }
}