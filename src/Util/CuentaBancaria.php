<?php


namespace App\Util;

use Exception;

class CuentaBancaria
{
    protected $balance = 0;

    public function retirarDinero($balance)
    {
        $this->setBalence($this->getBalance() - $balance);
        return $this->getBalance();
    }

    protected function setBalence($balance)
    {
        if ($balance >= 0) {
            $this->balance = $balance;
        } else {
            throw new Exception();
        }

    }

    public function getBalance()
    {
        return $this->balance;
    }

    public function depositarDinero($balance)
    {
        $this->setBalence($this->balance + $balance);
        return $this->getBalance();
    }


}