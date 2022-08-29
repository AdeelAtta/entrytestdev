<?php 
session_start();
if(!isset($_SESSION['email'] )){
  header('Location: login.php?invalid');
}else if($_SESSION['auth'] == 'admin'){


  header('Location: adminpanel.php');

}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <title>Online Mock Test - Tick2Top</title>

    <!-- Styles -->
    <link href="assets/css/page.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="assets/img/apple-touch-icon.jpg">
    <link rel="icon" href="assets/img/favicon.png">

  </head>

  <body> 
  <?php include 'admin/db.php'; ?>

  <div class="jumbotron">

      <h1 >  Welcome  <strong><u><?php if(isset($_SESSION['userName'])){echo $_SESSION['userName']; }?></u> </strong>
      <?php  
if(isset($_SESSION['email'])){ ?>
          <a class="btn btn-danger " href="admin/logout.php">Logout </a>
<?php } ?></h1>
  <h2>Online Mock Test</h2>
  <p>For the Preparation of Entry test university of Sindh, Jamshoro</p>
  <div class="progress">
    <?php     $que = "SELECT * from scoretable where userName like '{$_SESSION['userName']}' ";
              $res = mysqli_query($connection,$que);
              $num_rows = mysqli_num_rows($res); ?>

   <div class="progress-bar progress-bar-striped  progress-bar-animated bg-info" style="width:<?php echo ($num_rows * 19)+5;?>%; height: 30px;"><?php echo $num_rows * 20?>% Complete </div>
  </div>
</div>




    <!-- Main Content -->
    <main class="main-content">
      <div class="container">
        <div class="row">





          <!--
          |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
          | Sidebar
          |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
          !-->

          <div class="col-md-4 col-xl-3 order-last order-md-first">
            <hr class="d-md-none">

            <aside class="sidebar sidebar-sticky sidebar-stick-shadow pr-md-5 br-1">
              <ul class="nav nav-sidebar nav-sidebar-hero" data-accordion="true">
              <li class="nav-item">
                  <a class="nav-link" href="UserPanel.php?s=english">English</a>
                </li>
                
                <li class="nav-item">
                  <a class="nav-link" href="UserPanel.php?s=general knowledge">General Knowledge</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="UserPanel.php?s=general science">General Science</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="UserPanel.php?s=simple Arithmetic">Simple Arithmatic</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="UserPanel.php?s=Intelligent Quotient">Intelligence Quotient</a>
                </li>

              </ul>
            </aside>
            
          </div>

          <!--
          |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
          | Content
          |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
          !-->

          <?php if(isset($_GET['s']) && $_GET['s'] !== ''){

            $subject = mysqli_real_escape_string($connection,$_GET['s']);

            $query = "SELECT sub_id from subject where sub_name like '{$subject}' AND sub_test_id = 1";
            $result = mysqli_query($connection,$query);
            if(mysqli_num_rows($result) > 0 ){?>
            
            
            <div class="col-md-7 col-xl-8 ml-md-auto py-8">
            <article onselectstart="return false" onpaste="return false;" onCopy="return false " onCut="return false" onDrag="return false" onDrop="return false">


            <div class="mx-0 mx-sm-auto">




  <div class="card">
    <div class="card-header bg-primary">
      <h5 class="card-title text-white mt-2" id="exampleModalLabel"> <strong class="alert alert-secondary"> <?php echo strtoupper($_GET['s']);?></strong>    Test Questions</h5>
    </div>
    <div class="modal-body">


      <?php 
    
      while($row = mysqli_fetch_array($result)){ 
        
        $que = "SELECT * from scoretable where userName like '{$_SESSION['userName']}' AND subject = {$row['sub_id']} ";
        $res = mysqli_query($connection,$que);
        if(mysqli_num_rows($res) < 1){

        ?>

<div class="text-center">
        <i class="far fa-file-alt fa-4x mb-3 text-primary"></i>
        <p>
          <strong>Atempt All Questions </strong> <br>
          All Questions carry Equal Marks
        </p>
      </div>
      <hr />
        


        <form class="px-4" action="admin/addScore.php" method="POST">
          <input type="number" name="sub_id" value="<?php echo $row['sub_id']; ?>"  hidden />

        <?php
        $q = "Select * FROM questions where q_sub_id = {$row['sub_id']} AND testNo = 1 order by RAND() LIMIT 30";
        $r = mysqli_query($connection,$q);
        
        if(mysqli_num_rows($r) > 0){
              $question = 1;
            while($ro = mysqli_fetch_array($r)){ ?>

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



        <?php    } ?>
        
              
     <div class=" form-check mb-2 text-right">
        <input class="btn btn-outline-primary" type="reset"  value="Reset"/>
          <input class="btn btn-primary" type="Submit"  value="submit"/>
        </div>
        <hr>
      </form>
      
     <?php  }
        
        
        
        
        
        ?>







     <?php  }else{ ?>

      <div class="text-center">
        <i class="far fa-file-alt fa-4x mb-3 text-primary"></i>
        <div class="alert alert-success">
            Test Submitted <strong>Successfully!</strong> complete All tests <br>After completing All tests you can see results <a href="scoreboard/index.php">Here</a>.
        </div>
      </div>

      

      <hr />



    <?php  }
    
    
    } ?>
    
    </div>

  </div>
</div>
              <div class="row d-block w-100 text-center">
                <a class="btn btn-outline-info m-1" href="UserPanel.php?s=english" role="button">English</a>
                <a class="btn btn-outline-info m-1" href="UserPanel.php?s=general knowledge" role="button">General Knowledge</a>
                <a class="btn btn-outline-info m-1" href="UserPanel.php?s=general science" role="button">General Science</a>
                <a class="btn btn-outline-info m-1" href="UserPanel.php?s=simple Arithmetic" role="button">Simple Arithmatic</a>
                <a class="btn btn-outline-info m-1" href="UserPanel.php?s=Intelligent Quotient" role="button">Intelligence Quotient</a>
                <hr>
              </div>





              
            </article>
          </div> 
          <?php }



          }else{ ?>

<div class="col-md-7 col-xl-8 ml-md-auto py-8">
          <article onselectstart="return false" onpaste="return false;" onCopy="return false " onCut="return false" onDrag="return false" onDrop="return false">
            <div class="mx-0 mx-sm-auto text-center">
              <div class="row d-block w-100">
                <?php if(isset($_GET['ScoreAdded'])){ ?>

                  <div class="text-center">
        <i class="far fa-file-alt fa-4x mb-3 text-primary"></i>
        <div class="alert alert-success">
            Test Submitted <strong>Successfully!</strong> complete All tests <br>After completing All tests you can see results <a href="scoreboard/index.php">Here</a>.
        </div>
      </div>


               <?php } ?>

                <a class="btn btn-outline-info m-1" href="UserPanel.php?s=english" role="button">English</a>
                <a class="btn btn-outline-info m-1" href="UserPanel.php?s=general knowledge" role="button">General Knowledge</a>
                <a class="btn btn-outline-info m-1" href="UserPanel.php?s=general science" role="button">General Science</a>
                <a class="btn btn-outline-info m-1" href="UserPanel.php?s=simple Arithmetic" role="button">Simple Arithmatic</a>
                <a class="btn btn-outline-info m-1" href="UserPanel.php?s=Intelligent Quotient" role="button">Intelligence Quotient</a>
              </div>
            </div>
          </article>


         <?php }?>

          


        </div>
      </div>
    </main><!-- /.main-content -->



    <!-- Footer -->
    <?php include('section/footer.php'); ?>
    <!-- /.footer -->

  </body>
</html>