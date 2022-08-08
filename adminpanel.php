<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <title>Adminpanel - Tick2Top</title>

    <!-- Styles -->
    <link href="assets/css/page.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="assets/img/apple-touch-icon.jpg">
    <link rel="icon" href="assets/img/favicon.png">
  </head>

  <body> 




    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-stick-dark" data-navbar="sticky">
      <?php include('section/nav-bar.php'); ?>
    </nav>
    <!-- /.navbar -->


    <!-- Main Content -->
    <main class="main-content">


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
      <section class="section p-5 mt-10" style="border: 2px solid red">
        <div class="container">
          <form class="form-row" action="admin/adduniversity.php" method="POST" enctype="multipart/form-data">
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



    </main><!-- /.main-content -->


    <!-- Footer -->
    <?php include('section/footer.php'); ?>
    <!-- /.footer -->

  </body>
</html>