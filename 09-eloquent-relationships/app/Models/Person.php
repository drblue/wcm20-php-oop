<?php

namespace App\Models;

use App\Models\Phone;
use Illuminate\Database\Eloquent\Model;

class Person extends Model {  // people

	/**
	 * A Person has one Phone
	 *
	 * @return App\Models\Phone
	 */
	public function phone() {  // phones.person_id
		return $this->hasOne(Phone::class);  // phones      SELECT * FROM phones WHERE person_id = $person->id
	}

}
