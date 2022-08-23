<?php
session_start();

if(isset($_SESSION['email'])){

    $_SESSION['userName'] = $_SESSION['email'] =  $_SESSION['auth']  = null;

}

header("Location: ../index.php");




?>
