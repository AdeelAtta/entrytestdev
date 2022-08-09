<?php

if(isset($_POST['topicName']) && isset($_POST['topicSubId']) && isset($_POST['topicData'])){

function dataready($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
    } 
$topicName = $_POST['topicName'];
$topicSubId= $_POST['topicSubId'];

$topicData = dataready($_POST['topicData']);
include 'db.php';

$query = "SELECT topic_id FROM topic Where topic_sub_id = $topicSubId AND topic_name LIKE '%$topicName%' ";
$result = mysqli_query($connection,$query);
if(mysqli_num_rows($result) > 0 ){

    $topicName = $topicData = $topicSubId = null;
    header(" Location:  ../adminpanel.php?topicAlreadyExist");
    }else{
    $query = "INSERT INTO topic(topic_name,topic_data,topic_sub_id) VALUES('$topicName','{$topicData}',{$topicSubId})";
        if(mysqli_query($connection,$query)){
            $topicName = $topicData = $topicSubId = null;
            header( "Location: ../adminpanel.php?topicAdded" );
        }else{
            echo mysqli_error($connection);
        }
    }










}else{
    header("Location: ../adminpanel.php?invalid");
}












?>