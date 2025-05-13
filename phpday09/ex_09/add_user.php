<?php

CONST ERROR_LOG_FILE = 'error.log';

function connect_db($argv) {
	$host = "localhost";
    $port = 3306;
    $db = "gecko";
    $username = "tedsig";
    $passwd = "Uncharted";

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
    if ($argc != 5) {
        echo "Bad params! Usage: php add_user.php name password password_conf is_admin\n";
        error_log("Bad params! Usage: php add_user.php name password password_conf is_admin\n", 3,ERROR_LOG_FILE );
    }
    else  {
        $name           = $argv[1];
        $password       = $argv[2];
        $password_conf  = $argv[3];
        $is_admin 	    = $argv[4];
        //$email          = NULL;
        $created_at = date('Y-m-d');
        $host = "localhost";
        $port = 3306;
        $db = "gecko";
        $username = "tedsig";
        $passwd = "Uncharted";

        $var_d = connect_db("localhost", "tedsig", "Uncharted", 3306, "gecko");
        $pre_quer = "INSERT INTO  gecko.users (`name`, `password`, `created_at`, `is_admin`) VALUE (?, ?, ?, ?)";
        $stm =  $var_d->prepare($pre_quer);
        if ($password != $password_conf) {
            echo "PASSWORD NOT MATCHED" . "\n";
            error_log("PASSWORD NOT MATCHED\n", 3,ERROR_LOG_FILE);
        } else
            $stm->execute([$name, $password, $created_at, $is_admin]);
    }

