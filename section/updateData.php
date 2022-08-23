
<?php if(isset($_POST['updateTopicId'])){

$topicID = $_POST['updateTopicId'] ;

    $query = "SELECT * FROM topic where topic_id = $topicID ";
    $result = mysqli_query($connection,$query);
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_array($result)){ ?>


       <!-- update Topic/Article -->
       <hr><hr><hr>
       <section class="section p-5 mt-5 ">
        <div class="container">
          <form class="form-row" action="admin/updateTopic.php" method="POST" >
          <legend>update Topic</legend> 


          <input type="number" name="topicId" value="<?php echo $row['topic_id'];?>" hidden>


          <!-- Topic Name -->
            <div class="form-group col-sm-6 col-xl-3">
              <input class="form-control form-control-lg" type="text" name="topicName" value="<?php echo $row['topic_name']?>">
            </div>


            <div class="form-group col-12">
              <textarea id="Article_editor" class="form-control form-control-lg" rows="4" name="topicData" ><?php echo $row['topic_data'];?></textarea>
            </div>

           
            <div class="col-12 text-center">
              <button class="btn btn-xl btn-block btn-primary" type="submit">Update Topic</button>
            </div>
          </form>

          <script src="ckeditor/ckeditor.js"></script>
        <script>
            CKEDITOR.replace('Article_editor');
        </script>
        </div>
      </section>
      <hr class="border border-primary border-2 opacity-50">
                
                
  

        <?php } 
          }













}elseif(isset($_POST['updateMcqbagId'])){

    $mcqbagID = $_POST['updateMcqbagId'] ;
    $query = "SELECT * FROM mcqbag where mcqbag_id = $mcqbagID ";
    $result = mysqli_query($connection,$query);
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_array($result)){ ?>


       <!-- update Topic/Article -->
       <hr><hr><hr>
       <section class="section p-5 mt-5 ">
        <div class="container">
          <form class="form-row" action="admin/updateMcqs.php" method="POST" >
          <legend>update Topic</legend> 




          <input type="number" name="mcqbagId" value="<?php echo $row['mcqbag_id'];?>" hidden>



            <div class="form-group col-12">
              <textarea id="Article_editor" class="form-control form-control-lg" rows="4" name="mcqbagData" ><?php echo $row['mcqbag_data'];?></textarea>
            </div>

           
            <div class="col-12 text-center">
              <button class="btn btn-xl btn-block btn-primary" type="submit">Update mcqbag</button>
            </div>
          </form>

          <script src="ckeditor/ckeditor.js"></script>
        <script>
            CKEDITOR.replace('Article_editor');
        </script>
        </div>
      </section>
      <hr class="border border-primary border-2 opacity-50">
                
                
  

        <?php } 
          }




























}else{ ?>
<hr><hr><hr>
<section class="section p-5 mt-5 ">
        <div class="container">
          <form class="form-row" action="adminpanel.php?update" method="POST" >
          <legend>update Topic</legend> 

          <?php if(isset($_GET['topicUpdated'])){ ?> 
          <div class="col-12">
                <div class="alert alert-success d-on-success">Topic Updated Successfully</div>
            </div>
          <?php } ?>



            <!-- topic -->
            <div class="form-group col-sm-6 col-xl-3">
            <select name="updateTopicId" id="uni" class="form-control form-control-lg">


<?php $query = "SELECT topic_id , topic_name FROM topic ";
    $result = mysqli_query($connection,$query);
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_array($result)){ ?>
                 <option value="<?php echo $row['topic_id']; ?>"><?php echo $row['topic_name']; ?></option>  
          

        <?php } ?>

        </select>
            </div>
            <div class="col-4 text-center">
              <button class="btn btn-xl btn-block btn-primary" type="submit">update Topic</button>
            </div>
          </form>
        </div>
      </section>







<!-- MCQS update -->
      <section class="section p-5 mt-5 ">
        <div class="container">
          <form class="form-row" action="adminpanel.php?update" method="POST" >
          <legend>update MCQs</legend> 

          <?php if(isset($_GET['McqsUpdated'])){ ?> 
          <div class="col-12">
                <div class="alert alert-success d-on-success">MCqs Updated Successfully</div>
            </div>
          <?php } ?>


            <!-- mcqs -->
            <div class="form-group col-sm-6 col-xl-3">
            <select name="updateMcqbagId" id="uni" class="form-control form-control-lg">


<?php $query = "SELECT mcqbag_id , mcqbag_sub_id FROM mcqbag ";
    $result = mysqli_query($connection,$query);
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_array($result)){ 
            
            $q = "SELECT sub_name FROM subject where sub_id = {$row['mcqbag_sub_id']}";
            $r = mysqli_query($connection,$q);
            while($ro = mysqli_fetch_array($r)){    ?>

                 <option value="<?php echo $row['mcqbag_id']; ?>"><?php echo $ro['sub_name']; ?></option>  
          

        <?php } } ?>

        </select>
            </div>
            <div class="col-4 text-center">
              <button class="btn btn-xl btn-block btn-primary" type="submit">update MCQs </button>
            </div>
          </form>
        </div>
      </section>


      





     <?php 

        


    }


    

} }?>





