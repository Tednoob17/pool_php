<?php
namespace planet\moon;
include_once("Mars.php");
	class Phobos {
		private $mars = null;
		public function __construct($Mars) {
			if (get_class($Mars) === "planet\Mars"){
				$this->mars = $Mars;
				echo "Phobos placed in orbit." . "\n";
			}
			else
				echo "No planet given." . "\n";
		}

		public function getMars() {
			return $this->mars;
		}
 }
