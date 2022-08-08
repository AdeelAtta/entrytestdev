<?php
$topic_name = $_POST['topicName'];
echo strip_tags($_POST['topic_data']);
$content  = $_POST['topic_data'];
$connection = mysqli_connect("localhost","root","","entrytest");
$query = "INSERT INTO topic(topic_name,topic_data,topic_sub_id) VALUES('$topic_name','$content',3)";
echo $query;
if(mysqli_query($query))
{
    echo "inserted";
 }
 else
{
mysqli_error();
}
 $display = "select * from topic";
 $res = mysqli_query($display);
 if($res)
 echo "true";
 else
 echo mysqli_error();
   while ($result = mysqli_fetch_row($res)) {
   echo $result[1];
  }
  ?>