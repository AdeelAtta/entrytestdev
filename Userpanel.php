<?php 
// session_start();
// if(!isset($_SESSION['email'] )){
//   header('Location: login.php?invalid');
// }else if($_SESSION['auth'] == 'admin'){


//   header('Location: adminpanel.php');

// }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <title> Mock Test - Tick2Top</title>

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
      <h1>Welcome <?php if(isset($_SESSION['userName'])){echo $_SESSION['userName']; }?></h1>
  <h2>Online Mock Test</h2>
  <p>For the Preparation of Entry test university of Sindh, Jamshoro</p>
  <div class="progress">
   <div class="progress-bar progress-bar-striped  progress-bar-animated bg-info" style="width:90%; height: 25px;">90% Complete </div>
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

            $query = "SELECT sub_id from subject where sub_name like '%{$subject}%' AND sub_test_id = 1";
            $result = mysqli_query($connection,$query);
            if(mysqli_num_rows($result) > 0 ){?>
            
            
            <div class="col-md-7 col-xl-8 ml-md-auto py-8">
            <article onselectstart="return false" onpaste="return false;" onCopy="return false " onCut="return false" onDrag="return false" onDrop="return false">
            
            <div class="mx-0 mx-sm-auto">
  <div class="card">
    <div class="card-header bg-primary">
      <h5 class="card-title text-white mt-2" id="exampleModalLabel"><?php echo strtoupper($_GET['s']);?> Test Questions</h5>
    </div>
    <div class="modal-body">
      <div class="text-center">
        <i class="far fa-file-alt fa-4x mb-3 text-primary"></i>
        <p>
          <strong>Atempt All Questions </strong> <br>
          All Questions carry Equal Marks
        </p>
      </div>

      <hr />
            
      <form class="px-4" action="userpanel.php" method="POST">



      <?php 
    
      while($row = mysqli_fetch_array($result)){ ?>

<p class="text-justify"><strong>Qno:1  </strong>What is the Synonym of giver?</p>

<div class="form-check mb-2">
          <input class="form-check-input" type="radio" name="exampleForm" id="radio3Example1" />
          <label class="form-check-label" for="radio3Example1">
            Option 1
          </label>
        </div>
        <div class="form-check mb-2">
          <input class="form-check-input" type="radio" name="exampleForm" id="radio3Example2" />
          <label class="form-check-label" for="radio3Example2">
            OPtion 2
          </label>
        </div>
        <div class="form-check mb-2">
          <input class="form-check-input" type="radio" name="exampleForm" id="radio3Example3" />
          <label class="form-check-label" for="radio3Example3">
            Option 3
          </label>
        </div>
        <div class="form-check mb-2">
          <input class="form-check-input" type="radio" name="exampleForm" id="radio3Example4" />
          <label class="form-check-label" for="radio3Example4">
            Option 4
          </label>
        </div>

        <hr>







     <?php } ?>
            
     <div class=" form-check mb-2 text-right">
        <input class="btn btn-outline-primary" type="reset"  value="Reset"/>
          <input class="btn btn-primary" type="Submit"  value="submit"/>

          
        </div>
      </form>
    </div>

  </div>
</div>

              
            </article>
          </div> 
          <?php }



          }else{


              echo "<h2 class='text-center '><span class='border border-warning bg-warning'>Select subject for test</span></h2>";

          }?>

          


        </div>
      </div>
    </main><!-- /.main-content -->



    <!-- Footer -->
    <?php include('section/footer.php'); ?>
    <!-- /.footer -->

  </body>
</html>