<?php
include "../templates/testnav.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>eFoodie - Food Blog </title>
    <link rel="icon" href="img/core-img/favicon.ico">
    <link rel="stylesheet" href="../assets/home-about-page/style.css">
</head>
<body>
    <div id="preloader">
        <i class="circle-preloader"></i>
        <img src="img/core-img/salad.png" alt="">
    </div>
    <div class="search-wrapper">
        <div class="close-btn"><i class="fa fa-times" aria-hidden="true"></i></div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <form action="#" method="post">
                        <input type="search" name="search" placeholder="Type any keywords...">
                        <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <header class="header-area">
        <div class="top-header-area">
            <div class="container h-100">
                <div class="row h-100 align-items-center justify-content-between">
                    <div class="col-12 col-sm-6">
                        <div class="breaking-news">
                            <div id="breakingNewsTicker" class="ticker">
                                <ul>
                                    <li><a href="home.php">Welcome to eFoodie.</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Top Social Info -->
                    <div class="col-12 col-sm-6">
                    </div>
                </div>
            </div>
        </div>
      <!--  <div class="delicious-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <nav class="classy-navbar justify-content-between" id="deliciousNav">
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>
                        <div class="classy-menu">
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>
                            <div class="classynav">
                                <ul>
                                    <li class="active"><a href="home.php">Home</a></li>
                                    <li><a href="../viewrecipes.php">Blogs</a></li>
                                    <li><a href="about.php">About</a></li>
                                    <li><a href="contact-us.php">Contact Us</a></li>                     
									<li><a href="team.php">Team</a></li>									
                                    <li><a href="">Edit</a>
									<ul class="dropdown">
									<li><a href="../chef.php">Chef</a></li>
                                    <li><a href="http://localhost/efoodie/admin.php#">Admin</a></li>
									</ul></li>
									<li><a href="">Services</a>
									<ul class="dropdown">
                                    <li><a href="">Hire Chef</a></li>
                                    <li><a href="">My account-<?php echo $_SESSION['username']; ?></a></li>
									</ul></li>
				
									<li><a href="../phpscripts/logout.php">Logout</a></li>					
                                   
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>  -->
    </header>
    <div class="breadcumb-area bg-img bg-overlay" style="background-image: url('../assets/home-about-page/img/bg-img/breadcumb1.jpg');">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcumb-text text-center">
                        <h2>About us</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="about-area section-padding-80">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h3>What we do?</h3>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <h6 class="sub-heading pb-5">We are an online recipe system that helps customers find good healthy meal procedures and recipes as posted by a chef who is certified. We also offer a chance for the customers to purchase ingredients posted in the food recipes and also hire the chefs posting the food recipes. </h6>
                </div>
            </div>
<div class="row">
                <div class="col-12">
                    <img class="mb-70" src="../assets/home-about-page/img/bg-img/about.png" alt="">
                    <p class="text-center">eFoodie helps to simplify the complexity of finding ingredients and utilizing recipes by having a user-friendly system that brings together the users and professional chefs and hence solve the current problem. Moreover, it will enable a customer to hire a chef.   Some of the problems likely to face someone in case of unhealthy eating habits or even cooking habits include: -stagnant infant growth, obesity, heart attack, high blood pressure. The online recipe system will have blogs that will shine some light into some of these issues and the different ways in which they can be tackled.</p>
                </div>
            </div>
        </div>
    </section>
    <script src="../assets/home-about-page/js/jquery/jquery-2.2.4.min.js"></script>
    <script src="../assets/home-about-page/js/bootstrap/popper.min.js"></script>
    <script src="../assets/home-about-page/js/bootstrap/bootstrap.min.js"></script>
    <script src="../assets/home-about-page/js/plugins/plugins.js"></script>
    <script src="../assets/home-about-page/js/active.js"></script>
</body>

</html>