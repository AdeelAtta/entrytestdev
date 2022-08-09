<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <title>Admin panel - Tick2Top</title>

    <!-- Styles -->
    <link href="assets/css/page.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="assets/img/apple-touch-icon.jpg">
    <link rel="icon" href="assets/img/favicon.png">
  </head>

  <body> 
  <?php include 'admin/db.php'; ?>



    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-stick-dark" data-navbar="sticky">
      <?php include('section/nav-bar.php'); ?>
    </nav>
    <!-- /.navbar -->


    <!-- Main Content -->
    <main class="main-content" >


      <!-- <section class="section pt-10">
        <div class="container">
          <header class="section-header">
            <h2 class="display-4">Admin Panel</h2>
            <hr>
          </header>

          <form class="form-row" action="action.php" method="POST" enctype="multipart/form-data">
            <div class="col-12">
                <div class="alert alert-success d-on-success">We received your message and will contact you back soon.</div>
            </div>

            <div class="form-group col-sm-6 col-xl-3">
              <input class="form-control form-control-lg" type="text" name="topicName" placeholder="Topic Name">
            </div>

            <div class="form-group col-12">
              <textarea id="Article_editor" class="form-control form-control-lg" rows="4" placeholder="Message" name="topicData"></textarea>
            </div>

            <div class="col-12 text-center">
              <button class="btn btn-xl btn-block btn-primary" type="submit">Submit</button>
            </div>
          </form>
        <script src="ckeditor/ckeditor.js"></script>
        <script>
            CKEDITOR.replace('Article_editor');
        </script>
        </div>
      </section> -->





      <!-- Add University -->
      <section class="section p-5 mt-10 " >
        <div class="container">
          <form class="form-row "  action="admin/adduniversity.php" method="POST" enctype="multipart/form-data">
          <legend>Add University</legend>
          <?php if(isset($_GET['uniadded'])){ ?> 
          <div class="col-12">
                <div class="alert alert-success d-on-success">University added Successfully</div>
            </div>
          <?php }elseif(isset($_GET['uniAlreadyExist'])) {?> 
          <div class="col-12">
            <div class="alert alert-danger d-on-success">University Already Exist</div>
          </div>
        <?php  } ?>
          <!-- University name -->
            <div class="form-group col-sm-6 col-xl-3">
              <input class="form-control form-control-lg" type="text" name="uniName" placeholder="University Name">
            </div>
            <div class="form-group col-sm-6 col-xl-3">
              <input class="form-control form-control-lg" type="text" name="uniShort" placeholder="Short Name">
            </div>
           
            <div class="form-group col-sm-6 col-xl-3 text-center">
              <button class="btn btn-xl btn-block btn-primary" type="submit">Add University</button>
            </div>
       
          </form>
        </div>
      </section>
      <hr class="border border-primary border-2 opacity-50">

      

      <!-- Add Tests -->
      <section class="section p-5 mt-5 ">
        <div class="container">
          <form class="form-row" action="admin/addtest.php" method="POST" enctype="multipart/form-data">
          <legend>Add Tests</legend> 
          <?php if(isset($_GET['testAdded'])){ ?> 
          <div class="col-12">
                <div class="alert alert-success d-on-success">Test added Successfully</div>
            </div>
          <?php }elseif(isset($_GET['testAlreadyExist'])) {?> 
          <div class="col-12">
            <div class="alert alert-danger d-on-success">Test Already Exist</div>
          </div>
        <?php  } ?>


          <!-- Test Name -->
            <div class="form-group col-sm-6 col-xl-3">
              <input class="form-control form-control-lg" type="text" name="testName" placeholder="Test Name">
            </div>
            <div class="form-group col-sm-6 col-xl-3">
            <select name="testUniId" id="" class="form-control form-control-lg">
              <?php 
              $query = "Select * from university";
              $result = mysqli_query($connection,$query);
              while($row = mysqli_fetch_array($result)){ ?>
               <option value="<?php echo $row['uni_id']; ?>"><?php echo $row['uni_name']; ?></option>
              <?php  } ?>   
            </select>
            </div>
           
            <div class="form-group col-sm-6 col-xl-3 text-center">
              <button class="btn btn-xl btn-block btn-primary" type="submit">Add Tests</button>
            </div>
          </form>
        </div>
      </section>
      <hr class="border border-primary border-2 opacity-50">





            <!-- Add Subject -->
      <section class="section p-5 mt-5 ">
        <div class="container">
          <form class="form-row" action="admin/addsubject.php" method="POST" enctype="multipart/form-data">
          <legend>Add Subject</legend> 
          <?php if(isset($_GET['subjectAdded'])){ ?> 
          <div class="col-12">
                <div class="alert alert-success d-on-success">Subject Added Successfully</div>
            </div>
          <?php }elseif(isset($_GET['subjectAlreadyExist'])) {?> 
          <div class="col-12">
            <div class="alert alert-danger d-on-success">Subject Already Exist</div>
          </div>
        <?php  } ?>


          <!-- Subject Name -->
            <div class="form-group col-sm-6 col-xl-3">
              <input class="form-control form-control-lg" type="text" name="subName" placeholder="Subject Name">
            </div>

            <!-- select university -->
            <div class="form-group col-sm-6 col-xl-3">
            <select name="subUniId" id="uni" class="form-control form-control-lg">
              <?php 
              $query = "Select * from university";
              $result = mysqli_query($connection,$query);
              while($row = mysqli_fetch_array($result)){ ?>
               <option value="<?php echo $row['uni_id']; ?>"><?php echo $row['uni_name']; ?></option>
              <?php  } ?>   
            </select>
            </div>


                <!-- select test type -->
            <div class="form-group col-sm-6 col-xl-3">
            <select name="subTestId" id="" class="form-control form-control-lg">
              <?php 
              $query = "Select * from test";
              $result = mysqli_query($connection,$query);
              while($row = mysqli_fetch_array($result)){ ?>
               <option value="<?php echo $row['test_id']; ?>"><?php echo $row['test_name']; ?></option>
              <?php  } ?>   
            </select>
            </div>
           
            <div class="form-group col-sm-6 col-xl-3 text-center">
              <button class="btn btn-xl btn-block btn-primary" type="submit">Add Subject</button>
            </div>
          </form>
        </div>
      </section>
      <hr class="border border-primary border-2 opacity-50">
      
















    </main><!-- /.main-content -->


    <!-- Footer -->
    <?php include('section/footer.php'); ?>
    <!-- /.footer -->

  </body>
</html>