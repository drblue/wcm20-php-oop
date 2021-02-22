<?php

class Account {
	protected $accountNumber;
	protected $balance;

	public function __construct(string $accountNumber, float $balance = 0) {
		$this->accountNumber = $accountNumber;
		$this->balance = $balance;

		// echo "Created account {$accountNumber} with initial balance {$balance}.<br>";
	}

	public function deposit(float $amount) {
		// $this->balance = $this->balance + $amount;
		$this->balance += $amount; // same as above

		// echo "Deposited {$amount} to account {$this->accountNumber}, new balance: {$this->balance}.<br>";
	}

	public function withdraw(float $amount) {
		// $this->balance = $this->balance - $amount;
		$this->balance -= $amount; // same as above

		// echo "Withdrew {$amount} from account {$this->accountNumber}, new balance: {$this->balance}.<br>";
	}

	public function getAccountNumber() {
		return $this->accountNumber;
	}

	public function getCurrentBalance() {
		return $this->balance;
	}
}
