<?php


class ProductController
{
private PDO $pdo;

    public function __construct()
    {
        $connection = new DataBase();
        $this->pdo = $connection->connect();
    }

    public function renderView(){
        $load_products = new ProductLoader();
        $products = $load_products->getAllProducts($this->pdo);

        require 'view/products.php';
    }

}