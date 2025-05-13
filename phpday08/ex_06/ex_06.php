<?php

	function remove_cookie($cookie) {
		setcookie($cookie, "", time() - 1800);
	}
