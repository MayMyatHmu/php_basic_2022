<?php
class BankAccount { 
 // creating the properties
 public $balance;
 public $accountNumber;
 //private $pin;
}

// creating the object
$account = new BankAccount();
$account->balance = 100;
 $account->accountNumber = 1;
 echo "your account balance is: " . $account->balance;
 echo "<hr>";
 echo "your account number is: " . $account->accountNumber;
// $account->pin = 1234;
?>