<?php


// access request object

$employeeSalary = $_POST['emp_salary'];
$paymentValue = $_POST['paymentValue'];
$workingHours = $_POST['workingHours'];


function calculateOTPayment($employeeSalary, $paymentValue, $workingHours)
{
    $employeeSalary = (int)$employeeSalary ;
    $paymentValue = (int)$paymentValue ;
    $workingHours = (int)$workingHours ;

    $salary = $paymentValue * $workingHours;
    $employeeSalary += $salary;
    echo $employeeSalary;
}


calculateOTPayment($employeeSalary, $paymentValue, $workingHours);




