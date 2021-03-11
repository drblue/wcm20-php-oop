<?php

namespace App\Models;

use App\Models\Person;
use App\Models\Transaction;
use Illuminate\Database\Eloquent\Model;

class Account extends Model {

	/**
	 * An Account can have many People
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
	 */
	public function people() {
		return $this->belongsToMany(Person::class);
	}

	/**
	 * An Account can have many Transactions.
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function transactions() {
		return $this->hasMany(Transaction::class);
	}

}
