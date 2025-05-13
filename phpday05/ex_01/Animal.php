<?php
class Animal {
	public const MAMMAL = 0;
	public const FISH = 1;
	public const BIRD = 2;
	private $name;
	private $legs;
	private $type;
	public function __construct($name, $legs, $type) {
		if (! is_null($name) && ($type == self::MAMMAL) || ($type == self::FISH) || ($type == self::BIRD)) {
			$this->name = $name;
			$this->legs = $legs;
			$this->type = $type;
			echo "My name is " . $this->name . " and I am a " . $this->getType() . "!\n";
		}
	}

	public function getName() {
		return $this->name;
	}

	public function getLegs() {
		return $this->legs;
	}
	public function getType() {
		if ($this->type == 0)
			return "mammal";
		elseif ($this->type == 1)
			return "fish";
		elseif ($this->type == 2)
			return "bird";
	}
}
