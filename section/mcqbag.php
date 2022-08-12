
<?php 
if( isset($_GET['s'])){
    $mcqbag  =  mysqli_real_escape_string($connection,$_GET['s']);


    $q = "SELECT sub_id FROM subject WHERE sub_name LIKE '%$mcqbag%' limit 1 "; 
    $r = mysqli_query($connection,$q);
    if(mysqli_num_rows($r) > 0){
        while($subject = mysqli_fetch_array($r)){


    $query = "SELECT mcqbag_data FROM mcqbag where mcqbag_sub_id = {$subject['sub_id']}" ;
    $result = mysqli_query($connection,$query);
    if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_array($result)){
      echo html_entity_decode($row['mcqbag_data']);
    }}else{ ?>

      <section class="section text-center">

      <h1 class="display-1 text-muted my-7">No data Found</h1>
     
      <p class="lead">Here is the available list of Subjects. </p>
      <br>
      <a class="btn btn-info w-auto" href="">English</a><br><br>
      <a class="btn btn-info w-auto" href="">General Knowledge</a> <br><br>
      <a class="btn btn-info w-auto" href="">General Science</a> <br><br>
      <a class="btn btn-info w-auto" href="">Simple Arithmetic</a><br><br>
      <a class="btn btn-info w-auto" href="">Intelligent Quotient</a> <br>
      <br>
      <p class="lead">We will upload other data soon.</p>

    </section>

   <?php } 
   
  
  
  
  }  }












}else{  ?>

<section class="section text-center">

<h1 class="display-2 text-muted my-7">Select Subject for Mcqs</h1>

<br>
<a class="btn btn-info w-auto" href="mcqs.php?s=2">English</a><br><br>
<a class="btn btn-info w-auto" href="mcqs.php?s=3">General Knowledge</a> <br><br>
<a class="btn btn-info w-auto" href="mcqs.php?s=4">General Science</a> <br><br>
<a class="btn btn-info w-auto" href="mcqs.php?s=5">Simple Arithmetic</a><br><br>
<a class="btn btn-info w-auto" href="mcqs.php?s=6">Intelligent Quotient</a> <br>
<br>
<p class="lead">We will upload other data soon.</p>

</section>



<?php }



?>
