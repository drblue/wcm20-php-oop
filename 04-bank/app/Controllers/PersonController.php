<?php

namespace App\Controllers;

use App\Models\Person;

class PersonController extends BaseController {
	protected $model = Person::class;
	protected $table = 'people';

	public function getPeople() {
		return $this->queryAll();
	}

	public function getPerson(int $id) {
		return $this->queryId($id);
	}
}
