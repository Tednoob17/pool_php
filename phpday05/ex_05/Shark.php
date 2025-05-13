<?php
include_once("Animal.php");
class Shark extends Animal {
	private $frenzy = false;

	public function __construct($name, $legs = 0, $type = self::FISH, $frenzy = false){
		$this->name = $name;
		$this->legs = 0;
		$this->type =  self::FISH;
		$this->frenzy = false;
		parent::__construct($this->name, 0, $this->type);
		echo "A KILLER IS BORN!" . "\n";
		}

	public function smellblood(bool $zero_or_one){
		$this->frenzy = $zero_or_one;
	}

	public function status() {
		if ($this->frenzy == true)
			echo $this->name .  " is smelling blood and wants to kill." . "\n";
		else
			echo $this->name . " is swimming peacefully." . "\n";
	}

	public function eat ($animal)
	{
		if ($animal instanceof Animal)
		{
			
			if  (get_class($animal) != get_class($this) ){
				
					echo $this->name . " ate a ". $animal->getType() . " named " . $animal->name . ".\n";
					$this->frenzy = false;
			}
			else
			{
				echo $this->name . ": It's not worth my time." . "\n";
			}
		}
		else
		{
			echo $this->name . ": It's not worth my time." . "\n";
		}
	}
}
