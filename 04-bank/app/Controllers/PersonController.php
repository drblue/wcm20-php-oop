<?php

class PersonController {
	protected $dbh;

	public function __construct(PDO $dbh) {
		$this->dbh = $dbh;
	}

	public function getPeople() {
		$query = $this->dbh->prepare("SELECT * FROM people");
		$query->execute();

		return $query->fetchAll(PDO::FETCH_CLASS, 'Person');
	}
}
