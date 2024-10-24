<?php

require_once __DIR__ . "/../dto/CustomerDTO.php";

interface CustomerBO
{

    public function addCustomer(CustomerDTO $customerDTO): bool;

    public function getAllCustomers(): array;

    public function deleteCustomer($customerId): bool;

    public function searchCustomer($customerId): array;

    public function editCustomer(CustomerDTO $customerDTO): bool;

}
