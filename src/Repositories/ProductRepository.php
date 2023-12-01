<?php

namespace App\Repositories;

use App\Tools\Database;

class ProductRepository
{
    public function getProducts(): array
    {
        $databaseConnexion = Database::getInstance()->getConnexion();
        $query = $databaseConnexion->prepare('SELECT * FROM product');
        $query->execute();

        return $query->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function getProduct(int $productId): ?array
    {
        $databaseConnexion = Database::getInstance()->getConnexion();
        $query = $databaseConnexion->prepare('SELECT * FROM product WHERE id = :productId');
        $query->bindValue(':productId', $productId);
        $query->execute();

        $result = $query->fetch(\PDO::FETCH_ASSOC);

        if (empty($result)) {
            return null;
        }

        return $result;
    }
}
