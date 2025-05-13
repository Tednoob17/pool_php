<?php
	function my_password_hash($password) {
		 $table = [];
		 $salt = uniqid();
		 $hash = md5($password . $salt);
		 $table = ["hash" => $hash, "salt" => $salt];
		 return $table;
	}

	function my_password_verify($password, $salt, $hash) {
		 $password .= $salt;
		 if (md5($password) == $hash)
		    return true;
		 else
		    return false;
	}
