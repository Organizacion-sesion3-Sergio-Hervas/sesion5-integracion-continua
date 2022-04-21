<?php
use PHPUnit\Framework\TestCase;
require 'Numero.php';

class NumeroTest extends TestCase
{
    private $numero;
 
    protected function setUp(): void
    {
        $this->numero = new numero();
    }
 
    protected function tearDown(): void
    {
        $this->numero = NULL;
    }
 
    public function testesPar1(): void
    {
        $result = $this->numero->esPar(2);
        $this->assertEquals(true, $result);
    }
    
        public function testesPar2(): void
    {
        $result = $this->numero->esPar(3);
        $this->assertEquals(true, $result);
    }
    
        public function testesPar3(): void
    {
        $result = $this->numero->esPar(4);
        $this->assertEquals(true, $result);
    }

    public function testesPar4(): void
    {
        $result = $this->numero->esPar(5);
        $this->assertEquals(true, $result);
    }

    
    
/*
    public function testMultiply(): void
    {
        $result = $this->calculator->multiply(5, 2);
        $this->assertEquals(10, $result);
    }

    public function testDivision(): void
    {
        $result = $this->calculator->division(10, 2);
        $this->assertEquals(5, $result);
    }
 */
 
}
