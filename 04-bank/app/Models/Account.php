<?php

namespace App\Models;

use App\Models\Person;
use App\Models\Transaction;
use Illuminate\Database\Eloquent\Model;

class Account extends Model {

	/**
	 * An Account belongs to a Person
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function person() {
		return $this->belongsTo(Person::class);
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
