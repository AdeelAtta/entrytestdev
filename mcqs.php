<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <title>Tick 2 Top - Entry Tests MCQs</title>

    <!-- Styles -->
    <link href="assets/css/page.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="assets/img/apple-touch-icon.jpg">
    <link rel="icon" href="assets/img/favicon.png">
  </head>

  <body>


    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light navbar-stick-dark">
      <?php include('section/nav-bar.php'); ?>
    </nav><!-- /.navbar -->


    <!-- Header -->
    <header class="header text-white bg-dark pt-9 pb-5" style="background-image: linear-gradient(-20deg, #2b5876 0%, #4e4376 100%);">
      <div class="container">
        <h3>Entry Test MCQs</h3>
      </div>
    </header><!-- /.header -->


    <!-- Main Content -->
    <main class="main-content">
      <div class="container">
        <div class="row">


          <!--
          |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
          | Sidebar
          |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
          !-->
              
<?php if(isset($_GET['s'])){
    $subject = $_GET['s'];
} 

if( isset($_GET['t'])){
  $topic   = $_GET['t'];
}

$scount = 0;
$tcount = 0;


include 'admin/db.php';
?>

<div class="col-md-4 col-xl-3 order-last order-md-first">
            <hr class="d-md-none">
            <aside class="sidebar sidebar-sticky sidebar-stick-shadow pr-md-5 br-1">
              <ul class="nav nav-sidebar nav-sidebar-hero" data-accordion="true">
                

                <?php $query = "SELECT * FROM subject where sub_test_id = 1  ";
                      $result = mysqli_query($connection,$query);
                      if(mysqli_num_rows($result) > 0 ){
                        while($row = mysqli_fetch_array($result)){  $scount++;?>
                          
                        <li class="nav-item">
                          <a class="nav-link  <?php if((!$subject && $scount == 1)  or ($subject < 0 && $scount == 1) ){ echo "active"; }else if($subject ==  $row['sub_id']  ){echo "active"; } ?>  " href="mcqs.php?s=<?php echo $row['sub_id']; ?>"><?php echo $row['sub_name']; ?></a>
                      </li>

                      <?php  }  } ?>
              </ul>
            </aside>
          </div>

          

          <!--
          |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
          | Content
          |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
          !-->
           <div class="col-md-7 col-xl-8 ml-md-auto py-8">
            <article onselectstart="return false" onpaste="return false;" onCopy="return false " onCut="return false" onDrag="return false" onDrop="return false">
             <?php include('section/.php'); ?>
            </article>
          </div> 
          


        </div>
      </div>
    </main><!-- /.main-content -->


    <!-- Footer -->
    <?php include('section/footer.php'); ?>
    <!-- /.footer -->



  </body>
</html>
