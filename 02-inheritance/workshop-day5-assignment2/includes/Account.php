<?php

class Account {
	protected $accountNumber;
	protected $balance;
	const INTEREST = 0;

	public function __construct(string $accountNumber, float $balance = 0) {
		$this->accountNumber = $accountNumber;
		$this->balance = $balance;
	}

	public function getAccountNumber(): string {
		return $this->accountNumber;
	}

	public function getBalance(): float {
		return $this->balance;
	}

	public function getInterest(): float {
		return static::INTEREST;
	}

	public function getTotalInterest(): float {
		return $this->balance * static::INTEREST;
	}

	public function deposit(float $amount) {}
	public function withdraw(float $amount) {}
}
