<?php
interface IUnit {
	public function equip($equip);
	public function attack($attack_type);
	public function receiveDamage($damage_size);
	public function moveCloseTo($distance);
	public function recoverAP();
}
