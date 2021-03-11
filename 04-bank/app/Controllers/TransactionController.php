<?php

namespace App\Controllers;

use App\Models\Account;
use App\Models\Transaction;

class TransactionController extends BaseController {
	public function getTransactions(int $account_id) {
		return Transaction::where('account_id', $account_id)->orderBy('date', 'desc')->get();
	}

	public function getTransactionCount(int $account_id) {
		return Transaction::where('account_id', $account_id)->count();
	}

	public function getTransaction(int $id) {
		return Transaction::find($id);
	}

	public function createTransaction($account_id, $date, $description, $amount) {
		$account = Account::find($account_id);

		return $account->transactions()->create([
			'date' => $date,
			'description' => $description,
			'amount' => $amount,
		]);
	}
}
