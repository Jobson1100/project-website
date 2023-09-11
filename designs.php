<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<?php
  require 'database.php';

  $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);

  $fetch_data = "SELECT * FROM budget WHERE id=$id";
  $budgets_data = mysqli_query($connection, $fetch_data);
  $budget = mysqli_fetch_assoc($budgets_data);
?>
<!doctype php>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Designs</title>
  <!-- google fonts -->
  <link href="//fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
  <link href="//fonts.googleapis.com/css2?family=Allerta+Stencil&display=swap" rel="stylesheet">
  <!-- google fonts -->
  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style-starter.css">
  <!-- Template CSS -->
</head>

<body>
  <!--header-->
  <header id="site-header" class="fixed-top">
    <div class="container">
      <nav class="navbar navbar-expand-lg stroke">
        <h1><a class="navbar-brand mr-lg-5" href="home.php">
            Pro<span>E</span>ngineer
          </a></h1>
        <!-- if logo is image enable this   
      <a class="navbar-brand" href="#home.php">
          <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
      </a> -->
        <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
          data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
          aria-label="Toggle navigation">
          <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
          <span class="navbar-toggler-icon fa icon-close fa-times"></span>
          </span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="features.php">Features</a>
            </li>
     
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="logout-user.php">Sign Out</a>
            </li>
          
          </ul>
        </div>
        <!-- toggle switch for light and dark theme -->
        <div class="mobile-position">
          <nav class="navigation">
            <div class="theme-switch-wrapper">
              <label class="theme-switch" for="checkbox">
                <input type="checkbox" id="checkbox">
                <div class="mode-container">
                  <i class="gg-sun"></i>
                  <i class="gg-moon"></i>
                </div>
              </label>
            </div>
          </nav>
        </div>
        <!-- //toggle switch for light and dark theme -->
      </nav>
    </div>
  </header>
  <!-- //header -->

 
  <!--/services-->
  <section class="w3l-services1">
    <div id="content-with-photo4-block" class="py-5">
      <div class="container py-md-5">
        <div class="header-section text-center mb-5">
          <h6 class="sub-title"> House Designs</h6>
          <h3 class="hny-title">
            Available Designs
          </h3>
        </div>
        <div class="cwp4-two row">
          <div class="cwp4-image col-lg-4 col-md-6 mt-4">
            <div class="grids4-info">
              <a href="#"><img src="million/<?= $budget['picture1'] ?>" class="img-fluid" alt=""></a>
              <div class="info-bg">
                <h5><a href="#"></a></h5>
                <span class="price">MWK <?= $budget['price1'] ?>.00</span>
                <p>This is one of the design for your chosen budget. Click below to continue.</p>
                <ul>
                  <li><span class="fa fa-bed"></span> 3</li>
                  <li><span class="fa fa-bath"></span> 3</li>
                  <li><span class="fa fa-share-square-o"></span> 1200 sq ft</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="cwp4-image col-lg-4 col-md-6 mt-4">
            <div class="grids4-info">
              <a href="#"><img src="million/<?= $budget['picture2'] ?>" class="img-fluid" alt=""></a>
              <div class="info-bg">
                <h5><a href="#"></a></h5>
                <span class="price">MWK <?= $budget['price2'] ?>.00</span>
                <p>This is one of the design for your chosen budget. Click below to continue.</p>
                <ul>
                  <li><span class="fa fa-bed"></span> 3</li>
                  <li><span class="fa fa-bath"></span> 3</li>
                  <li><span class="fa fa-share-square-o"></span> 1200 sq ft</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="cwp4-image col-lg-4 col-md-6 mt-4">
            <div class="grids4-info">
              <a href="#"><img src="million/<?= $budget['picture3'] ?>" class="img-fluid" alt=""></a>
              <div class="info-bg">
                <h5><a href="#"></a></h5>
                <span class="price">MWK <?= $budget['price3'] ?>.00</span>
                <p>This is one of the design for your chosen budget. Click below to continue.</p>
                <ul>
                  <li><span class="fa fa-bed"></span> 3</li>
                  <li><span class="fa fa-bath"></span> 3</li>
                  <li><span class="fa fa-share-square-o"></span> 1200 sq ft</li>
                </ul>
              </div>
            </div>
          </div>

        </div>
      </div>

    </div>

<div id="continue">
<button type="submit" class="btn btn-style btn-primary"><a href="booking.php">Continue</a></button>
</div>

  </section>
  <!--//services-->
  <!--/w3l-footer-29-main-->
  <footer>
    <!-- footer -->
    <section class="w3l-footer">
      <div class="w3l-footer-16-main py-5">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 column">
              <div class="row">
                <div class="col-md-4 column">
                  <h3>Company</h3>
                  <ul class="footer-gd-16">
                    <li><a href="home.php">Home</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="services.php">Services</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                  </ul>
                </div>
                <div class="col-md-4 column mt-md-0 mt-4">
                  <h3>Useful Links</h3>
                  <ul class="footer-gd-16">
                    <li><a href="#url">Offers</a></li>
                    <li><a href="#url">Our Branches</a></li>
                    <li><a href="#url">Latest Media</a></li>
                    <li><a href="about.php">About Company</a></li>
                    <li><a href="#url">Our Packages</a></li>
                  </ul>
                </div>
                <div class="col-md-4 column mt-md-0 mt-4">
                  <h3>Our Services</h3>
                  <ul class="footer-gd-16">
                    <li><a href="#url">Privacy Policy</a></li>
                    <li><a href="#url">Our Terms</a></li>
                    <li><a href="services.php">Services</a></li>
                    <li><a href="#">Landing Page</a></li>
                    <li><a href="#url">Our Agents</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-12 column pl-lg-5 column4 mt-lg-0 mt-5">
              <h3>Newsletter </h3>
              <div class="end-column">
                <h4>Get latest updates and offers.</h4>
                <form action="#" class="subscribe" method="post">
                  <input type="email" name="email" placeholder="Email Address" required="">
                  <button type="submit">Go</button>
                </form>
                <p>Sign up for our latest news & articles. We won’t give you spam mails.</p>
              </div>
            </div>
          </div>
          <div class="d-flex below-section justify-content-between align-items-center pt-4 mt-5">
            <div class="columns text-lg-left text-center">
              <p>&copy; 2020 Homish. All rights reserved.Design by <a href="https://w3layouts.com/" target="_blank">
                  W3Layouts</a>
              </p>
            </div>
            <div class="columns-2 mt-lg-0 mt-3">
              <ul class="social">
                <li><a href="#facebook"><span class="fa fa-facebook" aria-hidden="true"></span></a>
                </li>
                <li><a href="#linkedin"><span class="fa fa-linkedin" aria-hidden="true"></span></a>
                </li>
                <li><a href="#twitter"><span class="fa fa-twitter" aria-hidden="true"></span></a>
                </li>
                <li><a href="#google"><span class="fa fa-google-plus" aria-hidden="true"></span></a>
                </li>
                <li><a href="#github"><span class="fa fa-github" aria-hidden="true"></span></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <!-- move top -->
      <button onclick="topFunction()" id="movetop" title="Go to top">
        <span class="fa fa-angle-up"></span>
      </button>
      <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function () {
          scrollFunction()
        };

        function scrollFunction() {
          if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.getElementById("movetop").style.display = "block";
          } else {
            document.getElementById("movetop").style.display = "none";
          }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
          document.body.scrollTop = 0;
          document.documentElement.scrollTop = 0;
        }
      </script>
      <!-- //move top -->
      <script>
        $(function () {
          $('.navbar-toggler').click(function () {
            $('body').toggleClass('noscroll');
          })
        });
      </script>
    </section>
    <!-- //footer -->
  </footer>
  <!--//w3l-footer-29-main-->
  <!-- Template JavaScript -->
  <script src="assets/js/jquery-3.3.1.min.js"></script>
  <script src="assets/js/theme-change.js"></script>
  <!--/MENU-JS-->
  <script>
    $(window).on("scroll", function () {
      var scroll = $(window).scrollTop();

      if (scroll >= 80) {
        $("#site-header").addClass("nav-fixed");
      } else {
        $("#site-header").removeClass("nav-fixed");
      }
    });

    //Main navigation Active Class Add Remove
    $(".navbar-toggler").on("click", function () {
      $("header").toggleClass("active");
    });
    $(document).on("ready", function () {
      if ($(window).width() > 991) {
        $("header").removeClass("active");
      }
      $(window).on("resize", function () {
        if ($(window).width() > 991) {
          $("header").removeClass("active");
        }
      });
    });
  </script>
  <!--//MENU-JS-->

  <script src="assets/js/bootstrap.min.js"></script>

</body>

</html>