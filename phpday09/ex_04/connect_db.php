<?php
    CONST ERROR_LOG_FILE = 'error_log_file';

	function connect_db($argv) {

		$host     = $argv[1];
		$username = $argv[2];
		$passwd   = $argv[3];
		$port 	  = $argv[4];
		$db 	  = $argv[5];
		var_dump($argv);
		$wrapper = "mysql:host=$host; port=$port; dbname=$db";

		try {
    		$databaseConnection = new PDO($wrapper, $username, $passwd);
			echo "Connection to DB successful" . "\n";
			error_log("Connection to DB successful\n", 3, ERROR_LOG_FILE);
			return ($databaseConnection);

		} catch (PDOException $error) {
			file_put_contents(ERROR_LOG_FILE, $error->getMessage(), FILE_APPEND);
			echo "Error connection to DB\n";
			error_log("Error connection to DB\n", 3,ERROR_LOG_FILE );
    		//echo "PDO ERROR: " . $error->getMessage() . "storage in " . ERROR_LOG_FILE . "\n";
	       }
}
    if ($argc != 6) {
            echo "Bad params! Usage: php connect_db.php host username password port db\n";
			error_log("Bad params! Usage: php connect_db.php host username password port db\n", 3,ERROR_LOG_FILE );
        }
	else 
		connect_db($argv);
