<?php

class Horse {
	public $name;
	public $breed;
	public $color;
	public $height;
	public $weight;
	public $sex;
	public $owner;

	public function __construct($name, $breed, $color, $height = null, $weight = null, $sex = null) {
		// this will always be executed when
		// a new instance of this class is created
		// (ex. when we run `new Horse()`)

		$this->name = $name;
		$this->breed = $breed;
		$this->color = $color;

		/*
		if (!is_null($height)) {
			$this->height = $height;
		}
		*/
		$this->setHeight($height);

		/*
		if (!is_null($weight)) {
			$this->weight = $weight;
		}
		*/
		$this->setWeight($weight);

		$this->setSex($sex);
	}

	/** height */
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

	/** owner */
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

	/** sex */
	public function getSex() {
		return $this->sex;
	}

	public function setSex($sex) {
		$sexes = ['hingst', 'valack', 'sto'];

		if (!in_array($sex, $sexes)) {
			return false;
		}

		$this->sex = $sex;
		return true;
	}


	/** weight */
	public function getWeight() {
		return $this->weight;
	}

	public function setWeight($weight) {
		if (!is_numeric($weight) || $weight <= 0) {
			return false;
		}

		$this->weight = $weight;
		return true;
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
}
