<?php

namespace Source\App;

class Product
{
    private $value;
    private $tax;
    private $taxValue;
    private $totalPrice;

    public function __construct($value, $tax)
    {
        $this->value = floatval($value);
        $this->taxValue = floatval($value) * floatval($tax) / 100;
        $this->tax = floatval($tax);
    }

    public function getValue()
    {
        return 'R$ '.number_format($this->value, '2', ',','.');
    }
    public function getTax()
    {
        return $this->tax.'%';
    }

    public function getTaxValue()
    {
        return 'R$ '. number_format($this->taxValue, '2', ',', '.');
    }

    public function totalPrice()
    {
        $price = $this->value + $this->tax;
        return 'R$ '.number_format($price, '2', ',' , '.');
    }

}
