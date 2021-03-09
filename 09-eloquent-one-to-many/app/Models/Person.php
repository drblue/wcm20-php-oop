<?php

namespace App\Models;

use App\Models\Phone;
use Illuminate\Database\Eloquent\Model;

class Person extends Model {  // people

	/**
	 * Indicates if the model should be timestamped.
	 *
	 * @var bool
	 */
	public $timestamps = false;

	/**
	 * A Person has many Phones
	 *
	 * @return App\Models\Phone
	 */
	public function phones() {  // phones.person_id
		return $this->hasMany(Phone::class);  // phones      SELECT * FROM phones WHERE person_id = $person->id
	}

}
