<?php


class Vehicle
{
    private $color;
    private $brand;
    private $price;

    function changeColor($color)
    {
        $this->color = $color;
    }

    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;
    }
 
    /**
     * @param mixed $color
     */
    public function setColor($color): void
    {
        $this->color = $color;
    }

    /**
     * @return mixed
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * @param mixed $brand
     */
    public function setBrand($brand): void
    {
        $this->brand = $brand;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price): void
    {
        if ($price < 1000000) {
            $this->price = $price;
        }
    }

}

$vehicle = new Vehicle();
$vehicle->setColor("WHITE");
$vehicle->setBrand("BMW");
$vehicle->setPrice("5000000");


echo $vehicle->getBrand();
echo "<br>";
var_dump($vehicle);


//1.Encapsulations
//2.Inheritance
//3.Polymorphism
//4.Abstraction
