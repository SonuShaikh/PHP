<?php

class BankAccount{
	public $balance;
	public function balance($bal){
		$balance = $bal;
	}
	
	public function Deposite($amount) { 
	     $this->balance = $this->balance + $amount;
	 }
	public function Withdraw($amount) {
		if($this->balance < $amount) {
			echo 'You Don\'t Have Enougth Balance  ';
		}
		else{
			$this->balance =  $this->balance - $amount;
		}
	}
	public function DisplayBalance(){
		Return'Balance '.$this->balance;
	}
}
$sonu = new BankAccount();
$sonu->balance(5000);
$sonu->Deposite(1000);

echo 'Sonu\'s '.$sonu->DisplayBalance().'<br/>';

$sonu->Withdraw(100);

echo 'After The Withdraw Money '.$sonu->DisplayBalance();



?>