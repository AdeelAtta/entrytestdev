
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
        
        ?>

      <div class="sect"> 
        <div class="wrap">    

     <?php 
      $qu = "SELECT * FROM topic WHERE topic_sub_id = {$subject['sub_id']} ";
      $re = mysqli_query($connection,$qu);
      if(mysqli_num_rows($re) > 0){
        while($sub_topic = mysqli_fetch_array($re)){ ?>

          <a class="btn m-1 d-block" href="mcqs.php?s=<?php echo $mcqbag;?>#<?php echo strtolower(str_replace(' ', '', $sub_topic['topic_name'])); ?>"><?php echo $sub_topic['topic_name']; ?></a>
       <?php }} ?>
       </div>
       </div>


     <?php 
        
        
    while($row = mysqli_fetch_array($result)){
      echo html_entity_decode($row['mcqbag_data']);
    }}else{ ?>

<section class="section text-center">
<h2 class="display-2 text-muted my-7">No Data Found</h2>
<p class="lead">Here is the available list of Subjects. </p>
<br>
<?php 
 $query = "SELECT sub_name FROM subject ";
 $result = mysqli_query($connection,$query);
 if(mysqli_num_rows($result) > 0 ){
    while($row = mysqli_fetch_array($result)){ ?>
        <a class="btn btn-info w-auto" href="mcqs.php?s=<?php echo $row['sub_name'];?>"><?php echo $row['sub_name'];?></a><br><br>
      <?php    } } ?>
  <p class="lead">We will upload other data soon.</p>
</section>

   <?php }    
                                                }  
                                  }



}else{  ?>

<section class="section text-center">

<h2 class="display-2 text-muted my-7">Select Subject for Mcqs</h2>
<br>
<?php 
 $query = "SELECT sub_name FROM subject ";
 $result = mysqli_query($connection,$query);
 if(mysqli_num_rows($result) > 0 ){
    while($row = mysqli_fetch_array($result)){ ?>
        <a class="btn btn-info w-auto" href="mcqs.php?s=<?php echo $row['sub_name'];?>"><?php echo $row['sub_name'];?></a><br><br>
      <?php    } } ?>
  <p class="lead">We will upload other data soon.</p>
</section>



<?php } ?>
