<?php


class ProductDTO
{
    private $code;
    private $description;
    private $qtyOnHand;
    private $unitPrice;

    /**
     * ProductDTO constructor.
     * @param $code
     * @param $description
     * @param $qtyOnHand
     * @param $unitPrice
     */
    public function __construct($code, $description, $qtyOnHand, $unitPrice)
    {
        $this->code = $code;
        $this->description = $description;
        $this->qtyOnHand = $qtyOnHand;
        $this->unitPrice = $unitPrice;
    }

    /**
     * @return mixed
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param mixed $code
     */
    public function setCode($code): void
    {
        $this->code = $code;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description): void
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getQtyOnHand()
    {
        return $this->qtyOnHand;
    }

    /**
     * @param mixed $qtyOnHand
     */
    public function setQtyOnHand($qtyOnHand): void
    {
        $this->qtyOnHand = $qtyOnHand;
    }

    /**
     * @return mixed
     */
    public function getUnitPrice()
    {
        return $this->unitPrice;
    }

    /**
     * @param mixed $unitPrice
     */
    public function setUnitPrice($unitPrice): void
    {
        $this->unitPrice = $unitPrice;
    }
}
