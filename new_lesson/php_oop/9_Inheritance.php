<?php
// parent_class
class BankAccount
{
    public $balance;

    public function getBalance()
    {
        return $this->balance;
    }

    public function deposit($amount)
    {
        if ($amount > 0) {
            $this->balance += $amount;
        }

        return $this;
    }
}
// child_class (inherit from paretn class)
class SavingAccount extends BankAccount
{ // withdraw method
    public function withdraw($amount)
    {
        if ($amount > 0 && $amount <= $this->balance) {
            $this->balance -= $amount;
        }

        return $this;
    }
}

// create an object
$account = new SavingAccount();
$account->deposit(100);
echo $account->getBalance();