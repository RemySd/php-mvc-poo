<?php

namespace App\Controllers;

use App\Repositories\ProductRepository;

class ProductController
{
    public function getProducts()
    {
        $productRepository = new ProductRepository();
        $products = $productRepository->getProducts();

        include_once BASE_PATH . '/templates/product/index.php';
    }

    public function getProduct()
    {
        $productId = null;

        if (empty($_GET['productId'])) {
            throw new \Exception('Produit introuvable');
        }

        $productId = $_GET['productId'];

        $productRepository = new ProductRepository();
        $product = $productRepository->getProduct($productId);

        if (empty($product)) {
            throw new \Exception('Produit introuvable');
        }

        include_once BASE_PATH . '/templates/product/show.php';
    }
}
