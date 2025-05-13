<?php
Class Astronaut{
	private static $id = -1;
	private $snack = 0;
	private $destination = null;
	private $name = "";

	public function __construct($Name = "", $Snack = 0, $Destination = null) {
		echo  $Name . " ready for launch !" . "\n";
	}
	public function getId(){
		self::$id += 1;
		return self::$id;
	}
	public function getDestination() {
		return $this->destination;
	}
}
