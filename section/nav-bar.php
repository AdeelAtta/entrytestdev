 
  
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
                <a class="nav-link" href="quiz.php?s=">English
                </a>
                <a class="nav-link" href="quiz.php?s=gk">GK
                </a>
                <a class="nav-link" href="quiz.php?s=gs">General Science
                </a>
                <a class="nav-link" href="quiz.php?s=ma">Mathematics
                </a>
                <a class="nav-link" href="quiz.php?s=iq">IQ
                </a>
              </nav>
            </li>
             <!--
            <li class="nav-item">
              <a class="nav-link" href="#">Past-Papers 
                <span class="arrow">
                </span>
              </a>
              <nav class="nav">
                <a class="nav-link" href="#">2020
                </a>
                <a class="nav-link" href="#">2019
                </a>
                <a class="nav-link" href="#">2018
                </a>
                <a class="nav-link" href="#">2017
                </a>
                <a class="nav-link" href="#">2016
                </a>
              </nav>
            </li>  -->

            
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="faq.php">FAQ
          </a>
        </li>

        <?php

if(isset($_SESSION['email'])){ ?>
        <li class="nav-item">
          <a class="nav-link" href="admin/logout.php">Logout
          </a>
        </li>
<?php } ?>
      </ul>
    </section>
    <a class="btn btn-sm btn-round btn-outline-light ml-auto mr-auto mt-2" href="https://chat.whatsapp.com/FCyhWHPUQAiJSJBd11hFQQ" target="_blank">
      <i class="fa fa-whatsapp lead-7 text-lighter ">
      </i>
    </a>
  </div>
