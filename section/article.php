
<?php 
if( isset($_GET['t'])){
    $topic  =  mysqli_real_escape_string($connection,$_GET['t']);
    
    $query = "SELECT topic_data FROM topic where topic_name LIKE '%$topic%' " ;
    $result = mysqli_query($connection,$query);
    if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_array($result)){
      echo html_entity_decode($row['topic_data']);
    }}else{
    $query = "SELECT * FROM topic where topic_id = 1" ;
    $result = mysqli_query($connection,$query);
    if(mysqli_num_rows($result) > 0){
      while($row = mysqli_fetch_array($result)){
        echo html_entity_decode($row['topic_data']);


      }}

    }
}else if(isset($_GET['s'])){
  $subject  =  mysqli_real_escape_string($connection,$_GET['s']);
  
  ?>
<section class="section text-center">
<h2 class="display-2 text-muted my-7">Select Article </h2>
<br>
<?php 
 $query = "SELECT * FROM topic where topic_sub_id = $subject ";
 $result = mysqli_query($connection,$query);
 if(mysqli_num_rows($result) > 0 ){
    while($row = mysqli_fetch_array($result)){ ?>
        <a class="btn btn-info w-auto" href="preparation.php?s=<?php echo $row['topic_sub_id'];?>&t=<?php echo $row['topic_name'];?>"><?php echo $row['topic_name'];?></a><br><br>
      <?php    } } ?>
  <p class="lead">We will upload other data soon.</p>
</section>




<?php



}



?>
