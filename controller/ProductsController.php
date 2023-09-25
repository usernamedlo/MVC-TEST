<?php

namespace Controller;

use Model\Product;

class ProductsController
{
    public function listProducts()
    {
        $products = Product::getAllProducts();
        require 'view/productList.php';
    }
}


?>