<?php

namespace App\Models;

abstract class BaseModel {
	protected $id;

	public function getId() {
		return $this->id;
	}
}
