<?php

class Horse {
	public $name;
	public $breed;
	public $color;
	public $height = 'n/a';
	public $weight = 'n/a';
	public $sex = "unknown";
	public $owner;

	public function __construct($name, $breed, $color) {
		// this will always be executed when
		// a new instance of this class is created
		// (ex. when we run `new Horse()`)

		$this->name = $name;
		$this->breed = $breed;
		$this->color = $color;
	}

	public function getInfo() {
		$info = "<h2>{$this->name}</h2>";

		if ($this->hasOwner()) {
			$info .= "<p>Owner: {$this->getOwner()}</p>";
		} else {
			$info .= "<p>This horse is for sale! <strong>BUY NAOW!!</strong></p>";
		}

		$info .= "<ul>
			<li>Breed: {$this->breed}</li>
			<li>Color: {$this->color}</li>
			<li>Height: {$this->height} cm</li>
			<li>Weight: {$this->weight} kg</li>
			<li>Sex: {$this->sex}</li>
		</ul>";

		return $info;
	}

	public function getHeight() {
		return $this->height;
	}

	public function setHeight($height) {
		if (!is_numeric($height) || $height <= 0) {
			return false;
		}

		$this->height = $height;
		return true;
	}

	public function getOwner() {
		return $this->owner;
	}

	public function hasOwner() {
		return (!empty($this->owner)); // will return TRUE if owner is NOT empty
	}

	public function setOwner($name) {
		if (empty($name)) {
			return false;
		}

		$this->owner = $name;
		return true;
	}
}
