<?php

namespace Source\App;

/**
 * Class Product
 * @package Source\App
 */
class Product
{
    private $value;
    private $tax;
    private $taxValue;
    private $totalPrice;

    /**
     * Product constructor.
     * @param $value
     * @param $tax
     */
    public function __construct($value, $tax)
    {
        $this->value = floatval($value);
        $this->taxValue = floatval($value) * floatval($tax) / 100;
        $this->tax = floatval($tax);
    }

    /**
     * @return string
     */
    public function getValue(): string
    {
        return 'R$ ' . number_format($this->value, '2', ',', '.');
    }

    /**
     * @return string
     */
    public function getTax(): string
    {
        return $this->tax . '%';
    }

    /**
     * @return string
     */
    public function getTaxValue(): string
    {
        return 'R$ ' . number_format($this->taxValue, '2', ',', '.');
    }

    /**
     * @return string
     */
    public function totalPrice(): string
    {
        $price = ($this->value) + ($this->taxValue);
        return 'R$ ' . number_format($price, '2', ',', '.');
    }
}
