<?php

namespace App\Controllers;

class TransactionController extends BaseController {

	public function getTransactions(int $account_id) {
		return $this->queryWhere('transactions', 'App\Models\Transaction', 'account_id', $account_id);
	}

	public function getTransaction(int $id) {
		return $this->queryId('transactions', 'App\Models\Transaction', $id);
	}
}
