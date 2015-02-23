<?php

namespace Hj;

/**
 * Class Account
 * @package Hj
 */
class Account
{

    /**
     * @var float
     */
    protected $balance = 0;

    /**
     * get the balance
     *
     * @return float
     */
    public function getBalance()
    {
        return $this->balance;
    }

    /**
     * Set balance
     *
     * @param float $balance
     */
    public function setBalance($balance)
    {
        $this->balance = (float)$balance;
    }

    /**
     * Take money on the account
     *
     * @param float $amount
     * @return Account
     *
     * @throws \Exception
     */
    public function takeMoney($amount)
    {
        if ($this->getBalance() - $amount <= 0) {
            throw new \Exception("Overdrafts are not allowed");
        }

        $this->balance -= $amount;

        return $this;
    }

    /**
     * Add money to the account
     *
     * @param float $amount
     *
     * @return Account
     */
    public function addMoney($amount)
    {
        $this->balance += $amount;
    }
}