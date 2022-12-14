
<!DOCTYPE html>
<html lang="en-US">


    <head>
        <meta charset="utf-8">
        <title>
            Mock Test - Tick 2 Top
        </title>
        <meta content="yes" name="apple-mobile-web-app-capable">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
      

        <link href="../assets/img/favicon.png" rel="shortcut icon" type="image/png">

  
        <!-- CSS -->
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,900' rel='stylesheet' type='text/css'>
        <link href="css/loader.css" rel="stylesheet" type="text/css">
        <link href="css/normalize.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link href="css/style.css" rel="stylesheet" type="text/css">


        <script src="js/jquery.js"></script>
    </head>
    <body>
        <div class="preloader">
            <div class="loading">
                <h2>
                    Loading...
                </h2>
                <span class="progress"></span>
            </div>
        </div>

        <div class="wrapper">
            <ul class="scene unselectable" data-friction-x="0.1" data-friction-y="0.1" data-scalar-x="25" data-scalar-y="15" id="scene">
                <li class="layer" data-depth="0.00">
                </li>
                <!-- BG -->

                <li class="layer" data-depth="0.10">
                    <div class="background">
                    </div>
                </li>

                <!-- Hero -->

                <li class="layer" data-depth="0.20">
                    <div class="title">
                        
                            <h2 style="color:#E0668B;" class="text-center fw-bold mx-3 mb-0 text-muted">Tick <strong style="color:#3D1462;">2 Top</strong></h2>
                         
                        <span class="line"></span>
                    </div>
                </li>

                <li class="layer" data-depth="0.25">
                    <div class="sphere">
                        <img alt="sphere" src="images/sphere.png">
                    </div>
                </li>

                <li class="layer" data-depth="0.30">
                    <div class="hero">
                        <h1 id="countdown">
                            The Online Mock Test for University of Sindh is Comming
                        </h1>

                        <p class="sub-title">
                            The Online Mock Test for University of Sindh is Comming
                        </p>
                    </div>
                </li>
                <!-- Flakes -->

                <li class="layer" data-depth="0.40">
                    <div class="depth-1 flake1">
                        <img alt="flake" src="images/flakes/depth1/flakes1.png">
                    </div>

                    <div class="depth-1 flake2">
                        <img alt="flake" src="images/flakes/depth1/flakes2.png">
                    </div>

                    <div class="depth-1 flake3">
                        <img alt="flake" src="images/flakes/depth1/flakes3.png">
                    </div>

                    <div class="depth-1 flake4">
                        <img alt="flake" src="images/flakes/depth1/flakes4.png">
                    </div>
                </li>

                <li class="layer" data-depth="0.50">
                    <div class="depth-2 flake1">
                        <img alt="flake" src="images/flakes/depth2/flakes1.png">
                    </div>

                    <div class="depth-2 flake2">
                        <img alt="flake" src="images/flakes/depth2/flakes2.png">
                    </div>
                </li>

                <li class="layer" data-depth="0.60">
                    <div class="depth-3 flake1">
                        <img alt="flake" src="images/flakes/depth3/flakes1.png">
                    </div>

                    <div class="depth-3 flake2">
                        <img alt="flake" src="images/flakes/depth3/flakes2.png">
                    </div>

                    <div class="depth-3 flake3">
                        <img alt="flake" src="images/flakes/depth3/flakes3.png">
                    </div>

                    <div class="depth-3 flake4">
                        <img alt="flake" src="images/flakes/depth3/flakes4.png">
                    </div>
                </li>

                <li class="layer" data-depth="0.80">
                    <div class="depth-4">
                        <img alt="flake" src="images/flakes/depth4/flakes.png">
                    </div>
                </li>

                <li class="layer" data-depth="1.00">
                    <div class="depth-5">
                        <img alt="flake" src="images/flakes/depth5/flakes.png">
                    </div>
                </li>
                <!-- Contact -->

                <li class="layer" data-depth="0.20">
                    <div class="contact">

                        <ul>
                         <?php   if(!isset($_SESSION['email'])){ ?>
                                <a class="btn btn-outline-danger" href="../admin/logout.php">Logout
                                </a>
                          
                                <?php    } ?> 
                        </ul>



                        Theme by <a href="#" target="_blank">Adeel Atta</a>
                        <a class="mail" href="mailto:study@tick2top.com?subject=Hi%20Adeel!">study@tick2top.com</a>
                    </div>
                </li>
            </ul>
        </div>

        <!-- Javascript -->
        <script src="js/plugins.js"></script> 
        <script src="js/jquery.countdown.min.js"></script> 
        <script src="js/main.js"></script>

    </body>
</html>