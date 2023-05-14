<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>AGRO - A leading Agro-based company in Bangladesh</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="icon" href="world.ico" type="image/x-icon" />

  <!--All Style Sheet-->
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/classy-nav.css" />
  <link rel="stylesheet" href="css/font-awesome.min.css" />
  <link rel="stylesheet" href="css/animate.css" />
  <link rel="stylesheet" href="css/hover.css" />
  <link rel="stylesheet" href="css/owl.carousel.min.css" />
  <link rel="stylesheet" href="css/style-main.css" />
  <link rel="stylesheet" href="css/style.css" />
  <!--Style Sheet End-->
</head>

<?php 
  $email = "info@agro.com";
  $Contact = "+88 01843885002";
  $Author = "Mojahid Rafi";
?>

<body>
  <!-- ##### Header Area Start ##### -->
  <header class="header-area">
    <!-- Top Header Area -->
    <div class="top-header-area">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="top-header-content d-flex align-items-center justify-content-between">
              <!-- Top Header Content -->
              <div class="top-header-meta">
                <p>Welcome to <span>AK Agro</span>, we hope you will have good experience</p>
              </div>
              <!-- Top Header Content -->
              <div class="top-header-meta text-right">
                <a href="#" data-toggle="tooltip" data-placement="bottom" title="info@akagro.com"><i
                    class="fa fa-envelope-o" aria-hidden="true"></i> <span>Email: <?php echo $email?></span></a>
                <a href="#" data-toggle="tooltip" data-placement="bottom" title="+88 01843885002"><i
                    class="fa fa-phone" aria-hidden="true"></i> <span>Call Us: <?php echo $Contact?></span></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Navbar Area -->
    <div class="famie-main-menu">
      <div class="classy-nav-container breakpoint-off">
        <div class="container">
          <!-- Menu -->
          <nav class="classy-navbar justify-content-between" id="famieNav">
            <!-- Nav Brand -->
            <a href="index.php" class="nav-brand"><img src="./images/logo.png" alt=""></a>
            <!-- Navbar Toggler -->
            <div class="classy-navbar-toggler">
              <span class="navbarToggler"><span></span><span></span><span></span></span>
            </div>
            <!-- Menu -->
            <div class="classy-menu">
              <!-- Close Button -->
              <div class="classycloseIcon">
                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
              </div>
              <!-- Navbar Start -->
              <div class="classynav">
                <ul>
                  <li class="active"><a href="index.php">Home</a></li>
                  <li><a href="#">About</a></li>
                  <li><a href="#">Business Unit</a></li>
                </ul>
                <li><a href="project.php">Upcoming Projects</a></li>
                <li><a href="contact.php">Contact Us</a></li>
                </ul>
              </div>
              <!-- Navbar End -->
            </div>
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ##### Header Area End ##### -->