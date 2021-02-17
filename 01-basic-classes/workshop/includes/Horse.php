<?php

class Horse {
	public $name = 'Anonymous Horse';
	public $breed = "mixed";
	public $color = "grey";
	public $height = 'n/a';
	public $weight = 'n/a';
	public $sex = "unknown";

	public function getInfo() {
		return "
			<h2>{$this->name}</h2>
			<ul>
				<li>Breed: {$this->breed}</li>
				<li>Color: {$this->color}</li>
				<li>Height: {$this->height} cm</li>
				<li>Weight: {$this->weight} kg</li>
				<li>Sex: {$this->sex}</li>
			</ul>
		";
	}
}
