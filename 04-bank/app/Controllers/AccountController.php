<?php

namespace App\Controllers;

class AccountController extends BaseController {
	protected $model = 'App\Models\Account';
	protected $table = 'accounts';

	public function getAccounts(int $person_id) {
		return $this->queryAll('person_id', $person_id);
	}

	public function getAccount(int $id) {
		return $this->queryId($id);
	}
}
