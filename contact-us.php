<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <title>Tick2Top - Contact Us Form</title>

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
      <section class="section pt-10">
        <div class="container">
          <header class="section-header">
            <h2 class="display-4">Looking for help?</h2>
            <hr>
            <p class="lead">Our team is happy to answer your questions. Fill out the form and we’ll be in touch as soon as possible.</p>
          </header>

          <form class="form-row" action="#" method="POST" data-form="mailer">
            <div class="col-12">
              <div class="alert alert-success d-on-success">We received your message and will contact you back soon.</div>
            </div>


            <div class="form-group col-sm-6 col-xl-3">
              <input class="form-control form-control-lg" type="text" name="name" placeholder="Name">
            </div>

            <div class="form-group col-sm-6 col-xl-3">
              <input class="form-control form-control-lg" type="email" name="email" placeholder="Email">
            </div>

            <div class="form-group col-sm-6 col-xl-3">
              <input class="form-control form-control-lg" type="text" name="username" placeholder="Username">
            </div>

            <div class="form-group col-sm-6 col-xl-3">
              <select class="form-control form-control-lg" name="department">
                <option>Question about</option>
                <option>My account</option>
                <option>Payments</option>
                <option>Licenses</option>
                <option>Copyright</option>
                <option>Site feedback</option>
              </select>
            </div>

            <div class="form-group col-12">
              <textarea class="form-control form-control-lg" rows="4" placeholder="Message" name="message"></textarea>
            </div>

            <div class="col-12 text-center">
              <button class="btn btn-xl btn-block btn-primary" type="submit">Send Message</button>
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
