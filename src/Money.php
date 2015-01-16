<?php
class Money
{
    /**
     * @var integer
     */
    private $amount;

    public function __construct($amount)
    {
        if (!is_int($amount)) {
            throw new Exception('$amount must be an integer');
        }

        $this->amount   = $amount;
    }

    public function validate($value)
    {
        if (!is_int($value)) {
            throw new Exception('$value must be an integer');
        }
    }

    public function add($amount)
    {

        $value = $this->amount + $amount;

        $this->validate($value);
        
        $this->amount = $value;        
    }

    public function subtract($amount)
    {
        $value = $this->amount - $amount;

        $this->validate($value);

        $this->amount = $value;
    }

    public function negate()
    {
        $this->amount = (-1 * $this->amount);
    }

    public function multiply($factor)
    {

        $value = (int)round($factor * $this->amount);

        $this->validate($value);

        $this->amount = $value;
    }

    public function getAmount()
    {
        return $this->amount;
    }

}
