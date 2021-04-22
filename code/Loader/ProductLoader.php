<?php


class ProductLoader
{
private array $all_products;


    public function getProduct(PDO $pdo, int $id): Product {
        $stmt = $pdo->prepare("SELECT * FROM Products WHERE id = :id");
        $stmt->bindValue(':id', $id);
        $stmt->execute();
        $result = $stmt->fetch();
        return new Product((int)$result['id'], $result['name'], (float)$result['price'], (float)$result['tax']);
    }

    public function getAllProducts(PDO $pdo): array {
        $stmt = $pdo->prepare("SELECT * FROM Products ORDER BY id");
        $stmt->execute();
        $results = $stmt->fetchAll();
        $all_products = [];
        foreach ($results as $result ){
            $all_products[] = new Product((int)$result['id'], $result['name'], (float)$result['price'], (float)$result['tax']);
        }
        return $all_products;
    }
}