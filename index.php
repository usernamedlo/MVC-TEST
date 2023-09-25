<?php

require 'autoloader.php';
require 'config.php';
require 'model/Database.php';
require 'model/Product.php';
require 'controller/ProductsController.php';

use Controller\ProductsController;
$controller = new ProductsController();


$controller->listProducts();

?>