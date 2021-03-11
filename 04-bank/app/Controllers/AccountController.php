<?php

namespace App\Controllers;

use App\Models\Account;
use App\Models\Person;

class AccountController extends BaseController {
	public function getAccounts($person) {
		if (is_numeric($person)) {
			$person = Person::find($person);
		}
		return $person->accounts()->orderBy('accountnumber')->get();
	}

	public function getAccountCount(int $person_id) {
		return Account::where('person_id', $person_id)->count();
	}

	public function getAccount(int $id) {
		return Account::find($id);
	}
}
