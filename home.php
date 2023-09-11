<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<?php
  require 'database.php';

  $fetch_data = "SELECT * FROM budget";
  $budgets_data = mysqli_query($connection, $fetch_data)
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Home</title>
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
        <h1><a class="navbar-brand mr-lg-5" href="index.php">
          Pro<span>E</span>ngineer
          </a></h1>
        <!-- if logo is image enable this   
      <a class="navbar-brand" href="#index.php">
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
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
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
           
            <div class="search-right">
              <a href="#search" title="search"><span class="fa fa-search" aria-hidden="true"></span></a>
              <!-- search popup -->
              <div id="search" class="pop-overlay">
                <div class="popup">

                  <form action="#" method="GET" class="search-box">
                    <input type="search" placeholder="Enter Keyword" name="search" required="required" autofocus="">
                    <button type="submit" class="btn">Search Now</button>
                  </form>

                </div>
                <a class="close" href="#close">×</a>
              </div>
              <!-- /search popup -->
            </div>
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
  <!-- main-slider -->
  <section class="w3l-main-slider" id="home">
    <div class="companies20-content">
      <div class="owl-one owl-carousel owl-theme">
        <div class="item">
          <li>
            <div class="slider-info banner-view bg bg2">
              <div class="banner-info">
                <div class="container">
                  <div class="banner-info-bg text-left">
                    <p>Better living</p>
                    <h5>Progressive spaces for a better living</h5>
                    <a href="about.php" class="btn btn-white">Read More</a>
                  </div>
                </div>
              </div>
              <div class="banhny-w3grids">
                <div class="banhny-w3grids-1">
                  <h4 class="number-b">1</h4>
                </div>
                <div class="banhny-w3grids-1">
                  <h4><a href="#" class="hnys-title">The better way to build a real house.</a></h4>
                </div>
              </div>
            </div>
          </li>
        </div>
        <div class="item">
          <li>
            <div class="slider-info  banner-view banner-top1 bg bg2">
              <div class="banner-info">
                <div class="container">
                  <div class="banner-info-bg text-left">
                    <p>Dream Home</p>
                    <h5>Everyone Deserves the Opportunity of a House</h5>
                    <a href="about.php" class="btn btn-white">Read More</a>
                  </div>
                </div>
              </div>
              <div class="banhny-w3grids">
                <div class="banhny-w3grids-1">
                  <h4 class="number-b">2</h4>
                </div>
                <div class="banhny-w3grids-1">
                  <h4><a href="#" class="hnys-title">The Only Realtor You Will Ever Want.</a></h4>
                </div>
              </div>
            </div>
          </li>
        </div>
        <div class="item">
          <li>
            <div class="slider-info banner-view banner-top2 bg bg2">
              <div class="banner-info">
                <div class="container">
                  <div class="banner-info-bg text-left">
                    <p>Better living</p>
                    <h5>Progressive spaces for a better living</h5>
                    <a href="about.php" class="btn btn-white">Read More</a>
                  </div>
                </div>
              </div>
              <div class="banhny-w3grids">
                <div class="banhny-w3grids-1">
                  <h4 class="number-b">3</h4>
                </div>
                <div class="banhny-w3grids-1">
                  <h4><a href="#" class="hnys-title">Service You Deserve. People You Trust.</a></h4>
                </div>
              </div>
            </div>
          </li>
        </div>
        <div class="item">
          <li>
            <div class="slider-info banner-view banner-top3 bg bg2">
              <div class="banner-info">
                <div class="container">
                  <div class="banner-info-bg text-left">
                    <p>Dream Home</p>
                    <h5>Everyone Deserves the Opportunity of a House</h5>
                    <a href="about.php" class="btn btn-white">Read More</a>
                  </div>
                </div>
              </div>
              <div class="banhny-w3grids">
                <div class="banhny-w3grids-1">
                  <h4 class="number-b">4</h4>
                </div>
                <div class="banhny-w3grids-1">
                  <h4><a href="#" class="hnys-title">The better way to build real house.</a></h4>
                </div>
              </div>
            </div>
          </li>
        </div>


      </div>
      <a href="#about" scroll="scroll">
        <div class="arrow">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </a>
    </div>
  </section>
  <!-- /main-slider -->
  <!--/grids-->
  <section class="w3l-grids-3 py-5" id="about">
    <div class="container py-md-5">
      <div class="row bottom-ab-grids align-items-center">
        <div class="col-lg-6 bottom-ab-left pr-lg-5">
          <h6 class="sub-title">About Us</h6>
          <h3 class="hny-title">How Engineering project management works</h3>
          <p class="my-3 pr-lg-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur hic odio
            voluptatem
            tenetur consequatur.Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit beatae laudantium
            voluptate rem ullam dolore nisi voluptatibus esse quasi.Integer sit amet mattis quam.</p>
          <a href="about.php" class="btn btn-style btn-secondary mt-4">Read More</a>
        </div>
        <div class="col-lg-6 bottom-ab-right mt-lg-0 mt-5">
          <img src="assets/images/ab1.jpg" class="img-fluid" alt="">
        </div>

      </div>
    </div>
  </section>
  <!--//grids-->
  <!--/services-->

<!-- pricing11 -->
<section class="w3l-pricing-11">
    <div class="pricing11 py-5">
      <div class="container py-md-4">
          <div class="w3l-header mb-md-5 mb-4 text-center">
            <h6 class="sub-title">Select your Budget</h6>
            <h3 class="hny-title">Budget Packages</h3>
          </div>
        <div class="pricing11-content">
        <!-- BUDGET CARD -->
        <?php while($budget = mysqli_fetch_assoc($budgets_data)): ?>
          <div class="column pricing-grid">
            <div class="text-center price-icon">
              <span class="fa fa-home"></span>
            </div>
            <div class="rate">
              <h5><span class="top-align">from</span> <?= $budget['budget_range'] ?> </h5>
            </div>
            <p><?= $budget['description'] ?></p>
            <button class="button"><a href="designs.php?id=<?= $budget['id'] ?>">Choose budget</a></button>
            <div class="text-center">
              
            </div>
            <ul class="points">
              <li><span class="fa fa-check"></span> Foundation</li>
              <li><span class="fa fa-check"></span> Siding / Gutter</li>
              <li><span class="fa fa-check"></span>Roofing</li>
              <li><span class="fa fa-check"></span>Framing</li>
            </ul>
            <div class="text-center pos">	
              
            </div>
          </div>
          <?php endwhile ?>
          <!-- END TAG OF BUDGET CARD -->
          </div>
        
      </div>
    </div>
  </section>
  <!--//services-->
    <!-- stats -->
    <section class="w3l-stats py-5" id="stats">
      <div class="gallery-inner container py-lg-0 py-3">
        <div class="row stats-con pb-lg-3">
          <div class="col-lg-4 col-6 stats_info counter_grid">
            <p class="counter">213</p>
            <h4>Custom House Designs</h4>
          </div>
          <div class="col-lg-4 col-6 stats_info counter_grid1">
            <p class="counter">3</p>
            <h4>Branches</h4>
          </div>
          <div class="col-lg-4 col-6 stats_info counter_grid mt-lg-0 mt-5">
            <p class="counter">1012</p>
            <h4>Visits</h4>
          </div>
  
        </div>
      </div>
    </section>
    <!-- //stats -->

  <!--/grids2-->
  <section class="w3l-how-grids-3 py-5" id="how">
    <div class="container py-md-5">
      <div class="w3l-header mb-md-5 mb-4 text-center">
        <h6 class="sub-title">Our Work</h6>
        <h3 class="hny-title">Check out some of construction work projects</h3>
        <p class="">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
      </div>
      <div class="d-grid grid-col-2 grid-element-9">
        <div class="left-grid-ele-9 grid-bg1">
          <div class="sub-wid-grid-9">
            <h4 class="text-grid-9"><a href="#">Lilongwe</a></h4>
            <p class="sub-para">Perfect City!</p>
           
          </div>
        </div>
        <div class="left-grid-ele-9 grid-bg2">
          <div class="sub-wid-grid-9">
            <h4 class="text-grid-9"><a href="#">Blantyre</a></h4>
            <p class="sub-para">Best Place to live</p>
 
          </div>
        </div>
      </div>
    
    </div>
  </section>
  <!--//grids2-->

<!-- //pricing11 -->
  <!-- testimonials -->
  <section class="w3l-clients" id="clients">
    <!-- /grids -->
    <div class="cusrtomer-layout py-5">
      <div class="container py-lg-4 py-md-3 pb-lg-0">
        <div class="heading text-center mx-auto">
          <h6 class="sub-title text-center">Here’s what they have to say</h6>
          <h3 class="hny-title mb-md-5 mb-4">our clients do the talking</h3>
        </div>
        <!-- /grids -->
        <div class="testimonial-width mt-5">
          <div id="owl-demo1" class="owl-two owl-carousel owl-theme">
            <div class="item">
              <div class="testimonial-content">
                <div class="testimonial">
                  <blockquote>
                    <span class="fa fa-quote-left" aria-hidden="true"></span>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit beatae integer sit amet .Nulla ex nunc, interdum nec egestas nec, dapibus ac mauris. Vivamus id tempor nisl.
                  </blockquote>
                  <div class="testi-des">
                    <div class="test-img"><img src="assets/images/team1.jpg" class="img-fluid" alt="client-img">
                    </div>
                    <div class="peopl align-self">
                      <h3>Rohit Paul</h3>
                      <p class="indentity">Example City</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimonial-content">
                <div class="testimonial">
                  <blockquote>
                    <span class="fa fa-quote-left" aria-hidden="true"></span>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit beatae integer sit amet .Nulla ex nunc, interdum nec egestas nec, dapibus ac mauris. Vivamus id tempor nisl.
                  </blockquote>
                  <div class="testi-des">
                    <div class="test-img"><img src="assets/images/team2.jpg" class="img-fluid" alt="client-img">
                    </div>
                    <div class="peopl align-self">
                      <h3>Shveta</h3>
                      <p class="indentity">Example City</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimonial-content">
                <div class="testimonial">
                  <blockquote>
                    <span class="fa fa-quote-left" aria-hidden="true"></span>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit beatae integer sit amet .Nulla ex nunc, interdum nec egestas nec, dapibus ac mauris. Vivamus id tempor nisl.
                  </blockquote>
                  <div class="testi-des">
                    <div class="test-img"><img src="assets/images/team3.jpg" class="img-fluid" alt="client-img">
                    </div>
                    <div class="peopl align-self">
                      <h3>Roy Linderson</h3>
                      <p class="indentity">Example City</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimonial-content">
                <div class="testimonial">
                  <blockquote>
                    <span class="fa fa-quote-left" aria-hidden="true"></span>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit beatae integer sit amet .Nulla ex nunc, interdum nec egestas nec, dapibus ac mauris. Vivamus id tempor nisl.
                  </blockquote>
                  <div class="testi-des">
                    <div class="test-img"><img src="assets/images/team4.jpg" class="img-fluid" alt="client-img">
                    </div>
                    <div class="peopl align-self">
                      <h3>Mike Thyson</h3>
                      <p class="indentity">Example City</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimonial-content">
                <div class="testimonial">
                  <blockquote>
                    <span class="fa fa-quote-left" aria-hidden="true"></span>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit beatae integer sit amet .Nulla ex nunc, interdum nec egestas nec, dapibus ac mauris. Vivamus id tempor nisl.
                  </blockquote>
                  <div class="testi-des">
                    <div class="test-img"><img src="assets/images/team1.jpg" class="img-fluid" alt="client-img">
                    </div>
                    <div class="peopl align-self">
                      <h3>Rohit Paul</h3>
                      <p class="indentity">Example City</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimonial-content">
                <div class="testimonial">
                  <blockquote>
                    <span class="fa fa-quote-left" aria-hidden="true"></span>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit beatae integer sit amet .Nulla ex nunc, interdum nec egestas nec, dapibus ac mauris. Vivamus id tempor nisl.
                  </blockquote>
                  <div class="testi-des">
                    <div class="test-img"><img src="assets/images/team2.jpg" class="img-fluid" alt="client-img">
                    </div>
                    <div class="peopl align-self">
                      <h3>Shveta</h3>
                      <p class="indentity">Example City</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
      <!-- /grids -->
    </div>
    <!-- //grids -->
  </section>
  <!-- //testimonials -->
  <!-- home page video popup section -->
  <section class="w3l-index5" id="about">
    <div class="new-block py-5">
      <div class="container py-lg-5">
        <div class="middle-section text-center">
          <div class="section-width">
            <h6 class="sub-title text-center">Video</h6>
            <h3 class="hny-title">Success is a project that is always under construction</h3>
            <p class="mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur hic odio voluptatem
              tenetur consequatur.Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit beatae laudantium
              voluptate rem ullam dolore nisi voluptatibus esse quasi.Integer sit amet mattis quam.</p>
          </div>
          <div class="history-info mt-5">
            <div class="position-relative">
              <img src="assets/images/banner3.jpg" class="img-fluid radius-image video-popup-image" alt="video-popup">

              <a href="#small-dialog" class="popup-with-zoom-anim play-view text-center position-absolute">
                <span class="video-play-icon">
                  <span class="fa fa-play"></span>
                </span>
              </a>

              <!-- dialog itself, mfp-hide class is required to make dialog hidden -->
              <div id="small-dialog" class="zoom-anim-dialog mfp-hide">
                <iframe src="https://player.vimeo.com/video/23512331?title=0&byline=0&portrait=0" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
              </div>
            </div>
          </div>

          <!-- dialog itself, mfp-hide class is required to make dialog hidden -->
          <div id="small-dialog" class="zoom-anim-dialog mfp-hide">
            <iframe src="https://player.vimeo.com/video/23512331?title=0&byline=0&portrait=0" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- //home page video popup section -->

  <!--/get -->
  <section class="w3l-grid-quote text-center py-5">
    <div class="container py-3">
      <h6 class="sub-title text-center">Work With Us</h6>
      <h3 class="hny-title mb-md-5 mb-4">Let's start a Project!</h3>
      <a href="contact.php" class="btn btn-style btn-outline-primary">Get in touch</a>
    </div>
  </section>
  <!--//get -->
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
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="features.php">Features</a></li>
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
                    <li><a href="features.php">Features</a></li>
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
              <p>&copy; 2023 ProEngineer. All rights reserved"</a>
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
  <script src="assets/js/owl.carousel.js"></script>
  <!-- script for banner slider-->
  <script>
    $(document).ready(function () {
      $('.owl-one').owlCarousel({
        loop: true,
        margin: 0,
        nav: false,
        responsiveClass: true,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplaySpeed: 1000,
        autoplayHoverPause: false,
        responsive: {
          0: {
            items: 1,
            nav: false
          },
          480: {
            items: 1,
            nav: false
          },
          667: {
            items: 1,
            nav: true
          },
          1000: {
            items: 1,
            nav: true
          }
        }
      })
    })
  </script>
  <!-- //script -->
  <!-- script for tesimonials carousel slider -->
  <script>
    $(document).ready(function () {
      $("#owl-demo1").owlCarousel({
        loop: true,
        margin: 20,
        nav: false,
        responsiveClass: true,
        responsive: {
          0: {
            items: 1,
            nav: false
          },
          736: {
            items: 2,
            nav: false
          },
          1000: {
            items:2,
            nav: false,
            loop: true
          }
        }
      })
    })
  </script>
  <!-- //script for tesimonials carousel slider -->

  <!-- video popup -->
  <script src="assets/js/jquery.magnific-popup.min.js"></script>
  <script>
    $(document).ready(function () {
      $('.popup-with-zoom-anim').magnificPopup({
        type: 'inline',

        fixedContentPos: false,
        fixedBgPos: true,

        overflowY: 'auto',

        closeBtnInside: true,
        preloader: false,

        midClick: true,
        removalDelay: 300,
        mainClass: 'my-mfp-zoom-in'
      });

      $('.popup-with-move-anim').magnificPopup({
        type: 'inline',

        fixedContentPos: false,
        fixedBgPos: true,

        overflowY: 'auto',

        closeBtnInside: true,
        preloader: false,

        midClick: true,
        removalDelay: 300,
        mainClass: 'my-mfp-slide-bottom'
      });
    });
  </script>
  <!-- //video popup -->
  <!-- stats number counter-->
  <script src="assets/js/jquery.waypoints.min.js"></script>
  <script src="assets/js/jquery.countup.js"></script>
  <script>
    $('.counter').countUp();
  </script>
  <!-- //stats number counter -->
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

</php>