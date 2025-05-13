<?php
include_once("IUnit.php");
class SpaceMarine implements IUnit {

        protected name;
        protected hp;
        protected ap;
        protected damage;
        protected apcost = 0;

        public function __construct($Name, $Hp = 0, $Ap = 0){
                $this->name = $Name;
                $this->hp = $Hp;
                $this->ap = $Ap;
        }
        
        public function getName() {
                return $this->name;
        }

        public function getHp() { 
        
                return $this->hp;
        }

        public function getAp() {
                return $this->ap
        }

