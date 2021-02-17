<?php

class Horse {
	public $name = 'Anonymous Horse';
	public $breed = "mixed";
	public $color = "grey";
	public $height;
	public $weight;
	public $sex = "unknown";

	public function getInfo() {
		$info = "{$this->name} är en {$this->color} {$this->sex} av rasen {$this->breed}.";

		if ($this->height && $this->weight) {
			$info .= " Hen är {$this->height} cm hög och väger {$this->weight} kg.";
		}

		return $info;
	}
}
