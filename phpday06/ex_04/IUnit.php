<?php
interface IUnit {
	public function equip($equipName, $equip_member);
	public function attack($attack_type, $damage_attack);
	public function receiveDamage($damage_size);
	public function moveCloseTo($distance);
	public function recoverAP();
}
