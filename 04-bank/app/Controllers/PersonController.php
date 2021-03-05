<?php

namespace App\Controllers;

class PersonController extends BaseController {
	protected $model = 'App\Models\Person';
	protected $table = 'people';

	public function getPeople() {
		return $this->queryAll();
	}

	public function getPerson(int $id) {
		return $this->queryId($id);
	}
}
