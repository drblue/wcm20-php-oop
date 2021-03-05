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

	public function createPerson($firstname, $lastname) {
		$person = new Person();
		$person->firstname = $firstname;
		$person->lastname = $lastname;
		$person->save();
	}

	public function updatePerson($person_id, $firstname, $lastname) {
		$person = Person::find($person_id);
		$person->firstname = $firstname;
		$person->lastname = $lastname;
		$person->save();
	}
}
