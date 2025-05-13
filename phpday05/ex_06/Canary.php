<?php
class Canary extends Animal {
	private $eggs = 0;
	public function __construct($name, $Legs = 2, $eggs = 0, $type = self::BIRD) {
		$this->name = $name;
		$this->legs= 2;
		$this->type = self::BIRD;
		$this->eggs = 0;
		parent::__construct($this->name, $this->legs, $this->type);
		echo "Yellow and smart? Here I am!" . "\n";
	}

	public function getEggsCount() {
		return $this->eggs;
	}
	public function layEgg() {
		$this->eggs += 1;
	}
}


