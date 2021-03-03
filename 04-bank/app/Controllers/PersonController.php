<?php

namespace App\Controllers;

class PersonController extends BaseController {

	public function getPeople() {
		return $this->queryAll('people', 'App\Models\Person');
	}

	public function getPerson(int $id) {
		return $this->queryId('people', 'App\Models\Person', $id);
	}
}
