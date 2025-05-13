<?php
    function my_change_user(PDO $bdd, ...$names) {
        foreach ($names as $username) {
            $query = "SELECT gecko.users.name FROM gecko.users WHERE name=?";
            $stm = $bdd->prepare($query);
            $stm->execute([$username]);
            $user = $stm->fetch();
            if (empty($user)) {
                throw new Exception("User not found\n");
            } else {
                $new_name = ucfirst(strtolower($user[0])) . "42";
                $query = "UPDATE gecko.users SET name=? WHERE name=?";
                $stm = $bdd->prepare($query);
                $stm->execute([$new_name, $user[0]]);
            }
        }
    }

    try {
        $connection = new PDO('mysql:host = localhost, dbname=gecko', "tedsig", "Uncharted");
        my_change_user($connection, "");
    } catch (Exception $ex) {
        echo $e->getMessage();
    } finally {
        echo "Good luck with the user DB!" . "\n";
    }
