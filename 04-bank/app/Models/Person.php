<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Person extends Model {
	public function getFullName() {
		return "{$this->firstname} {$this->lastname}";
	}
}
