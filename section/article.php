
<?php 
if( isset($_GET['t'])){
    $topic  =  mysqli_real_escape_string($connection,$_GET['t']);
    
    $query = "SELECT topic_data FROM topic where topic_name LIKE '%$topic%' " ;
    $result = mysqli_query($connection,$query);
    if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_array($result)){
      echo html_entity_decode($row['topic_data']);
    }}else{
    $query = "SELECT * FROM topic limit 1" ;
    $result = mysqli_query($connection,$query);
    if(mysqli_num_rows($result) > 0){
      while($row = mysqli_fetch_array($result)){
        echo html_entity_decode($row['topic_data']);


      }}

    }
}else{ ?>

<section class="section text-center">

<h1 class="display-2 text-muted my-7">Select Subject for topic</h1>

<br>
<a class="btn btn-info w-auto" href="preparation.php?s=2">English</a><br><br>
<a class="btn btn-info w-auto" href="preparation.php?s=3">General Knowledge</a> <br><br>
<a class="btn btn-info w-auto" href="preparation.php?s=4">General Science</a> <br><br>
<a class="btn btn-info w-auto" href="preparation.php?s=5">Simple Arithmetic</a><br><br>
<a class="btn btn-info w-auto" href="preparation.php?s=6">Intelligent Quotient</a> <br>
<br>
<p class="lead">We will upload other data soon.</p>

</section>



<?php



}



?>
