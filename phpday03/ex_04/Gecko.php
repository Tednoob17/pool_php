<?php
class Gecko {
    private $name;
    private $Age;
    public function  __construct( $name = null, $age = null) {
        $this->name = $name;
        $this->Age = $age;
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

    public function setName($Name) {
        $this->name = $Name;
    }

    public function getAge() {
        return $this->Age;
    }

    public function setAge($age) {
        $this->Age = $age;
    }

    public function status () {
      switch ($this->Age) { 
       case 0:
            echo "Unborn Gecko" . "\n";
            break;
       case 1:
       case 2:
           echo "Baby Gecko" . "\n";                                                                                                        break;
       case 3:
       case 4:
       case 5:
       case 6:
       case 7:
       case 8:
       case 9:
       case 10:
           echo	"Adult Gecko" . "\n";
           break;
       case 11:
       case 12:
       case 13:
           echo "Old Gecko" . "\n";
           break;
       default:
           echo "Impossible Gecko" . "\n";
    }
   }
}
