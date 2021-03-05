<?php

namespace App\Controllers;

use App\Models\Person;

class PersonController extends BaseController {

	public function getPeople() {
		return Person::all();
	}

	public function getPerson(int $id) {
		return Person::find($id);
	}
}
