<?php

require_once __DIR__ . "/../dto/CustomerDTO.php";
require_once __DIR__ . "/../bo/impl/CustomerBOImpl.php";

$method = $_SERVER['REQUEST_METHOD'];
$customerBOImpl = new CustomerBOImpl();
switch ($method) {

    case "GET":
        echo json_encode($customerBOImpl->getAllCustomers());
        break;
    //
    case "POST":
        $operation = $_POST['operation'];


        switch ($operation) {
            case "add":
                $customerId = $_POST['customerID'];
                $name = $_POST['customerName'];
                $address = $_POST['address'];
                $salary = $_POST['customerSalary'];
                // CustomerDTO object
                $customerDto = new CustomerDTO($customerId, $name, $address, $salary);
                echo $customerBOImpl->addCustomer($customerDto);
                break;
            case "delete":
                $customerId = $_POST['customerID'];
                echo $customerBOImpl->deleteCustomer($customerId);
                break;
            case "search":
                $customerId = $_POST['customerID'];
                echo json_encode($customerBOImpl->searchCustomer($customerId));
                break;
            case "edit":
                $customerId = $_POST['customerID'];
                $name = $_POST['customerName'];
                $address = $_POST['address'];
                $salary = $_POST['customerSalary'];
                // CustomerDTO object
                $customerDto = new CustomerDTO($customerId, $name, $address, $salary);
                echo $customerBOImpl->editCustomer($customerDto);
                break;

        }
//        business function inside bo have to call


}
