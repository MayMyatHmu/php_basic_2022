<?php 
class BankAccount {
 // add properties
 public $blance;
 public $accountNumber;

 // add methods
 public function deposit($amount) {
  $this->balance += $amount;
 }
 public function withdraw($amount) {
  $this->balance -= $amount;
 }
}

// create the object
$account = new BankAccount();
$account->balance = 100;
$account->accountNumber = 1;
echo "your account balance is: " . $account->balance;
echo "<hr>";
echo "Your account number is: " . $account->accountNumber;

echo "<hr>";
$account->deposit(100);
echo "your account balance is: " . $account->balance;
echo "<hr>";
$account->withdraw(50);
echo "your account balance is: " . $account->balance;
?>