<?php

class FizzBuzz
{
	private $NUMBER;
	private $NUMBER_TO_TEXT = [1 => '1', 2 => '2'];

    public function __construct($number)
    {
		$this->NUMBER = $number;
    }

    public function toString()
    {
		return $this->NUMBER_TO_TEXT[$this->NUMBER];
    }
}

class FizzBuzzTest extends PHPUnit_Framework_TestCase
{
    public function testFizzBuzzShouldBeOne()
    {
        $fizzbuzz = new FizzBuzz(1);
        $this->assertEquals('1', $fizzbuzz->toString());
    }

    public function testFizzBuzzShouldBeTwo()
    {
        $fizzbuzz = new FizzBuzz(2);
        $this->assertEquals('2', $fizzbuzz->toString());
    }
}
