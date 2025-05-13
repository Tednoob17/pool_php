<?php
class Gecko {
    public $name;
    public function  __construct($name = NULL) {
        $this->name = $name;
      if ($name === "" || $name === NULL)
          print("Hello !\n");
      else
          echo("Hello $name !\n");
    }
}

