<?php

namespace App\Controllers;

use App\Models\Transaction;

class TransactionController extends BaseController {
	public function getTransactions(int $account_id) {
		return Transaction::where('account_id', $account_id)->get();
	}

	public function getTransaction(int $id) {
		return Transaction::find($id);
	}
}
