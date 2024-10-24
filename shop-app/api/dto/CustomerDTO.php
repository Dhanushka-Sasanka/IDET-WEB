<?php


class CustomerDTO
{
    private $id;
    private $name;
    private $address;
    private $salary;

    /**
     * CustomerDTO constructor.
     * @param $id
     * @param $name
     * @param $address
     * @param $salary
     */
    public function __construct($id, $name, $address, $salary)
    {
        $this->id = $id;
        $this->name = $name;
        $this->address = $address;
        $this->salary = $salary;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address): void
    {
        $this->address = $address;
    }

    /**
     * @return mixed
     */
    public function getSalary()
    {
        return $this->salary;
    }

    /**
     * @param mixed $salary
     */
    public function setSalary($salary): void
    {
        $this->salary = $salary;
    }



}
