<?php

require_once __DIR__ . "/../dto/CustomerDTO.php";

interface CustomerRepo
{

    public function setConnection(mysqli $mysqliConnection): void;

    public function addCustomer(CustomerDTO $customerDTO): bool;

    public function getAllCustomers();

    public function deleteCustomer($customerId): bool;

    public function searchCustomer($customerId): array;

    public function editCustomer(CustomerDTO $customerDTO): bool;

}
