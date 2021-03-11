<?php

namespace App\Models;

use App\Models\Account;
use Illuminate\Database\Eloquent\Model;

class Person extends Model {

	/**
	 * A Person can have many Accounts.
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
	 */
	public function accounts() {
		return $this->belongsToMany(Account::class);
	}

	public function getFullName() {
		return "{$this->firstname} {$this->lastname}";
	}
}
