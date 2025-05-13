<?php
namespace chocolate { 
class Mars {
  private static $id = 0;
  private $Id;

  public function __construct() {
  	$this->Id = self::$id++;
  }
	public function getId() {
		return $this->Id;
	}
}

 }

namespace planet {
	class Mars {
	private $size;
	private static $id;
	private $Id;

	public function __construct($size = null) {
		$this->size = $size;
		$this->Id = self::$id++;
	}

	public function setSize($Size) {
		$this->size = $Size;
	}

	public  function getSize() {
		return $this->size;
	}

	public function getId(){
		return $this->Id;
	}
}

}
