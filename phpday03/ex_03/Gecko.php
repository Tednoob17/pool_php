<?php
class Gecko {
    private $name;

    public function  __construct($name = NULL) {
        $this->name = $name;
      if ($name === "" || $name === NULL)
          print("Hello !" . "\n");
      else
          echo("Hello ". $name. " !\n");
    }

    public function __destruct() {
        if ( ! empty($this->name) || ! is_null($this->name))
            echo "Bye " . $this->name . " !\n";
        else
            echo "Bye !" . "\n";
    }

    public function getName() {
        return $this->name;
    }
}
