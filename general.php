<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <title>Tick 2 Top - Entry Tests Preparation</title>

    <!-- Styles -->
    <link href="assets/css/page.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="assets/img/apple-touch-icon.jpg">
    <link rel="icon" href="assets/img/favicon.png">
  </head>

  <body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-stick-dark" data-navbar="static">

      <?php include('section/nav-bar.php'); ?>
      
    </nav><!-- /.navbar -->


  
    <!-- Main Content -->
    <main class="main-content">
      <div class="container">
        <div class="row">


          <!--
          |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
          | Sidebar
          |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
          !-->
          <div class="col-md-4 col-xl-3">
            <hr class="d-md-none my-0">
            <aside class="sidebar sidebar-expand-md sidebar-sticky pr-md-4 br-1">
              <ul class="nav nav-sidebar nav-sidebar-hero" data-accordion="true">
                <li class="nav-item">
                  <a class="nav-link active" href="#">Getting started <i class="nav-angle rotate"></i></a>
                  <div class="nav">
                    <a class="nav-link" href="#">Overview</a>
                    <a class="nav-link" href="#">Directory structure</a>
                    <a class="nav-link" href="#">HTML structure</a>
                    <a class="nav-link active" href="#">Get started</a>
                  </div>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="#">Content <i class="nav-angle"></i></a>
                  <div class="nav">
                    <a class="nav-link" href="../docs/typography.html">Typography</a>
                    <a class="nav-link" href="../docs/code.html">Code</a>
                    <a class="nav-link" href="../docs/icon.html">Icon</a>
                    <a class="nav-link" href="../docs/image.html">Image</a>
                    <a class="nav-link" href="../docs/table.html">Table</a>
                    <a class="nav-link" href="../docs/video.html">Video</a>
                  </div>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="#">Layout <i class="nav-angle"></i></a>
                  <div class="nav">
                    <a class="nav-link" href="../docs/navbar.html">Navbar</a>
                    <a class="nav-link" href="../docs/sidebar.html">Sidebar</a>
                    <a class="nav-link" href="../docs/toc.html">Table of content</a>
                    <a class="nav-link" href="../docs/utility.html">Utility classes</a>
                  </div>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="#">Components <i class="nav-angle"></i></a>
                  <div class="nav">
                    <a class="nav-link" href="../docs/accordion.html">Accordion</a>
                    <a class="nav-link" href="../docs/alert.html">Alert</a>
                    <a class="nav-link" href="../docs/badge.html">Badge</a>
                    <a class="nav-link" href="../docs/button.html">Button</a>
                    <a class="nav-link" href="../docs/files.html">Files</a>
                    <a class="nav-link" href="../docs/form.html">Form</a>
                    <a class="nav-link" href="../docs/pagination.html">Pagination</a>
                    <a class="nav-link" href="../docs/palette.html">Palette</a>
                    <a class="nav-link" href="../docs/progress.html">Progress</a>
                    <a class="nav-link" href="../docs/scroll.html">Scroll</a>
                    <a class="nav-link" href="../docs/social.html">Social</a>
                    <a class="nav-link" href="../docs/steps.html">Steps</a>
                    <a class="nav-link" href="../docs/tab.html">Tab</a>
                  </div>
                </li>

              </ul>
            </aside>
          </div>


          <!--
          |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
          | Content
          |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
          !-->
          <div class="col-md-7 col-xl-8 ml-md-auto py-8 order-first order-md-last">
            <h1>Get Started</h1>
            <p class="lead">In this article, we help you to start and configure your project by creating a copy of TheDocs. Make sure you've read the directory structure and html structure articles before continuing.</p>

            <br>
            <h6>In this page</h6>
            <nav class="nav nav-toc-1 my-4">
              <a class="nav-link" href="#copy">Copy</a>
              <a class="nav-link" href="#config">Configure</a>
              <a class="nav-link" href="#dev">Develop</a>
            </nav>

            <hr class="my-8">

            <h2 id="copy">Copy</h2>
            <p>Our template comes with two powerful starter templates that you should use one of them as a boilerplate for your project. You should simply copy one of the starter directory to your desire destination and start developing.</p>

            <h5>Choose a starter template</h5>
            <p>As you might see in the <code>/starter</code> directory, we have two starters; <a href="#">basic</a> and <a href="#">expert</a>:</p>
            <ul>
              <li><strong>Basic starter</strong>: This starter suites for simple websites which doesn't require any customization to TheDocs code and writing few additional CSS and JS codes would be enough. It doesn't require npm and doesn't have gulp tasks.</li>
              <li><strong>Expert starter</strong>: The expert starter has several features which is not included in the basic starter. Those features give you more freedom in customizing your template and writing extra codes. It includes a gulpfile with necessary tasks to start a web server, watch files for changes and compile SCSS and JS files. Finally, you can run a command to have all the required files for production copied to a directory.</li>
            </ul>
            <p>We strongly recommend using the <mark>expert starter</mark>, but the basic starter template is advised to people who are not familiar with npm, task runners and scss; and developing small-scaled websites with less customization.</p>


            <hr class="hr-dash my-7">


            <h2 id="config">Configure</h2>
            <p>Open /assets/js/script.js file and set the configuration options if you'd like. There's possibility to set your Google API Key, Google Analytics Tracking, and choose to have smooth scroll or not, etc. The script.js file has a complete documentation to help you configuring your template.</p>
            <p>If you're going to have a contact form in your website, you should make some more configurations. Please open /assets/php/sendmail.php files and configure your contact form with specifying your email address and default subject.</p>
            <p>Based on the starter template you chose, you should also read the "How to get started?" article of <a href="#">basic starter</a> or <a href="#">expert starter</a>.</p>


            <hr class="hr-dash my-7">


            <h2 id="dev">Develop</h2>
            <p>Now you're ready to start creating your pages. We've already implemented several common pages such as about, contact, privacy policy, faq, etc. and several sample homepages for your next website such as Gmail, Trello, Bootstrap, GitHub, etc. You can keep the pages you need and modify their content, or copy one of the html files and use ready blocks to create your own pages.</p>
            <p>You can find a lot of ready blocks in the <em>/block directory</em>. Finally, for more advanced users, you can read the documentation in <em>/uikit directory</em> to learn about the elements, components and fundamentals of TheDocs and create your own customized blocks.</p>
          </div>

        </div>
      </div>
    </main><!-- /.main-content -->


    <!-- Footer -->
    <?php include('section/footer.php'); ?>
    <!-- /.footer -->



  </body>
</html>
