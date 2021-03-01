<?php

class TransactionController {
	protected $dbh;

	public function __construct(PDO $dbh) {
		$this->dbh = $dbh;
	}

	public function getTransactions(int $account_id) {
		$query = $this->dbh->prepare("SELECT * FROM transactions WHERE account_id = :account_id");
		$query->bindParam(':account_id', $account_id);
		$query->execute();

		return $query->fetchAll(PDO::FETCH_CLASS, 'Transaction');
	}

	public function getTransaction(int $id) {
		$query = $this->dbh->prepare("SELECT * FROM transactions WHERE id = :id");
		$query->bindParam(':id', $id);
		$query->execute();

		return $query->fetchObject('Transaction');
	}
}
