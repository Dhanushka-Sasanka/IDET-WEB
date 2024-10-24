<?php

require_once __DIR__ . "/../dto/ProductDTO.php";

interface ProductRepo
{

    public function setConnection(mysqli $mysqliConnection): void;

    public function addProduct(ProductDTO $productDTO): bool;

    public function getAllProducts();

    public function deleteProduct($productId): bool;

    public function searchProduct($productId): array;

    public function editProduct(ProductDTO $productDTO): bool;

}
