<?php

class Account {
	protected $accountNumber;
	protected $balance;
	protected $interest = 0;

	public function __construct(string $accountNumber, float $balance = 0) {
		$this->accountNumber = $accountNumber;
		$this->balance = $balance;
	}

	public function getAccountNumber(): float {
		return $this->accountNumber;
	}

	public function getBalance(): float {
		return $this->balance;
	}

	public function getInterest(): float {
		return $this->interest;
	}

	public function getTotalInterest(): float {
		return $this->balance * $this->interest;
	}

	public function deposit(float $amount) {}
	public function withdraw(float $amount) {}
}
