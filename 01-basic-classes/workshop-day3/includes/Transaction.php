<?php

class Transaction {
	protected $amount;
	protected $date;
	protected $description;

	public function __construct(float $amount, string $description, $date = null) {
		if (!$date) {
			$date = date('Y-m-d');
		}

		$this->amount = $amount;
		$this->date = $date;
		$this->description = $description;
	}

	public function getAmount() {
		return $this->amount;
	}

	public function getDate() {
		return $this->date;
	}

	public function getDescription() {
		return $this->description;
	}
}
