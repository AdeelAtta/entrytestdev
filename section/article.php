
<?php 
if( isset($_GET['t'])){
    $topic  =  mysqli_real_escape_string($connection,$_GET['t']);
    
    $query = "SELECT topic_data FROM topic where topic_id = {$topic}" ;
    $result = mysqli_query($connection,$query);
    if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_array($result)){
      echo html_entity_decode($row['topic_data']);
    }}else{
    $query = "SELECT topic_data FROM topic limit 1" ;
    $result = mysqli_query($connection,$query);
    if(mysqli_num_rows($result) > 0){
      while($row = mysqli_fetch_array($result)){
        echo html_entity_decode($row['topic_data']);
      }}

    }
}else{

  $query = "SELECT topic_data FROM topic limit 1" ;
  $result = mysqli_query($connection,$query);
  if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_array($result)){
      echo html_entity_decode($row['topic_data']);
    }}



}



?>
