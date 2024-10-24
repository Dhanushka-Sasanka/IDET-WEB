<?php


require_once __DIR__ . "/../../repo/CustomerRepo.php";
require_once __DIR__ . "/../../dto/CustomerDTO.php";

class CustomerRepoImpl implements CustomerRepo
{
    private $connection;

    public function setConnection(mysqli $mysqliConnection): void
    {
        $this->connection = $mysqliConnection;
    }

    public function addCustomer(CustomerDTO $customerDTO): bool
    {
//        1 write query
        $query = "INSERT INTO customer (customer_id, address, name, salary) VALUES ('{$customerDTO->getId()}', 
                                                                  '{$customerDTO->getAddress()}',
                                                                  '{$customerDTO->getName()}',
                                                                  {$customerDTO->getSalary()})";
//        2 send query via connection
        return $this->connection->query($query);
//        3 return response
//        return  $response;
    }

    public function getAllCustomers(): array
    {
//  return $this->connection->query("SELECT * FROM customer")->fetch_all();

        $query = "SELECT * FROM customer";
        $result = $this->connection->query($query);
        return $result->fetch_all();

    }

    public function deleteCustomer($customerId): bool
    {
        $query = "DELETE FROM customer WHERE customer_id = '$customerId'";
        $result = $this->connection->query($query);
        return $result > 0;

    }

    public function searchCustomer($customerId): array
    {
        $query = "SELECT * FROM customer WHERE  customer_id = '$customerId'";
        $result = $this->connection->query($query);
        return $result->fetch_assoc();
    }

    public function editCustomer(CustomerDTO $customerDTO): bool
    {
        $query = "UPDATE customer
        SET NAME ='{$customerDTO->getName()}',address='{$customerDTO->getAddress()}',salary={$customerDTO->getSalary()}
        WHERE customer_id= '{$customerDTO->getId()}'";
        $result = $this->connection->query($query);
        return $result > 0;
    }
}
