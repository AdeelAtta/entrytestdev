<?php
session_start();

if(isset($_SESSION['email'])){

    $_SESSION['userName'] = $_SESSION['email'] =  $_SESSION['auth']  =   $_SESSION['city'] = null;

}

header("Location: ../index.php");




?>
