<?php
    
	class BankAccount {
		public function __construct CreateAccount($Money) {
			public $balance = $Money;
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
	$anu = new BankAccount(5000);
	Echo 'Bank Account Status <br/>';
	$anu->DisplayBalance();
	$anu->Deposit(2000);
	$anu->WithDraw(150);
	$anu->DisplayBalance(); 
	
?>