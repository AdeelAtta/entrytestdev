<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <title>SignUp - Tick2Top</title>

    <!-- Styles -->
    <link href="assets/css/page.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="assets/img/apple-touch-icon.jpg">
    <link rel="icon" href="assets/img/favicon.png">
  </head>

  <body> 








<hr>

<?php 
if(isset($_POST['userName']) && isset($_POST['email'])){


include 'admin/db.php';


$userName      =  mysqli_real_escape_string($connection,$_POST['userName']);
$email         = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
$pass          = mysqli_real_escape_string($connection,$_POST['password']);
$city          = mysqli_real_escape_string($connection,$_POST['city']);



$query = "Select * from amn where userName LIKE '{$userName}' OR email like '{$email}'";
$result = mysqli_query($connection,$query);
if(mysqli_num_rows($result) > 0){ 
  header( "Location: signup.php?u=$userName&e=$email&c=$city&userName" ); ?>
  <?php }else{ 

    $query = "INSERT into amn(userName, email, password, city) values('{$userName}','{$email}','{$pass}', '{$city}')";
if(mysqli_query($connection,$query)){
 
  header( "Location: signup.php?accountCreated" );
}else{
  echo mysqli_error($connection);
}

 }
  
  } ?>
    

    <!-- Main Content -->
    <main class="main-content">
      <div class="container">
    
        <div class="container py-5 h-100">
            <div class="row d-flex align-items-center justify-content-center h-100 ">
      <div style="text-align:center;" class="col-md-8 col-lg-7 col-xl-6">
      <img  style="width:150px; height:150px; margin-top:20px; " src="assets/img/favicon.png"  alt="tick2top logo">
      </div>
      <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
      
        <form action="signup.php" method="post" autocomplete="off" >
          <!-- Registration form -->
          <div class="divider d-flex align-items-center my-4">
            <h2 class="text-center fw-bold mx-3 mb-0 text-muted">REGISTRATION</h2>
          </div>
            
    <br>
    <?php if(isset($_GET['accountCreated'])){ ?>
<div class="alert alert-success">
<strong>Account Created Successfully</strong><br> Account will be activated within 24 hours.
</div>


<?php  } ?>
<?php if(isset($_GET['userName'])){ ?>
<div class="alert alert-warning">
  <strong>UserName or Email </strong>Already exist. 
</div>


<?php  } ?>
          <div class="form-outline mb-4">
          <label class="form-label" for="form1Example1"><h6><strong>Username:</strong></h6></label>
            <input type="text" id="form1Example1" class="form-control form-control-lg" name="userName" value="<?php if(isset($_GET['u'])){
                echo $_GET['u'];
            }?>" required/>
          </div>

          <div class="form-outline mb-4">

          <label class="form-label" for="form1Example2"><h6><strong>Email address:</strong></h6></label>
            <input type="email" id="form1Example2" class="form-control form-control-lg" name="email" value="<?php if(isset($_GET['e'])){
                echo $_GET['e'];
            }?>" required/>
          </div>

          <!-- Password input -->
          <div class="form-outline mb-4">
          <label class="form-label" for="form1Example3"><h6><strong>Set New Password:</strong></h6></label>
            <input type="password" id="form1Example3" class="form-control form-control-lg" name="password" required/>
          </div>

          <div class="form-outline mb-4">
          <label class="form-label" for="form1Example4"><h6><strong>City:</strong></h6></label>
            <input type="text" id="form1Example4" class="form-control form-control-lg" name="city" value="<?php if(isset($_GET['c'])){
                echo $_GET['c'];
            }?>" required/>
          </div>


          <!-- Submit button -->
          <button type="submit" class="btn btn-primary btn-lg btn-block">Create Account</button>
          <div class="alert alert-secondary text-center">
  <strong>Already have Account?</strong>  <a href="login.php">Login </a>
</div>


        </form>
      </div>



    </main><!-- /.main-content -->



























    <!-- Footer -->
    <?php include('section/footer.php'); ?>
    <!-- /.footer -->

  </body>
</html>























