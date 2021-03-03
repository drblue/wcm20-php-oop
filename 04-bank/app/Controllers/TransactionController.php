<?php

namespace App\Controllers;

use PDO;

class TransactionController extends BaseController {

	public function getTransactions(int $account_id) {
		$query = $this->dbh->prepare("SELECT * FROM transactions WHERE account_id = :account_id");
		$query->bindParam(':account_id', $account_id);
		$query->execute();

		return $query->fetchAll(PDO::FETCH_CLASS, 'App\Models\Transaction');
	}

	public function getTransaction(int $id) {
		$query = $this->dbh->prepare("SELECT * FROM transactions WHERE id = :id");
		$query->bindParam(':id', $id);
		$query->execute();

		return $query->fetchObject('App\Models\Transaction');
	}
}
