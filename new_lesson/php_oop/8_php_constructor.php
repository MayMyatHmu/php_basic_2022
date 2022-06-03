<?php

class BankAccount
{ 
    public $accountNumber;
    public $blance;

    public function __construct($accountNumber)
    { 
        $this->accountNumber = $accountNumber;
        //$this->blance = blance;
        //echo $thsi;
    }

    public function get_account(){ 
        return $this->accountNumber;
    }

}
$object = new BankAccount(1);
echo $object->get_account();