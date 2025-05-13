<?php

if(isset($_COOKIE['name']))
{
    if(isset($_GET['name']))
    {
        $_COOKIE['name'] = $_GET['name'];
        setcookie("name", $_GET['name'], time() + 3600);
    }
    echo "Hello " .$_COOKIE['name'];
} 
else
{
    if(isset($_GET['name']))
    {
        echo "Hello " . $_GET['name'];
        setcookie("name", $_GET['name'], time() + 3600);
    } 
    else 
    {
        echo "Hello platypus";
    }
}