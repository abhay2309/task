<?php

class Money
{
    private $amount = 0;

    public function __construct($amount)
    {
        $this->amount = (float) $amount;
    }

    public function value()
    {
        return $this->amount;
    }

    public function add($v1 , $v2)
    {
        return $v1 + $v2;   
    }

    public function __toString()
    {
        return (string) $this->value();
    }
}