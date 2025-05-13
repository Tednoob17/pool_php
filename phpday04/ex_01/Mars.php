<?php
class Mars {
	  private static $id = 0;
	  private $Id;

	  public function __construct(){
	  	$this->Id = self::$id++;
	  }

	  public function getId() {
		return $this->Id;
	}
}
