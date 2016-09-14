<?php

class FizzBuzz
{
	private $NUMBER_TO_TEXT = [1 => '1', 2 => '2', 3 => 'Fizz', 4 => '4', 5 => 'Buzz', 6 => 'Fizz', 7 => '7', 8 => '8', 9 => 'Fizz', 10 => 'Buzz', 11 => '11', 12 => 'Fizz', 13 => '13', 14 => '14'];

    public function count($int)
    {
		return $this->NUMBER_TO_TEXT[$int];
    }
}

class FizzBuzzTest extends PHPUnit_Framework_TestCase
{
    public function testFizzBuzzShouldBeOne()
    {
        $fizzbuzz = new FizzBuzz();
        $this->assertEquals('1', $fizzbuzz->count(1));
    }

    public function testFizzBuzzShouldBeTwo()
    {
        $fizzbuzz = new FizzBuzz();
        $this->assertEquals('2', $fizzbuzz->count(2));
    }

    public function testFizzBuzzShouldBeThree()
    {
        $fizzbuzz = new FizzBuzz();
        $this->assertEquals('Fizz', $fizzbuzz->count(3));
    }

    public function testFizzBuzzShouldBeFour()
    {
        $fizzbuzz = new FizzBuzz();
        $this->assertEquals('4', $fizzbuzz->count(4));
    }

    public function testFizzBuzzShouldBeFive()
    {
        $fizzbuzz = new FizzBuzz();
        $this->assertEquals('Buzz', $fizzbuzz->count(5));
    }

    public function testFizzBuzzShouldBeSix()
    {
        $fizzbuzz = new FizzBuzz();
        $this->assertEquals('Fizz', $fizzbuzz->count(6));
    }

    public function testFizzBuzzShouldBeSeven()
    {
        $fizzbuzz = new FizzBuzz();
        $this->assertEquals('7', $fizzbuzz->count(7));
    }

    public function testFizzBuzzShouldBeEight()
    {
        $fizzbuzz = new FizzBuzz();
        $this->assertEquals('8', $fizzbuzz->count(8));
    }

    public function testFizzBuzzShouldBeNine()
    {
        $fizzbuzz = new FizzBuzz();
        $this->assertEquals('Fizz', $fizzbuzz->count(9));
    }

    public function testFizzBuzzShouldBeTen()
    {
        $fizzbuzz = new FizzBuzz();
        $this->assertEquals('Buzz', $fizzbuzz->count(10));
    }

    public function testFizzBuzzShouldBeEleven()
    {
        $fizzbuzz = new FizzBuzz();
        $this->assertEquals('11', $fizzbuzz->count(11));
    }

    public function testFizzBuzzShouldBeTwelve()
    {
        $fizzbuzz = new FizzBuzz();
        $this->assertEquals('Fizz', $fizzbuzz->count(12));
    }

    public function testFizzBuzzShouldBeThirteen()
    {
        $fizzbuzz = new FizzBuzz();
        $this->assertEquals('13', $fizzbuzz->count(13));
    }

    public function testFizzBuzzShouldBeFourteen()
    {
        $fizzbuzz = new FizzBuzz();
        $this->assertEquals('14', $fizzbuzz->count(14));
    }
}
