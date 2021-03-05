<?php

namespace App\Controllers;

class TransactionController extends BaseController {
	protected $model = 'App\Models\Transaction';
	protected $table = 'transactions';

	public function getTransactions(int $account_id) {
		return $this->queryAll('account_id', $account_id);
	}

	public function getTransaction(int $id) {
		return $this->queryId($id);
	}
}
