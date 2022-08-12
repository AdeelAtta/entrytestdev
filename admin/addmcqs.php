<?php

if( isset($_POST['mcqbagSubId']) && isset($_POST['mcqbagData'])){

function dataready($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
    } 

$mcqbagSubId= $_POST['mcqbagSubId'];

$mcqbagData = dataready($_POST['mcqbagData']);
include 'db.php';

$query = "SELECT mcqbag_id FROM mcqbag Where mcqbag_sub_id = $mcqbagSubId ";
$result = mysqli_query($connection,$query);
if(mysqli_num_rows($result) > 0 ){

    $mcqbagData = $mcqbagSubId = null;
    header(" Location:  ../adminpanel.php?mcqsAlreadyExist");
    }else{
    $query = "INSERT INTO mcqbag(mcqbag_data,mcqbag_sub_id) VALUES('{$mcqbagData}',{$mcqbagSubId})";
        if(mysqli_query($connection,$query)){
            $mcqbagData = $mcqbagSubId = null;
            header( "Location: ../adminpanel.php?McqsAdded" );
        }else{
            echo mysqli_error($connection);
        }
    }










}else{
    header("Location: ../adminpanel.php?invalid");
}












?>