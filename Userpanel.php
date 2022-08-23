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

    <title> Welcome - Tick2Top</title>

    <!-- Styles -->
    <link href="assets/css/page.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="assets/img/apple-touch-icon.jpg">
    <link rel="icon" href="assets/img/favicon.png">
  </head>

  <body> 
  <?php include 'admin/db.php'; ?>



    <!-- Main Content -->
    <main class="main-content" >



<br><br><br>
























    </main><!-- /.main-content -->


    <!-- Footer -->
    <?php include('section/footer.php'); ?>
    <!-- /.footer -->

  </body>
</html>