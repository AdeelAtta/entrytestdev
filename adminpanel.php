

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
    <?php 

if(!isset($_SESSION['email'] )){
  header('Location: login.php?invalid');
}else if($_SESSION['auth'] == 'user'){


  header('Location: userpanel.php');

}
?>

    <!-- Main Content -->
    <main class="main-content" >

    

    <?php if(isset($_GET['update'])){
              include 'section/updateData.php' ;
          }else if(isset($_GET['addMcqs'])){
              include 'section/addquiz.php' ;
          }else if(isset($_GET['students'])){
            include 'section/Students.php' ;
        }else{  
              include 'section/addData.php'; 
              }?>




    



    </main><!-- /.main-content -->


    <!-- Footer -->
    <?php include('section/footer.php'); ?>
    <!-- /.footer -->

  </body>
</html>