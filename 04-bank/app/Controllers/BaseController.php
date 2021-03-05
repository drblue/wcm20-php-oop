<?php

namespace App\Controllers;

use PDO;

abstract class BaseController {
	protected $dbh;

	public function __construct(PDO $dbh) {
		$this->dbh = $dbh;
	}

	protected function queryId($table, $type, $id) {
		$query = $this->dbh->prepare("SELECT * FROM {$table} WHERE id = :id");
		$query->bindParam(':id', $id);
		$query->execute();

		return $query->fetchObject($type);
	}

	protected function queryAll($table, $type, $column = null, $value = null) {
		if ($column) {
			$query = $this->dbh->prepare("SELECT * FROM {$table} WHERE {$column} = :val");
			$query->bindParam(':val', $value);
		} else {
			$query = $this->dbh->prepare("SELECT * FROM {$table}");
		}
		$query->execute();

		return $query->fetchAll(PDO::FETCH_CLASS, $type);
	}

}
