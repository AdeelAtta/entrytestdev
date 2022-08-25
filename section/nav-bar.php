 
  <?php session_start();?>
  <div class="container">
    <div class="navbar-left">
      <button class="navbar-toggler" type="button">&#9776;
      </button>
      <a class="navbar-brand" href="index.php">
        <img class="logo-dark" src="assets/img/logo.png" alt="logo">
        <img class="logo-light" src="assets/img/logo.png" alt="logo">
      </a>
    </div>
    <section class="navbar-mobile">
      <span class="navbar-divider d-mobile-none">
      </span>
      <ul class="nav nav-navbar ml-auto mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Home 
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Entry Test Preparation
            <span class="arrow">
            </span>
          </a>
          <ul class="nav">
            <li class="nav-item">
              <a class="nav-link" href="#">Preparation 
                <span class="arrow">
                </span>
              </a>
              <nav class="nav">
                <a class="nav-link" href="preparation.php?s=2">English
                </a>
                <a class="nav-link" href="preparation.php?s=3">GK
                </a>
                <a class="nav-link" href="preparation.php?s=4">General Science
                </a>
                <a class="nav-link" href="preparation.php?s=5">Mathematics
                </a>
                <a class="nav-link" href="preparation.php?s=6">IQ
                </a>
              </nav>
            </li>

           
            <li class="nav-item">
              <a class="nav-link" href="#">MCQs 
                <span class="arrow">
                </span>
              </a>
              <nav class="nav">
                <a class="nav-link" href="mcqs.php?s=English">English
                </a>
                <a class="nav-link" href="mcqs.php?s=General Knowledge">GK
                </a>
                <a class="nav-link" href="mcqs.php?s=General Science">General Science
                </a>
                <a class="nav-link" href="mcqs.php?s=Simple Mathematics">Mathematics
                </a>
                <a class="nav-link" href="mcqs.php?s=Intelligent Quotient">IQ
                </a>
              </nav>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="faq.php">FAQ
          </a>
        </li>

      </ul>
      <?php

if(!isset($_SESSION['email'])){ ?>
      <a class="btn btn-danger" href="login.php">Login
          </a>
          <?php }else{ ?>
      <a class="btn btn-outline-danger" href="admin/logout.php">Logout
      </a>

      <?php    } ?>     
    </section>

  </div>
