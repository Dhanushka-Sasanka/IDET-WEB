<?php

abstract class Bike
{
    function __construct()
    {
        echo "<br><hr>";
    }
    abstract public function move();
}

class MotorBike extends Bike
{

    public function move()
    {
        echo "Motor Bike is moving";
    }
}

class Bicycle extends Bike
{

    public function move()
    {
        echo "Bicycle is pedaling";
    }
}

$bike = new MotorBike();
$bike->move();

$bike2 = new Bicycle();
$bike2->move();
