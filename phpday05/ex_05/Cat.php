<?php
include_once("Animal.php");
class Cat extends Animal{
	private $color;

	public function __construct($name, $color = null) {
		if (is_null($color))
			$this->color = "grey";
		else
			$this->color = $color;
		$this->name = $name;
		$this->legs = 4;
		$this->type = self::MAMMAL;
		parent::__construct($this->name, $this->legs, $this->type);

		echo $this->name . ": MEEEOOWWWW" . "\n";
	}


	public function setColor($my_color) {
		$this->color = $my_color;
	}

	public function getColor() {
		return $this->color;
	}

	public function meow() {
		echo $this->name . " the " .$this->color . " kitty is meowing." . "\n";
	}
}
