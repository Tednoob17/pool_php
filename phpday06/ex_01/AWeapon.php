<?php
abstract class AWeapon {
    protected $name;
    protected $apcost;
    protected $damage;
    protected $melee = false;
    abstract public function attack();

    public function __construct($Name, $Apcost, $Damage, $Melee = false) {
	    if (! is_string($Name) || ! is_int($Apcost)|| ! is_int($Damage)|| ! is_bool($Melee))
		throw new Exception ("Error in AWeapon constructor. Bad parameters.");

		    $this->name = $Name;
		    $this->apcost = $Apcost;
		    $this->damage = $Damage;
		    $this->melee = $Melee;
    }

    public function getName() {
    	return $this->name;
    }

    public function getApcost() {
    	return $this->apcost;
    }

    public function getDamage() {
    	return $this->damage;
    }

    public function isMelee() {
        return $this->melee;
    }

}
