<?php

class AccountController {
	protected $dbh;

	public function __construct(PDO $dbh) {
		$this->dbh = $dbh;
	}

	public function getAccounts(int $person_id) {
		$query = $this->dbh->prepare("SELECT * FROM accounts WHERE person_id = :person_id");
		$query->bindParam(':person_id', $person_id);
		$query->execute();

		return $query->fetchAll(PDO::FETCH_CLASS, 'Account');
	}

	public function getAccount(int $id) {
		$query = $this->dbh->prepare("SELECT * FROM accounts WHERE id = :id");
		$query->bindParam(':id', $id);
		$query->execute();

		return $query->fetchObject('Account');
	}
}
