<?php
include('admin/db.php');
$topic_name = $_POST['topicName'];
$content  = $_POST['topicData'];
$query    = "INSERT into topic VALUES ('$topic_name','$content',3)";
echo mysqli_query($connection,$query);
?>