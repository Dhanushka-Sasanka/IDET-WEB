<?php


interface ProductBO
{
    public function addProduct(ProductDTO $productDTO): bool;

    public function getAllProducts(): array;

    public function deleteProduct($productId): bool;

    public function searchProduct($productId): array;

    public function editProduct(ProductDTO $productDTO): bool;
}
