<?php
class Animal {
	public const MAMMAL = 0;
	public const FISH = 1;
	public const BIRD = 2;
	private $name;
	private $legs;
	private $type;
	private static $nbr_an = 0;
	private static $mammal_nbr = 0;
	private static $fish_nbr = 0;
	private static $bird_nbr = 0;

	public function __construct($name, $legs, $type) {
		if (! is_null($name) && ($type == self::MAMMAL) || ($type == self::FISH) || ($type == self::BIRD)) {
			$this->name = $name;
			$this->legs = $legs;
			$this->type = $type;
			self::$nbr_an++;
			if ($this->getType() === "mammal")
				self::$mammal_nbr++;
			elseif ($this->getType() === "fish")
				self::$fish_nbr++;
			elseif ($this->getType() === "bird")
				self::$bird_nbr++;
			echo "My name is " . $this->name . " and I am a " . $this->getType() . "!\n";
		}
	}

	public function __destruct() {
		self::$nbr_an--;
		if ($this->type == self::MAMMAL)
			self::$mammal_nbr--;
		elseif ($this->type == self::FISH)
			self::$fish_nbr--;
		elseif ($this->type == self::BIRD)
			self::$bird_nbr--;
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

	public static function getNumberOfAnimalsAlive() {
		if (self::$nbr_an == 1)
			echo "There is currently " . self::$nbr_an . " animal alive in our world." . "\n";
		else
			echo "There are currently " . self::$nbr_an . " animals alive in our world." . "\n";
		return self::$nbr_an;
	}

	public static function getNumberOfMammals() {
		if (self::$mammal_nbr == 1)
			echo "There is currently " .self::$mammal_nbr . " mammal alive in our world." . "\n";
		else
			echo "There are currently " .self::$mammal_nbr . " mammals alive in our world." . "\n";
		return self::$mammal_nbr;
	}

	public static function getNumberOfFishes() {
			if (self::$fish_nbr == 1 )
				echo "There is currently " .self::$fish_nbr . " fish alive in our world." . "\n";
			else
				echo "There are currently " .self::$fish_nbr . " fish alive in our world." . "\n";
		return self::$fish_nbr;
	}

	public static function getNumberOfBirds() {
		if (self::$bird_nbr == 1)
			echo "There is currently " . self::$bird_nbr . " bird alive in our world." . "\n";
		else
			echo "There are currently " .self::$bird_nbr . " birds alive in our world." . "\n";
		return self::$bird_nbr;
	}

}
