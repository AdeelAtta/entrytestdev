<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <title>Quiz Area - Tick2Top</title>

    <!-- Styles -->
    <link href="assets/css/page.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="assets/img/apple-touch-icon.jpg">
    <link rel="icon" href="assets/img/favicon.png">
  </head>

  <body> 








<hr>







    <!-- Main Content -->
    <main class="main-content">
        <div class="container">
            <div class="container py-5 h-100">
                <div class="row d-flex align-items-center justify-content-center h-100 ">
                    <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                        <form action="quizarea.php#test" method="post" autocomplete="off" >
            
                                
                                <div class="divider d-flex align-items-center my-4">
                                <h1  class="text-center fw-bold mx-3 mb-0 text-muted"><span style="color:#E0668B;">Quiz</span><strong style="color:#3D1462;"> Time</strong></h1>
                            </div>
                            <br><br>
                                <!-- Select Subject -->
                            <div class="form-group col-sm-12 col-xl-12">
                                <select class="form-control form-control-lg text-center" name="subject" required>
                                    <option value="">-- Select Subject --</option>
                                    <option value="4">General Science</option>
                                </select>
                                </div> 
                                <!-- no of MCQS-->
                                <div class="form-group col-sm-12 col-xl-12">
                                <select class="form-control form-control-lg text-center" name="mcqsNo" required>
                                    <option value="">-- Select No of Mcqs --</option>
                                    <option >1</option>
                                    <option >2</option>
                                    <option >3</option>
                                    <option >4</option>
                                </select>
                                </div>   <br>
                            <!-- Submit button -->
                            <button type="submit" class="btn btn-primary btn-lg btn-block">Start</button>



                        </form>
                    </div>
                </div>
            </div>
        </div>








      <?php if(isset($_POST['subject']) && isset($_POST['mcqsNo']) && $_POST['subject'] !== '' && $_POST['mcqsNo'] !== ''){
        
        $subject = filter_var($_POST['subject'], FILTER_SANITIZE_STRING);
        $mcqsNo =  filter_var($_POST['mcqsNo'], FILTER_SANITIZE_STRING);
        
        $_POST['subject'] = $_POST['mcqsNo'] = null;

        include "admin/db.php";
         
        $q = "Select * FROM questions where q_sub_id = {$subject} order by rand() limit {$mcqsNo}";
        $r = mysqli_query($connection,$q);
        
        if(mysqli_num_rows($r) > 0){
              $question = 1;  ?>

<div class="container "  style="min-height:100vh">
    
    <div class="container py-5 h-100">
        <div class="row d-flex align-items-center justify-content-center h-100 ">
  <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
  
    <form action="quizarea.php#result" method="POST" autocomplete="off" >
    
        
        <div class="divider d-flex align-items-center my-4" id="test">
        <h1  class="text-center fw-bold mx-3 mb-0 text-muted"><span style="color:#E0668B;">Quiz</span><br><strong style="color:#3D1462;">Time</strong></h1>
      </div>
      <br>
      <input type="number" name="sub_id" value="<?php echo $subject; ?>"  hidden />




        <?php    while($ro = mysqli_fetch_array($r)){ ?>

              <p class="text-justify"><strong>Qno: <?php echo $question++;?> # </strong><?php echo $ro['question']; ?></p>

            
              

        <div class="form-check mb-2">
          <label class="form-check-label" >
          <input class="form-check-input" type="radio" name="<?php echo $ro['q_id']; ?>" value="<?php echo $ro['option1']; ?>" required />
            <?php echo $ro['option1']; ?>
          </label>
        </div>

        <div class="form-check mb-2">
         
         <label class="form-check-label" >
         <input class="form-check-input" type="radio" name="<?php echo $ro['q_id']; ?>" value="<?php echo $ro['option2']; ?>"  />
           <?php echo $ro['option2']; ?>
         </label>
       </div>

       <div class="form-check mb-2">
         
         <label class="form-check-label" >
         <input class="form-check-input" type="radio" name="<?php echo $ro['q_id']; ?>" value="<?php echo $ro['option3']; ?>" />
           <?php echo $ro['option3']; ?>
         </label>
       </div>

       <div class="form-check mb-2">
         
         <label class="form-check-label" >
         <input class="form-check-input" type="radio" name="<?php echo $ro['q_id']; ?>" value="<?php echo $ro['option4']; ?>"  />
           <?php echo $ro['option4']; ?>
         </label>
       </div>

       <hr>



        <?php 
       }?>
        
        <div class="form-outline mb-4">
          <label class="form-label" for="form1Example23">Name</label>
            <input type="text" id="form1Example23" class="form-control form-control-lg" name="name" placeholder="Your Name" required />
          </div>
        

     <div class=" form-check mb-2 text-right">
        <input class="btn btn-outline-primary" type="reset"  value="Reset"/>
          <input class="btn btn-primary" type="Submit"  value="submit"/>
        </div>
        </form>
        </div>
                </div>
            </div>
        </div>
       <?php }?>

 

  




    <?php  } ?>




<?php if(isset($_POST['sub_id'])){ ?>
    <div class="container" style="height:100vh">
            <div class="container py-5 h-100">
                <div class="row d-flex align-items-center justify-content-center h-100 ">
                    <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1" >
                        <div class="divider d-flex align-items-center my-4" id="result">
                            <h1  class="text-center fw-bold mx-3 mb-0 text-muted"><span style="color:#E0668B;">Res</span><strong style="color:#3D1462;">ult</strong></h1>
                        </div>

<?php      
      
        include "admin/db.php";
      $query  = "Select * FROM questions where q_sub_id =  {$_POST['sub_id']}  ";
      $result = mysqli_query($connection,$query);
      if(mysqli_num_rows($result) > 0){
          $score = 0;
          while($row = mysqli_fetch_array($result)){
  
                if(isset($_POST[$row['q_id']])){
              if($row['correctoption'] == $_POST[$row['q_id']]){
                  $score +=1;
              }}
  
          } ?>

      
          
    <?php  }?>
    <br><br>
    <div class="card border-info mb-3" >
  <div class="card-header"><?php echo $_POST['name'];?></div>
  <div class="card-body text-info">
  <br>
    <h5 class="card-title">Correct Answers = <?php echo $score;?></h5>
    <br>
    <div class="w-100 text-right">
    <a href="quizarea.php" class="btn btn-outline-danger ">Take Test Again</a>
    </div>
  </div>
  
 
                    </div>
                </div>
            </div>
        </div>

<?php } ?>




























    </main><!-- /.main-content -->

<br><br>
    <!-- Footer -->
    <?php include('section/footer.php'); ?>
    <!-- /.footer -->

  </body>
</html>























