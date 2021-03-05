<?php

namespace App\Models;

class Transaction extends BaseModel {
	protected $date;
	protected $description;
	protected $amount;
	protected $account_id;

	public function getDate() {
		return $this->date;
	}

	public function getDescription() {
		return $this->description;
	}

	public function getAmount() {
		return $this->amount;
	}

	public function getAccountId() {
		return $this->account_id;
	}
}
