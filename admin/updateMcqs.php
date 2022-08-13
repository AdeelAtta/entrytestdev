<?php

if( isset($_POST['mcqbagData']) && isset($_POST['mcqbagId'])){

function dataready($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
    } 
$mcqbagId= $_POST['mcqbagId'];

$mcqbagData = dataready($_POST['mcqbagData']);
include 'db.php';




$query = "UPDATE mcqbag SET mcqbag_data = '$mcqbagData' WHERE mcqbag_id = $mcqbagId ";
$result = mysqli_query($connection,$query);
if($result){

    header("Location: ../adminpanel.php?update&McqsUpdated");

}
}

?>