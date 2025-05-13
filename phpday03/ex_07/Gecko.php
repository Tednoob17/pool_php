<?php
class Gecko {
    private $name;
    private $Age;
    private $energy = 100;

    public function  __construct($name = null, $age = null) {
        $this->name = $name;
        $this->Age = $age;
      if ($name === "" || $name === NULL)
          print("Hello !" . "\n");
      else
          echo("Hello ". $name. " !\n");
    }

    public function __destruct() {
        if (! empty($this->name) || ! is_null($this->name))
            echo "Bye " . $this->name . " !\n";
        else
            echo "Bye !" . "\n";
    }

    public function getName() {
        return $this->name;
    }
    
    public function setName($name) {
        $this->name = $name;
    }

    public function getAge() {
        return $this->Age;
    }

    public function setAge($age) {
        $this->Age = $age;
    }

    public function setEnergy($Energy) {
        if ($Energy < 0)
            $this->energy = 0;
        elseif ($Energy > 100)
            $this->energy = 100;
        else
            $this->energy = $Energy;
    }

    public function getEnergy() {
        return $this->energy;
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
    public function hello($string) {
        if (! is_int($string)) {
            if (! isset($this->name)) {
                echo "Hello ". $string. "!\n";
            }else {
                echo "Hello " . $string. ", I'm ". $this->name . "!\n";
            }
        }
        else {
            for ($i = 0; $i < $string; $i++) {
                if (! isset($this->name) ){
                    echo "Hello !" . "\n";
                }
                else {
                    echo "Hello, I'm " . $this->name . "!\n";
                }
            }
        }
 }

    public function eat (string $food) {
        if (strtolower($food) === strtolower("Meat")) {
            echo "Yummy!" . "\n";
            if ($this->energy < 100) {
                $this->energy = $this->energy + 10;
            }
        }
        else if (strtolower($food) === strtolower("Vegetable")) {
            echo "Erk!" . "\n";
            if ($this->energy > 0){
                $this->energy = $this->energy - 10;
            }
        }
        else
            echo "I can't eat this.".  "\n";
    }
  
    public function work() {
        if ($this->energy >= 25) {
            echo "I'm working T.T" . "\n";
            $this->energy = $this->energy - 9;
        }
        else {
            echo "Heyyy... I'm too sleepy, better take a nap!" . "\n";
            $this->energy = $this->energy + 50;
        }
    }

}
