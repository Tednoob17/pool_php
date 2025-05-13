<?php
include_once("Animal.php");
include_once("Shark.php");
class BlueShark extends Shark { 

	public function __construct($name) {
		$this->name = $name;
		parent::__construct($name, 0, self::FISH);
	}

	public function eat ($animal) {
		if (gettype($animal) === "object"){
			if(is_subclass_of($animal, Animal)){
				if ($this->frenzy === true) { 
					if ($animal->getType() === self::FISH) {
							if ($animal != $this){
								echo $this->name . " ate a " . $animal->getType() . " named " . $animal->name . ".\n";
								$this->frenzy = false;
							}
							else {
								echo $this->name . ": It's not worth my time." . "\n";
							}
					}else {
						echo $this->name . ": It's not worth my time." . "\n";
					}
					
				}else {
					echo $this->name . ": It's not worth my time." . "\n";
				}
			}
		}
	}

} 
