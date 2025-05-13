<?php
	function my_password_hash($password) {
		$salt = bin2hex(random_bytes(15));
		$pass = $password;
		$hash = crypt($pass, $salt);
		$hash_array = [
			"hash" => "$hash",
			"salt" => "$salt"
			];
		return $hash_array;
	}

	function my_password_verify($password, $salt, $hash) {
		$re_hash = crypt($password, $salt);
		if ($re_hash === $hash)
			return true;
		else
			return false;	
	}
