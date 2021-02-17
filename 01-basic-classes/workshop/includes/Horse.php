<?php

class Horse {
	public $name;
	public $breed;
	public $color;
	public $height;
	public $weight;
	public $sex;

	public function getInfo() {
		return "{$this->name} är en {$this->color} {$this->sex} av rasen {$this->breed}. Hen är {$this->height} cm hög och väger {$this->weight} kg.";
	}
}
