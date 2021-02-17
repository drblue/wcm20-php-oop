<?php

class Horse {
	public $name = 'Anonymous Horse';
	public $breed = 'N/A';
	public $color = 'N/A';
	public $height = 'N/A';
	public $weight = 'N/A';
	public $sex = 'N/A';

	public function getInfo() {
		return "{$this->name} är en {$this->color} {$this->sex} av rasen {$this->breed}. Hen är {$this->height} cm hög och väger {$this->weight} kg.";
	}
}
