<?php

namespace App\Models;

use App\Models\Person;
use Illuminate\Database\Eloquent\Model;

class Phone extends Model {  // phones

	/**
	 * A Phone belongs to a Person
	 *
	 * @return App\Models\Phone
	 */
	public function person() {   // person_id
		// return $this->hasOne(Person::class);  // SELECT * FROM people WHERE phone_id = $phone->id
		return $this->belongsTo(Person::class);  // SELECT * FROM people WHERE id = $phone->person_id
	}

}
