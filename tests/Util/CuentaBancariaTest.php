<?php


namespace App\Tests\Util;

use App\Util\CuentaBancaria;
use PHPUnit\Framework\TestCase;

class   CuentaBancaria_Test extends TestCase
{
    protected $cp;

    public function testBalanceIncialEsCero()
    {
        $this->assertEquals(0, $this->cb->getBalance());
    }

    public function testBalanceNoPuedeSerNegativo()
    {
        try {
            $this->cb->depositarDinero(-10);
        } catch (\Exception $e) {
            $this->assertEquals(0, $this->cb->getBalance());
        }
    }

    public function testBalanceNoPuedeSerNegativo2()
    {
        try {
            $this->cb->retirarDinero(10);
        } catch (\Exception $e) {
            $this->assertEquals(0, $this->cb->getBalance());
        }
    }

    protected function setUp()
    {
        $this->cb = new CuentaBancaria();
    }
}