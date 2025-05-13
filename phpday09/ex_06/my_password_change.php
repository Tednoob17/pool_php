<?php

    function my_password_change(PDO $bdd, $email, $new_password) {
        
        $pre_quer = "SELECT name FROM gecko.users WHERE email = ?";
        $stm = $bdd->prepare($pre_quer);
        $stm->execute([$email]);
        $name = $stm->fetch();
        if (empty($new_password)|| empty($name)) {
                throw new Exception("");
        }
        else {
        $new_password_hash = password_hash($new_password, PASSWORD_DEFAULT);
        $query = "UPDATE gecko.users SET password = ? WHERE email= ?";
        $stm = $bdd->prepare($query);
        $stm->execute([$new_password_hash, $email]);
    }
}
