<?php

namespace App\Controllers;

use PDO;

abstract class BaseController {
	protected $dbh;

	public function __construct(PDO $dbh) {
		$this->dbh = $dbh;
	}

	protected function queryAll($table, $type) {
		$query = $this->dbh->prepare("SELECT * FROM {$table}");
		$query->execute();

		return $query->fetchAll(PDO::FETCH_CLASS, $type);
	}

	protected function queryId($table, $type, $id) {
		$query = $this->dbh->prepare("SELECT * FROM {$table} WHERE id = :id");
		$query->bindParam(':id', $id);
		$query->execute();

		return $query->fetchObject($type);
	}

	protected function queryWhere($table, $type, $column, $value) {
		$query = $this->dbh->prepare("SELECT * FROM {$table} WHERE {$column} = :val");
		$query->bindParam(':val', $value);
		$query->execute();

		return $query->fetchAll(PDO::FETCH_CLASS, $type);
	}

}
