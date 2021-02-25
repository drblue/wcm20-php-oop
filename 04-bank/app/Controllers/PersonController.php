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

	public function getPerson(int $id) {
		$query = $this->dbh->prepare("SELECT * FROM people WHERE id = :id");
		$query->bindParam(':id', $id);
		$query->execute();

		return $query->fetchObject('Person');
	}
}
