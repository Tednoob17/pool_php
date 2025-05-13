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

	public function __construct($size = 0) {
		$this->size = $size;
	}

	public function setSize($Size) {
		$this->size = $Size;
	}

	public  function getSize() {
		return $this->size;
	}
}

}
