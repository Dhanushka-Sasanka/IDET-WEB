<?php

require_once __DIR__ . "/../../bo/ProductBO.php";
require_once __DIR__ . "/../../dto/ProductDTO.php";
require_once __DIR__ . "/../../db/DBConnection.php";
require_once __DIR__ . "/../../repo/impl/ProductRepoImpl.php";

class ProductBOImpl implements ProductBO
{
    private $productRepo;
    private $connection;

    public function __construct()
    {
        $this->connection = (new DBConnection())->getConnection();
        $this->productRepo = new ProductRepoImpl();
        $this->productRepo->setConnection($this->connection);
    }

    public function addProduct(ProductDTO $productDTO): bool
    {
        return $this->productRepo->addProduct($productDTO);
    }

    public function getAllProducts(): array
    {
        return $this->productRepo->getAllProducts();
    }

    public function deleteProduct($productId): bool
    {
        return $this->productRepo->deleteProduct($productId);
    }

    public function searchProduct($productId): array
    {
        return $this->productRepo->searchProduct($productId);
    }

    public function editProduct(ProductDTO $productDTO): bool
    {
        return $this->productRepo->editProduct($productDTO);
    }
}
