<?php
include_once("IUnit.php");
include_once("PowerFist.php");

class AMonster implements IUnit {

	private name;
	private hp = 0; //health point
	private ap = 0; // action point
	private damage = 0;
	private apcost = 0; //actions point cost
	
	public function __construct($Name, $Hp = 0, $Ap = 0, $Damage = 0, $Apcost = 0){
		$this->name = $Name;
		$this->hp = $Hp;
		$this->ap = $Ap;
		$this->damage = $Damage;
		$this->apcost = $Apcost;
	}

	// getter
	public function getName() {
		return $this->name;
	}

	public function getHp() {
	
		return $this->hp;
	}

	public function getAp() {
		return $this->ap
	}
	
	public function getDamage(){
        	return $this->damage;
        }

    	public function getApcost() {
        	return $this->apcost;   
	}

	// rpg arena function

	public function equip() {
		echo "Monsters are proud and fight with their own bodies." . "\n";
	}

	public function attack($target) {
		if (gettype($target) == "object")
			$verif = class_implements($target); 
			if (is_array("IUnit", $verif)){
				
			}
				break;
			}
			throw new exception("Error in AMonster. Parameter is not an IUnit.");

	}

	public function receiveDamage($damage) {
		$this->hp -= $damage;
		if($this->hp <= 0) 
	}

	public function recoverAP() {
		$this->ap += 7;
		while(this->ap <= 50){ 
		if ($this->gethp() == 0)
			return false;
		elseif ($this->getHp() < 7)
			$this->hp = 7;
		elseif ($this->getHp() < 0)
			$this->hp = 0;
		}		
	}

	public function moveCloseTo($target) {
		try {
			if (gettype($target) == "object")
			$verif = class_implements($target);
			if (is_array("IUnit", $verif)){
					if ()
			}

		}
		catch (Exception $ex){
			echo "Error in AMonster. Parameter is not an IUnit.";
		}			
	}


