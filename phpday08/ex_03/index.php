<?php
session_start();

if(isset($_SESSION['name']))
{
    if(isset($_GET['name']))
    {
        $_SESSION['name'] = $_GET['name'];
    }
    echo "Hello ". $_SESSION['name']);
}
else {
    if(isset($_GET['name'])){
        echo "Hello " .  $_GET['name']);
        $_SESSION['name'] = $_GET['name'];
    }
    else
	{
        echo "Hello platypus";
    }
}
