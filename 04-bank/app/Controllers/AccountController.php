<?php

namespace App\Controllers;

use App\Models\Account;

class AccountController extends BaseController {
	protected $model = Account::class;
	protected $table = 'accounts';

	public function getAccounts(int $person_id) {
		return $this->queryAll('person_id', $person_id);
	}

	public function getAccount(int $id) {
		return $this->queryId($id);
	}
}
