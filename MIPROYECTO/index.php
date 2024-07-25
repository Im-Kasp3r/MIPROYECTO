<?php
require_once 'class/autoload.php';

$productController = new ProductController();
$products = $productController->getAllProducts();
$categories = $productController->getAllCategories();

require 'views/home.html';
?>
