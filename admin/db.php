<?php 

$server_name = 'localhost';
$server_user = 'root';
$server_pass = '';
$db_name     = 'entrytest'; 

$connection = mysqli_connect($server_name,$server_user,$server_pass,$db_name);


if($connection){
    echo "Successfull";
}
?>