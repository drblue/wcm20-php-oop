<?php

namespace App\Controllers;

use App\Models\Transaction;

class TransactionController extends BaseController {
	protected $model = Transaction::class;
	protected $table = 'transactions';

	public function getTransactions(int $account_id) {
		return $this->queryAll('account_id', $account_id);
	}

	public function getTransaction(int $id) {
		return $this->queryId($id);
	}
}
