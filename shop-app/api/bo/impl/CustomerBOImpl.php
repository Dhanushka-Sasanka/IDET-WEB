<?php

require_once __DIR__ . "/../../bo/CustomerBO.php";
require_once __DIR__ . "/../../dto/CustomerDTO.php";
require_once __DIR__ . "/../../db/DBConnection.php";
require_once __DIR__ . "/../../repo/impl/CustomerRepoImpl.php";

class CustomerBOImpl implements CustomerBO
{
    private $customerRepo;
    private $connection;

    public function __construct()
    {
        $this->connection = (new DBConnection())->getConnection();
        $this->customerRepo = new CustomerRepoImpl();
        $this->customerRepo->setConnection($this->connection);
    }

    public function addCustomer(CustomerDTO $customerDTO): bool
    {
        /*//1  connection
                $connection = (new DBConnection())->getConnection();

                $customerRepo = new CustomerRepoImpl();
                $customerRepo->setConnection($connection);

        // 2  related repo method call
                return $customerRepo->addCustomer($customerDTO);*/

        return $this->customerRepo->addCustomer($customerDTO);


    }

    public function getAllCustomers(): array
    {
        return $this->customerRepo->getAllCustomers();
    }

    public function deleteCustomer($customerId): bool
    {
        return $this->customerRepo->deleteCustomer($customerId);
    }

    public function searchCustomer($customerId): array
    {
        return $this->customerRepo->searchCustomer($customerId);
    }

    public function editCustomer(CustomerDTO $customerDTO): bool
    {
        return $this->customerRepo->editCustomer($customerDTO);
    }
}
