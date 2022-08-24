<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <title>Login - Tick2Top</title>

    <!-- Styles -->
    <link href="assets/css/page.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="assets/img/apple-touch-icon.jpg">
    <link rel="icon" href="assets/img/favicon.png">
  </head>

  <body> 








<hr>
<br>




    <!-- Main Content -->
    <main class="main-content">
      <div class="container">
    
        <div class="container py-5 h-100">
            <div class="row d-flex align-items-center justify-content-center h-100 ">
      <div style="text-align:center;" class="col-md-8 col-lg-7 col-xl-6">
      <a href="index.php"><img  style="width:150px; height:150px; margin-top:20px; " src="assets/img/favicon.png"  alt="tick2top logo"></a>
      </div>
      <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
      
        <form action="admin/action.php" method="post" autocomplete="off" >
          <!-- Email input -->
            <br><br>
          <div class="divider d-flex align-items-center my-4">
            <h2 class="text-center fw-bold mx-3 mb-0 text-muted">Login</h2>
          </div>
          <br>
          <?php if(isset($_GET['invalid'])){ ?> 
          <div class="col-12">
                <div class="alert alert-danger d-on-success">Invalid Email or Passowrd !</div>
            </div>
          <?php } ?>

          <div class="form-outline mb-4">
          <label class="form-label" for="form1Example13">Email address</label>
            <input type="email" id="form1Example13" class="form-control form-control-lg" name="email" required />
            
          </div>

          <!-- Password input -->
          <div class="form-outline mb-4">
          <label class="form-label" for="form1Example23">Password</label>
            <input type="password" id="form1Example23" class="form-control form-control-lg" name="password" required />
            
          </div>



     

          <!-- Submit button -->
          <button type="submit" class="btn btn-primary btn-lg btn-block">Sign in</button>

          <div class="divider d-flex align-items-center my-4">
            <p class="text-center fw-bold mx-3 mb-0 text-muted"></p>
          </div>


        </form>
      </div>



    </main><!-- /.main-content -->


    <!-- Footer -->
    <?php include('section/footer.php'); ?>
    <!-- /.footer -->

  </body>
</html>























