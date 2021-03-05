<?php

namespace App\Controllers;

class AccountController extends BaseController {

	public function getAccounts(int $person_id) {
		return $this->queryAll('accounts', 'App\Models\Account', 'person_id', $person_id);
	}

	public function getAccount(int $id) {
		return $this->queryId('accounts', 'App\Models\Account', $id);
	}
}
