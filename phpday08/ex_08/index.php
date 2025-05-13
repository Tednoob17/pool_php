<?php
    if (isset($_GET['name']))
        echo "Hello ". $_GET['name'];
    else
        echo "<form action=\"index.php\" method=\"GET\">
                <label for=\"name\">Enter your name:</label> <br>
                <input type=\"text\" id=\"name\" name=\"name\"> <br>
                <input type=\"submit\" value=\"Submit\">
            </form>";

