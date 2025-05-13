<?php

CONST ERROR_LOG_FILE = 'error_log_file';

function connect_db($host, $username, $passwd, $port, $db) { 
$wrapper = "mysql:host=$host;port=$port;dbname=$db";

try {
        $databaseConnection = new PDO($wrapper, $username, $passwd);
	    return ($databaseConnection);
    } catch (PDOException $error) {
	    file_put_contents(ERROR_LOG_FILE, $error->getMessage(), FILE_APPEND);
        echo "PDO ERROR: " . $error->getMessage() . "storage in " . ERROR_LOG_FILE . "\n";
    }
}