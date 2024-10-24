<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>Hello PHP</h1>
<?php

// this is single comment
# this is single comment2

/*
this is
MultiLine
comment */

print("Hello IDET");

echo "<br>";
echo "Hello IDET";
echo "<br>";
printf("Hello IDET");
echo "<br>";
echo "<br> <hr>";

printf("Variables");

//String
$myClass = "PHP class";

$myclass = 'WEB CLASS';

//Integer
$number = 234;

//Double
$number = 78.25;

//Boolean
$boolean1 = true;
$boolean2 = false;

//Arrays
$simpleArray = array('A', true, "1254", 5854);
echo "<br>";
echo "This  is a array" . $simpleArray[0] . $simpleArray[2];
//print_r($simpleArray);
echo "<br>";

printf($myClass);
printf($myclass);


//Object
class Person
{
    var $name;
    var $address;

    function agePrint()
    {
        $age = 30;
        echo "This person is $age years old";
    }
}

echo "<br>";
$newPersonObject = new Person();
$newPersonObject->name = "Dhanushka";
$newPersonObject->address = "Colombo";

var_dump($newPersonObject);

echo "<br>";
printf("conditional Statements");
echo "<br> <hr>";
//conditional Statements
//if, ifelse, while, do while ,switch,

$result = 10 > 5;
if ($result) {
    echo "Result is greater than 10";
}
echo "<br>";

$result = 10 < 5;
if ($result) {
    echo "Result is greater than 10";
} else {
    echo "Result is less that 10";
}
echo "<br>";

$age = 30;

if ($age > 10) {
    echo "Result is greater than 100";
} elseif ($age == 20) {
    echo "Result is equal 20";
} elseif ($age == 30) {
    echo "Result is equal 30";
}

echo "<br>";

$times = 0;

while ($times < 10) {
    echo "<br>";
    echo $times . "-times";
    $times++;
}

for ($i = 0; $i < 10; $i++) {
    echo "<br>";
    echo $i . "- terms";
}

$count = 0;

do {
    echo "<br>";
    echo $count . "- counts";
    $count++;
} while ($count == 0);
echo "<br>";
$simpleArray = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 0);

foreach ($simpleArray as $item) {
    echo "Element Value $item \t";
}
echo "<br>";
$job = "SOFTWARE ENGINEER";

switch ($job) {
    case "FARMER":
        echo "<br>FARMER";
        break;
    case "SOFTWARE ENGINEER":
        echo "<br>SOFTWARE ENGINEER";
        break;
    case "AAA":
        echo "<br>ENGINEER";
        break;
    default:
        echo "<br>DEFAULT";

}
echo "<br> <hr>";
printf("PHP Arrays");

$array = array('JS', 'HTML', 'CSS', 'PHP', 'JAVA', 'ANGULAR');

$array[0] = "GO";
$array[1] = "React";
$array[2] = "Vue";

print_r($array);
echo "<br> <hr>";

$arrayLength = count($array);

for ($i = 0; $i < $arrayLength; $i++) {
    echo "Programming Language $array[$i]";
    echo "<br>";
}

printf("PHP Arrays - Associative Array");

$assc_array = array("name" => "Kamal", "address" => "Colombo", "salary" => 450000);

echo "Customer Name is " . $assc_array['name'] . ", Address is " . $assc_array['address'] . "And Salary is " . $assc_array['salary'];

echo "<br>";
foreach ($assc_array as $key => $value) {
    echo "Key is :" . $key . " Value is :" . $value;
    echo "<br>";
}

printf("PHP Arrays - Multidimensional Array");

$mul_array = array(array("FACEBOOK", "1852-3-02", "John"),
    array("INSTAGRAM", "1958-3-02", "Nimal"),
    array("Youtube", "2000-3-02", "Kamal")
);

echo "<br>";

print_r($mul_array);
echo "<br> <hr>";

printf("PHP Functions");
echo "<br>";

function getAllCustomer()
{
    echo "Customer Get All Function";
    echo "<br>";
}

function findCustomerById($customerId)
{
    echo "Customer ID is  $customerId";
    echo "<br>";
}

getAllCustomer();
findCustomerById("C458");


function calculateAge($birthYear)
{
    $currentYear = 2024;
    return $currentYear - $birthYear;
}

$currentAge = calculateAge(1995);

echo "Calculated Age is " . $currentAge;






echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";


?>
</body>
</html>
