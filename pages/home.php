<?php
session_start();
include_once '../phpscripts/connection.php';

if(!isset($_SESSION['username'])) {
	header("Location: ../index.php");
} else {
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Delicious Home</title>
    <link rel="icon" href="img/core-img/favicon.ico">
    <link rel="stylesheet" href="../assets/home-about-page/style.css">
</head>
<body>
<div class="header-top">
		  				  	
    <div id="preloader">
        <i class="circle-preloader"></i>
        <img src="../assets/home-about-page/img/core-img/salad.png" alt="">
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
                                    <li><a href="#">Hello <?php echo $_SESSION['username']; ?></a></li>
                                    <li><a href="home.php">Welcome to eFoodie.</a></li>
									<li><a href="../phpscripts/logout.php">Logout</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="delicious-main-menu">
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
                                    <li><a href="../view_recipes.php">Blogs</a></li>
                                    <li><a href="about.php">About</a></li>
                                    <li><a href="contact-us.php">Contact Us</a></li>                     
									<li><a href="team.php">Team</a></li>			
									<li><a href="">Services</a>
									<ul class="dropdown">
                                    <li><a href="../hirechef.php">Hire Chef</a></li>
                                    <li><a href="">My account-<?php echo $_SESSION['username']; ?></a></li>
									</ul></li>
				
									<li><a href="../phpscripts/logout.php">Logout</a></li>					
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <section class="hero-area">
        <div class="hero-slides owl-carousel">
            <div class="single-hero-slide bg-img" style="background-image: url('../assets/home-about-page/img/bg-img/bg1.jpg');">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                            <div class="hero-slides-content" data-animation="fadeInUp" data-delay="100ms">
                                <h2 data-animation="fadeInUp" data-delay="300ms">Delicious Homemade Burger</h2>
                                <p data-animation="fadeInUp" data-delay="700ms">
A hamburger, beefburger or burger is a sandwich consisting of one or more cooked patties of ground meat, usually beef, placed inside a sliced bread roll or bun. The patty may be pan fried, grilled, or flame broiled. Hamburgers are often served with cheese, lettuce, tomato, bacon, onion, pickles, or chiles; condiments such as mustard, mayonnaise, ketchup, relish, or "special sauce"; and are frequently placed on sesame seed buns. A hamburger topped with cheese is called a cheeseburger.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-hero-slide bg-img" style="background-image: url('../assets/home-about-page/img/bg-img/bg6.jpg');">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                            <div class="hero-slides-content" data-animation="fadeInUp" data-delay="100ms">
                                <h2 data-animation="fadeInUp" data-delay="300ms">Delicious Homemade Burger</h2>
                                <p data-animation="fadeInUp" data-delay="700ms">
A hamburger, beefburger or burger is a sandwich consisting of one or more cooked patties of ground meat, usually beef, placed inside a sliced bread roll or bun. The patty may be pan fried, grilled, or flame broiled. Hamburgers are often served with cheese, lettuce, tomato, bacon, onion, pickles, or chiles; condiments such as mustard, mayonnaise, ketchup, relish, or "special sauce"; and are frequently placed on sesame seed buns. A hamburger topped with cheese is called a cheeseburger.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-hero-slide bg-img" style="background-image: url('../assets/home-about-page/img/bg-img/bg7.jpg');">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                            <div class="hero-slides-content" data-animation="fadeInUp" data-delay="100ms">
                                <h2 data-animation="fadeInUp" data-delay="300ms">Delicious Homemade Burger</h2>
                                <p data-animation="fadeInUp" data-delay="700ms">
A hamburger, beefburger or burger is a sandwich consisting of one or more cooked patties of ground meat, usually beef, placed inside a sliced bread roll or bun. The patty may be pan fried, grilled, or flame broiled. Hamburgers are often served with cheese, lettuce, tomato, bacon, onion, pickles, or chiles; condiments such as mustard, mayonnaise, ketchup, relish, or "special sauce"; and are frequently placed on sesame seed buns. A hamburger topped with cheese is called a cheeseburger.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer-area">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-12 h-100 d-flex flex-wrap align-items-center justify-content-between">
                </div>
            </div>
        </div>
    </footer>
    <script src="../assets/home-about-page/js/jquery/jquery-2.2.4.min.js"></script>
    <script src="../assets/home-about-page/js/bootstrap/popper.min.js"></script>
    <script src="../assets/home-about-page/js/bootstrap/bootstrap.min.js"></script>
    <script src="../assets/home-about-page/js/plugins/plugins.js"></script>
    <script src="../assets/home-about-page/js/active.js"></script>
</body>

</html>
<?php } ?>
