<?php

namespace App\Controllers;

use App\Models\Account;

class AccountController extends BaseController {
	public function getAccounts(int $person_id) {
		return Account::where('person_id', $person_id)->get();
	}

	public function getAccount(int $id) {
		return Account::find($id);
	}
}
