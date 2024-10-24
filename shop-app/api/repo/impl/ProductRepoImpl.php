<?php


require_once __DIR__ . "/../../repo/ProductRepo.php";
require_once __DIR__ . "/../../dto/ProductDTO.php";

class ProductRepoImpl implements ProductRepo
{
    private $connection;

    public function setConnection(mysqli $mysqliConnection): void
    {
        $this->connection = $mysqliConnection;
    }

    public function addProduct(ProductDTO $productDTO): bool
    {
//        1 write query
        $query = "INSERT INTO item (code, description, qty_on_hand, unit_price) VALUES ('{$productDTO->getCode()}', 
                                                                  '{$productDTO->getDescription()}',
                                                                  {$productDTO->getQtyOnHand()},
                                                                  {$productDTO->getUnitPrice()})";
//        2 send query via connection
        return $this->connection->query($query);
//        3 return response
//        return  $response;
    }

    public function getAllProducts(): array
    {
//  return $this->connection->query("SELECT * FROM product")->fetch_all();

        $query = "SELECT * FROM item";
        $result = $this->connection->query($query);
        return $result->fetch_all();

    }

    public function deleteProduct($productId): bool
    {
        $query = "DELETE FROM item WHERE code = '$productId'";
        $result = $this->connection->query($query);
        return $result > 0;

    }

    public function searchProduct($productId): array
    {
        $query = "SELECT * FROM item WHERE  code = '$productId'";
        $result = $this->connection->query($query);
        return $result->fetch_assoc();
    }

    public function editProduct(ProductDTO $productDTO): bool
    {
        $query = "UPDATE item
        SET description ='{$productDTO->getDescription()}',qty_on_hand={$productDTO->getQtyOnHand()} ,unit_price={$productDTO->getUnitPrice()}
        WHERE code = '{$productDTO->getCode()}'";
        $result = $this->connection->query($query);
        return $result > 0;
    }
}
