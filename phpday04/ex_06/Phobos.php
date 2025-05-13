<?php
namespace planet\moon;
	class Phobos {
		private $mars = null;
		public function __construct($Mars) {
			if ($Mars instanceof planet\Mars){
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
