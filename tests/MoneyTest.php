<?php
require_once '/home/ec2-user/money/src/Money.php';
class MoneyTest extends \PHPUnit_Framework_TestCase
{

    public function testCanBeNegated()
    {
        $a = new Money(1);
        $r1 = $a->getAmount();
        $b = $a->negate();
        $r2 = $a->getAmount();

        $this->assertEquals(1, $r1);
        $this->assertEquals(-1, $r2);
    }

    public function testCanBeMultipliedByAFactor()
    {
        $a = new Money(1);
        $r1 = $a->getAmount();
        $a->multiply(2);
        $r2 = $a->getAmount();

        $this->assertEquals(1, $r1);
        $this->assertEquals(2, $r2);
    }
}
