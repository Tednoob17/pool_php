<?php
include_once("Mars.php");
Class Astronaut {
	private static $id = 0;
	private $snacks = 0;
	private $destination;
	private $name;
	private $Id;

	public function __construct($Name, $Snacks = 0, $Destination = null) {
		$this->name = $Name;
		$this->Id = self::$id++;
		$this->snacks = $Snacks;
		$this->destination = $Destination;
		if($Name)
			echo  $Name . " ready for launch !" . "\n";
	}

	public function __destruct() {
		if ($this->destination)
			echo $this->name . ": Mission aborted !" . "\n";
		else
			echo $this->name . ": I may have done nothing, but I have ". $this->snacks . " Mars to eat at least !". "\n";
	}

	public function getId(){
		return $this->id;
	}

	public function getDestination() {
		return $this->destination;
	}

	public function getSnacks() {
		return $this->snacks;
	}

	public function doActions($opt = null) {
		if (! isset($opt) || ! is_object($opt) || empty($opt) || is_null($opt) || is_int($opt))  {
			echo $this-name .": Nothing to do." ."\n";
		}
		else if ( get_class($opt) === "planet\Mars") {
			echo $this->name . ": started a mission !" . "\n";
		}
		else if (get_class($opt) === "chocolate\Mars") {
				$this->snacks += 1;
			echo $this->name . ": is eating mars number " . $opt->getId() . ".\n";
		}

	}
}
