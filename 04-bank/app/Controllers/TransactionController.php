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

	public function createTransaction($account_id, $date, $description, $amount) {
		/*
		$transaction = new Transaction();
		$transaction->account_id = $account_id;
		$transaction->date = $date;
		$transaction->description = $description;
		$transaction->amount = $amount;
		$transaction->save();  // returns true or false

		return $transaction;
		*/

		return Transaction::create([
			'account_id' => $account_id,
			'date' => $date,
			'description' => $description,
			'amount' => $amount,
		]);
	}
}
