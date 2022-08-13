<?php

if(isset($_POST['topicName']) && isset($_POST['topicData']) && isset($_POST['topicId'])){

function dataready($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
    } 
$topicName = $_POST['topicName'];
$topicId= $_POST['topicId'];

$topicData = dataready($_POST['topicData']);
include 'db.php';




$query = "UPDATE topic SET topic_name = '$topicName' , topic_data = '$topicData' WHERE topic_id = $topicId ";
$result = mysqli_query($connection,$query);
if($result){

    header("Location: ../adminpanel.php?update&topicUpdated");

}
}

?>