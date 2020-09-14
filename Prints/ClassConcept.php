<?php
    
	class BankAccount {
		public $balance = 0;
		 public function __construct ($Money){
			 $balance = $Money;
		 }
		
		public function Deposit($Money) {
			$this->balance += $Money;
			echo 'You Successfuly Deposited '.$Money.'Rs.<br/>';
		}
		public function WithDraw($Money) {
			if($this->balance > $Money) {
				$this->balance -=$Money;
				echo 'You Successfuly WithDraw '.$Money.'Rs.<br/>';
			} else {
				echo 'You Dont Have That Much Of Money To WithDraw <br/>';
			}
		}
		
		public function DisplayBalance() {
			echo ' Your Currenr Balance Is '.$this->balance.' Rs.<br/>';
		}
	}
	
	class SavingAccount extends BankAccount{
		
	}
	$anu = new BankAccount(500);
	Echo '<strong>Bank Account Status :</strong> <br/>';
	$anu->DisplayBalance();
	$anu->Deposit(2000);
	$anu->WithDraw(150);
	$anu->DisplayBalance(); 
	
	$anu = new SavingAccount(15000);
	Echo '<strong>Saving Account Status :</strong> <br/>';
	$anu->DisplayBalance();
	$anu->Deposit(5000);
	$anu->WithDraw(0);
	$anu->DisplayBalance(); 
	
?>
<!--
Output :
Bank Account Status : 
 Your Currenr Balance Is 0 Rs.
You Successfuly Deposited 2000Rs.
You Successfuly WithDraw 150Rs.
 Your Currenr Balance Is 1850 Rs.
Saving Account Status : 
 Your Currenr Balance Is 0 Rs.
You Successfuly Deposited 5000Rs.
You Successfuly WithDraw 0Rs.
 Your Currenr Balance Is 5000 Rs.
 -->