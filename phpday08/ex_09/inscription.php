<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Registration</title>
<style> 

* {box-sizing: border-box}

body {
  background-color: grey;
}
.container {
  padding: 16px;
}

input[type=text], input[type=password] {
  width: 50%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}



</style>
    </head>

    <body>
        <?php
            $error_name = $error_mail = $error_name = '';
            $name = $email = $password = $password_confirmation = '';
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (empty($_POST['name']) || (strlen($_POST['name']) < 3 || strlen($_POST['name']) > 10))
                    $error_name = "Invalid name";
                else
                    $name = $_POST['name'];

                if (empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
                    $error_mail = "Invalid email";
                else
                    $email = $_POST['email'];

                if (empty($_POST['password']) || (strlen($_POST['password']) < 3 || strlen($_POST['password']) > 10) || $_POST['password'] != $_POST['password_confirmation'])
                    $error_name = "Invalid password or password confirmation";
                else
                    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
                if (!$error_name && !$error_mail && !$error_name) {
                    $user_created = array(
                        "created_at" => date('Y-m-d H:i:s'),
                        "password" => $password,
                         "email" => $email
                    );
                    /*
                    function verify_mail($name, $email,$password){
                       $value = file_get_contents(register.json);
                       if (str_contains($value, $password)){
                        echo "Email already used". "\n";
                       }
                            
                    }
                    */
                    $json_file = json_encode($user_created);
                    file_put_contents("register.json", $json_file, FILE_APPEND);
                    
                    $user = "User created";
                }
            }
        ?>

        <span class="error"><?php if ($error_name) echo $error_name."<br>"; ?></span>
        <span class="error"><?php if ($error_mail) echo $error_mail."<br>"; ?></span>
        <span class="error"><?php if ($error_name) echo $error_name."<br><br>"; ?></span>
        <span class="error"><?php if ($user) echo $user."<br><br>"; ?></span>

        <form action="inscription.php" method="POST">
        <h1>Register</h1>
        <div class="container">
        <hr>
            <label for="name">Enter your name:</label><br>
                <input type="text" id="name" name="name" placeholder="name"><br>
            <label for="email">Enter your mail:</label><br>
                <input type="text" id="email" name="email" placeholder="email" id="email" required><br>
            <label for="password">Password :</label><br>
                <input type="password" name="password" id="password" placeholder="password" required><br>
            <label for="password_confirmation">Password :</label><br>
                <input type="password" name="password_confirmation" id="password_confirmation" placeholder="password_confirmation" required><br>
            <input type="submit" value="Submit"><br>
        </form>
    </body>
</html>


