<?php 
include('configuration/base_url.php');
include('configuration/db_config.php');

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="keywords" content="Digital marketing agency, Digital marketing company, Digital marketing services">
    <meta name="description" content="Jano creative multipurpose is a beautiful website template designed for SEO & Digital Agency websites.">
        <meta property="og:site_name" content="Jano">
        <meta property="og:url" content="https://heloshape.com/">
        <meta property="og:type" content="website">
        <meta property="og:title" content="Jano - Creative Multipurpose Bootstrap 5 Template">
    <meta name='og:image' content='images/assets/ogg.png'>
    <!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- For Resposive Device -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- For Window Tab Color -->
    <!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="#1d2b40">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#1d2b40">
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#1d2b40">
    <title>Snapshots | Dynamic Gallery</title>
    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="56x56" href="images/fav-icon/icon.png">
    <!-- Main style sheet -->
    <link rel="stylesheet" type="text/css" href="css/style.css" media="all">
    <!-- responsive style sheet -->
    <link rel="stylesheet" type="text/css" href="css/responsive.css" media="all">

    <!-- Fix Internet Explorer ______________________________________-->
    <!--[if lt IE 9]>
      <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
      <script src="vendor/html5shiv.js"></script>
      <script src="vendor/respond.js"></script>
    <![endif]-->  
  </head>

  <body>
    <div class="main-page-wrapper">
      <!-- ===================================================
        Loading Transition
      ==================================================== -->
      <div id="preloader">
        <div id="ctn-preloader" class="ctn-preloader">
          <div class="animation-preloader">
            <div class="icon"><img src="images/logo/logo_01.svg" alt="" class="m-auto d-block" width="40"></div>
            <div class="txt-loading mt-3">
              <span data-text-preloader="J" class="letters-loading">
                J
              </span>
              <span data-text-preloader="A" class="letters-loading">
                A
              </span>
              <span data-text-preloader="N" class="letters-loading">
                N
              </span>
              <span data-text-preloader="O" class="letters-loading">
                O
              </span>
            </div>
          </div>  
        </div>
      </div>



      <!-- 
      =============================================
        Theme Main Menu
      ============================================== 
      -->
      <header class="theme-main-menu sticky-menu theme-menu-eight border-bottom">
        <div class="inner-content position-relative">
          <div class="d-flex align-items-center justify-content-between">
            <div class="logo order-lg-0"><a href="index.html" class="d-block"><img src="images/logo/logo_01.png" alt="" width="95"></a></div>

            <div class="right-widget ms-auto ms-lg-0 d-flex align-items-center order-lg-3">
              <a href="signin.html" class="login-btn-three rounded-circle tran3s me-3">
                <i class="bi bi-person"></i>
              </a>
              <a href="contact-us.html" class="btn-twentyOne fw-500 tran3s d-none d-lg-block">Contact us</a>
            </div> <!-- /.right-widget -->

            <nav class="navbar navbar-expand-lg order-lg-2">
              <button class="navbar-toggler d-block d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span></span>
              </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav">
                    <li class="d-block d-lg-none"><div class="logo"><a href="#" class="d-block"><img src="images/logo/logo_01.png" alt="" width="95"></a></div></li>

                      <li class="nav-item dropdown mega-dropdown">
                        <a class="nav-link" href="index.php" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">Home</a></li>

                        <li class="nav-item">
                        <a class="nav-link" href="registration.php" role="button" aria-expanded="false">Signup</a></li>

                        
                        <li class="nav-item">
                        <a class="nav-link" href="login.php" role="button" aria-expanded="false">Login</a></li>

                        

                        
                       
                  </ul>
                  <!-- Mobile Content -->
                  <div class="mobile-content d-block d-lg-none">
                    <div class="d-flex flex-column align-items-center justify-content-center mt-70">
                      <a href="contact-us.html" class="btn-twentyOne fw-500 tran3s">Contact us</a>
                    </div>
                  </div> <!-- /.mobile-content -->
                </div>
            </nav>
          </div>
        </div> <!-- /.inner-content -->
      </header> <!-- /.theme-main-menu -->


      
      <!-- 
      =============================================
        Feature Section Fifty One
      ============================================== 
      -->
      <div class="fancy-feature-fiftyOne position-relative mt-200">
        <div class="container">
          <div class="row">
            <div class="col-lg-7 wow fadeInLeft">
              <div class="title-style-five mb-65 lg-mb-40">
                <div class="sc-title-two d-inline-block fst-italic position-relative">Our Recent Work</div>
                <h2 class="main-title fw-500 tx-dark">Check out our Portfolio.</h2>
              </div>
            </div>
          </div>
        </div> <!-- /.container -->
        <img src="images/lazy.svg" data-src="images/shape/shape_172.svg" alt="" class="lazy-img shapes shape-two">
        <img src="images/lazy.svg" data-src="images/shape/shape_175.svg" alt="" class="lazy-img shapes shape-three">
      </div> <!-- /.fancy-feature-fiftyOne -->



      <!-- 
      =============================================
        Portfolio Gallery Nine
      ============================================== 
      -->
      <div class="portfolio-gallery-nine pt-30">
        <div class="container">
          <ul class="style-none text-center isotop-menu-wrapper g-control-nav-three">
            <li class="is-checked" data-filter="*">All</li>
            <li data-filter=".marketing">Marketing</li>
            <li data-filter=".application">Application</li>
            <li data-filter=".design">Design</li>
            <li data-filter=".dev">Development</li>
          </ul>

          <div id="isotop-gallery-wrapper" class="grid-2column pt-90 lg-pt-50">
            <div class="grid-sizer"></div>

            <?php 

              $getImages = mysqli_query($config,"SELECT * FROM image_deck");
              while($row = mysqli_fetch_assoc($getImages))
              {
                echo '<div class="'.$row['image_class'].'">';
                echo '<div class="portfolio-block-seven mb-70 lg-mb-40">';
                echo '<div class="img-meta"><img src="'.$row['gallery_image'].'" alt="" class="w-100 tran5s"></div>';
                echo '<div class="caption pt-20">';
                echo '<span class="tag fst-italic position-relative">"'.$row['image_title'].'"</span>';
                echo ' <h6><a href="#" class="pj-title">"'.$row['image_subtitle'].'"</a></h6>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
              }


            ?>




          </div>
        </div> <!-- /.container -->
      </div> <!-- /.portfolio-gallery-nine -->




      <!--
      =====================================================
        Fancy Short Banner Sixteen
      =====================================================
      -->
      <div class="fancy-short-banner-sixteen mt-130 lg-mt-80 wow fadeInUp">
        <div class="container">
          <div class="bg-wrapper pt-65 pb-65 lg-pt-40 lg-pb-40">
            <div class="row">
              <div class="col-xl-10 col-md-11 m-auto">
                <div class="row align-items-center">
                  <div class="col-lg-6">
                    <div class="text-wrapper text-center text-lg-start md-pb-30">
                      <div class="sc-title fs-18 pb-10">Have Any Project?</div>
                      <h2 class="main-title fw-500 text-white m0">Don’t hesitate to send us message.</h2>
                    </div>
                  </div>
                  <div class="col-lg-5 ms-auto text-center text-lg-end">
                    <a href="contact-us.html" class="btn-twentyOne fw-500 tran3s">Get Started Today!</a>
                  </div>
                </div>
              </div>
            </div>
          </div> <!-- /.bg-wrapper -->
        </div>
      </div> <!-- /.fancy-short-banner-sixteen -->


    


      <!--
      =====================================================
        Footer
      =====================================================
      -->
      <div class="footer-style-eleven theme-basic-footer position-relative">
        <div class="container">
          <div class="row justify-content-between">
            <div class="col-xl-2 footer-intro mb-40">
              <div class="logo"><a href="index.html"><img src="images/logo/logo_01.png" alt="" width="95"></a></div>
            </div>
            <div class="col-lg-2 col-sm-4 mb-30">
              <h5 class="footer-title tx-dark fw-normal">Links</h5>
              <ul class="footer-nav-link style-none">
                <li><a href="index.html">Home</a></li>
                <li><a href="pricing.html">Pricing</a></li>
                <li><a href="about-v1.html">About us</a></li>
                <li><a href="service-v1.html">Service</a></li>
                <li><a href="blog-v1.html">Blog</a></li>
              </ul>
            </div>
            <div class="col-lg-2 col-sm-4 mb-30">
              <h5 class="footer-title tx-dark fw-normal">Support</h5>
              <ul class="footer-nav-link style-none">
                <li><a href="service-details.html">Item Support</a></li>
                <li><a href="service-details.html">Forum</a></li>
                <li><a href="service-details.html">Report Abuse</a></li>
                <li><a href="service-details.html">Live</a></li>
              </ul>
            </div>
            <div class="col-xl-2 col-lg-3 col-sm-4 mb-30">
              <h5 class="footer-title tx-dark fw-normal">PRODUCT</h5>
              <ul class="footer-nav-link style-none">
                <li><a href="service-details.html">Health Insurance Plans</a></li>
                <li><a href="service-details.html">Insurance Plans</a></li>
                <li><a href="service-details.html">Car Insurance</a></li>
                <li><a href="service-details.html">Investment</a></li>
                <li><a href="service-details.html">Mediclaim Policy</a></li>
                <li><a href="service-details.html">Others</a></li>
              </ul>
            </div>
            <div class="col-xl-4 col-lg-5 mb-30 ps-xxl-5 form-widget">
              <h5 class="footer-title tx-dark fw-normal">Newslettert</h5>
              <h6 class="pt-15 pb-20 md-pt-10">Join our newsletter</h6>
              <form action="#" class="position-relative">
                <input type="email" placeholder="Enter your email">
                <button class="tran3s fw-500 position-absolute">Sign Up</button>
              </form>
              <div class="fs-14 mt-10 opacity-75">We only send interesting and relevant emails.</div>
            </div>
          </div>
        </div> <!-- /.container -->

        <div class="container">
          <div class="bottom-footer">
            <div class="row">
              <div class="col-lg-4 order-lg-0 mt-15">
                <ul class="d-flex justify-content-center justify-content-lg-start footer-nav style-none">
                  <li><a href="faq.html">Privacy &amp; Terms.</a></li>
                  <li><a href="contact-us.html">Contact Us</a></li>
                </ul>
              </div>
              <div class="col-lg-4 order-lg-2 mt-15">
                <ul class="d-flex justify-content-center justify-content-lg-end social-icon style-none">
                  <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                  <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                </ul>
              </div>
              <div class="col-lg-4 order-lg-1 mt-15">
                <p class="copyright text-center m0">Copyright &copy; <?php echo date('Y') ?> AIDCOM IT SOLUTIONS.</p>
              </div>
            </div>
          </div> <!-- /.bottom-footer -->
        </div> <!-- /.container -->
        <img src="images/lazy.svg" data-src="images/shape/shape_173.svg" alt="" class="lazy-img shapes shape-one">
      </div> <!-- /.footer-style-eleven -->


      <button class="scroll-top">
        <i class="bi bi-arrow-up-short"></i>
      </button>
      
      


    <!-- Optional JavaScript _____________________________  -->

      <!-- jQuery first, then Bootstrap JS -->
      <!-- jQuery -->
    <script src="vendor/jquery.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- WOW js -->
    <script src="vendor/wow/wow.min.js"></script>
    <!-- Slick Slider -->
    <script src="vendor/slick/slick.min.js"></script>
    <!-- Fancybox -->
    <script src="vendor/fancybox/dist/jquery.fancybox.min.js"></script>
    <!-- Lazy -->
      <script src="vendor/jquery.lazy.min.js"></script>
      <!-- js Counter -->
    <script src="vendor/jquery.counterup.min.js"></script>
    <script src="vendor/jquery.waypoints.min.js"></script>
    <!-- isotop -->
    <script  src="vendor/isotope.pkgd.min.js"></script>
    <!-- validator js -->
      <script src="vendor/validator.js"></script>

    <!-- Theme js -->
    <script src="js/theme.js"></script>
    </div> <!-- /.main-page-wrapper -->
  </body>
</html>