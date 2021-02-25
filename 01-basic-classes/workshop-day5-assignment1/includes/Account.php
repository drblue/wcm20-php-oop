<?php

require_once('Transaction.php');

class Account {
	protected $accountNumber;
	protected $balance;
	protected $transactions = [];

	public function __construct(string $accountNumber, float $balance = 0) {
		$this->accountNumber = $accountNumber;
		$this->balance = $balance;
	}

	public function deposit(float $amount, string $description, $date = null): bool {
		$this->balance += $amount;
		$transaction = new Transaction($amount, $description, $date);
		array_push($this->transactions, $transaction);

		return true;
	}

	public function withdraw(float $amount, string $description, $date = null): bool {
		if ($this->balance - $amount <= 0) {
			// DENIED!
			return false;
		}

		$this->balance -= $amount;
		$transaction = new Transaction(-$amount, $description, $date);
		array_push($this->transactions, $transaction);

		return true;
	}

	public function getAccountNumber(): string {
		return $this->accountNumber;
	}

	public function getCurrentBalance(): float {
		return $this->balance;
	}

	public function getTransactions(): array {
		return $this->transactions;
	}

	// getNbrOfTransactions()
	// getTransactionCount()
	public function getTotalTransactions(): int {
		return count($this->transactions);
	}
}
