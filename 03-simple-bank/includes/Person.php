<?php

require_once('Account.php');

class Person {
	protected $firstName;
	protected $lastName;
	protected $accounts = [];

	public function __construct(string $firstName, string $lastName) {
		$this->firstName = $firstName;
		$this->lastName = $lastName;
	}

	public function addAccount(Account $account) {
		array_push($this->accounts, $account);
	}

	public function getAccounts(): array {
		return $this->accounts;
	}

	public function getTotalBalance(): float {
		$totalBalance = 0;

		foreach ($this->accounts as $account) {
			$totalBalance += $account->getCurrentBalance();
		}

		return $totalBalance;
	}

	public function getFirstName(): string {
		return $this->firstName;
	}

	public function getLastName(): string {
		return $this->lastName;
	}

	public function getFullName(): string {
		return "{$this->firstName} {$this->lastName}";
	}
}
