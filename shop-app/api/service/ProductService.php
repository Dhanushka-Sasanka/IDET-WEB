<?php

require_once __DIR__ . "/../dto/ProductDTO.php";
require_once __DIR__ . "/../bo/impl/ProductBOImpl.php";

$method = $_SERVER['REQUEST_METHOD'];
$productBOImpl = new ProductBOImpl();
switch ($method) {

    case "GET":
        echo json_encode($productBOImpl->getAllProducts());
        break;
    //
    case "POST":
        $operation = $_POST['operation'];


        switch ($operation) {
            case "add":
                $code = $_POST['code'];
                $description = $_POST['description'];
                $qtyOnHand = $_POST['qtyOnHand'];
                $unitPrice = $_POST['unitPrice'];
                // ProductDTO object
                $productDto = new ProductDTO($code, $description, $qtyOnHand, $unitPrice);
                echo $productBOImpl->addProduct($productDto);
                break;
            case "delete":
                $productId = $_POST['code'];
                echo $productBOImpl->deleteProduct($productId);
                break;
            case "search":
                $productId = $_POST['code'];
                echo json_encode($productBOImpl->searchProduct($productId));
                break;
            case "edit":
                $code = $_POST['code'];
                $description = $_POST['description'];
                $qtyOnHand = $_POST['qtyOnHand'];
                $unitPrice = $_POST['unitPrice'];
                // ProductDTO object
                $productDto = new ProductDTO($code, $description, $qtyOnHand, $unitPrice);
                echo $productBOImpl->editProduct($productDto);
                break;

        }
//        business function inside bo have to call


}
