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
      <header class="theme-main-menu sticky-menu theme-menu-eight">
        <div class="inner-content position-relative">
          <div class="d-flex align-items-center justify-content-between">
            <div class="logo order-lg-0"><a href="index.html" class="d-block"><img src="images/logo/logo_01.png" alt="" width="95"></a></div>
            <a href="index.php" class="go-back-btn fw-500 tran3s">Go to home</a>
          </div>
        </div> <!-- /.inner-content -->
      </header> <!-- /.theme-main-menu -->


      <!-- 
      =============================================
        User Data Page
      ============================================== 
      -->
      <div class="user-data-section d-flex align-items-center justify-content-center flex-column position-relative">
        <div class="form-wrapper position-relative m-auto">
          <div class="text-center">
            <h2 class="tx-dark mb-30 lg-mb-10">Registration</h2>
            <p class="fs-20 tx-dark">Have an account? <a href="login.php">Login Here</a></p>
          </div>

          <form action="#" class="user-data-form mt-40 lg-mt-30" method="POST" enctype="multipart/form-data">
            <div class="row">

              <div class="col-12">
                <div class="input-group-meta mb-25">
                  <label>Name</label>
                  <input type="text" name="username">
                </div>
              </div>

              <div class="col-12">
                <div class="input-group-meta mb-25">
                  <label>Email</label>
                  <input type="email" name="useremail">
                </div>
              </div>

              <div class="col-12">
                <div class="input-group-meta mb-25">
                  <label>Contact No.</label>
                  <input type="number" name="usercontact">
                </div>
              </div>

              <div class="col-12">
                <div class="input-group-meta mb-25">
                  <label>Password</label>
                  <input type="password" class="pass_log_id" name="userpassword">
                  <span class="placeholder_icon"><span class="passVicon"><img src="images/icon/icon_151.svg" alt=""></span></span>
                </div>
              </div>

               <div class="col-12">
                <div class="form-control mb-25">
                  <label>User Avatar</label>
                  <input type="file" class="form-control mb-25" name="useravatar">
                  </div>
              </div>

             
              <div class="col-12">
                <button class="btn-twentyTwo w-100 fw-500 tran3s text-uppercase mt-30" type="submit" name="registerUser">Sign Up</button>
              </div>
            </div>
          </form>
        </div>


        <p class="mt-auto pt-50">Copyright &copy; <?php echo date('Y') ?> AIDCOM IT SOLUTIONS.</p>
        <img src="images/lazy.svg" data-src="images/assets/ils_11.png" alt="" class="lazy-img illustration-one wow fadeInRight">
        <img src="images/lazy.svg" data-src="images/assets/ils_12.png" alt="" class="lazy-img illustration-two wow fadeInLeft">
      </div> <!-- /.fancy-feature-fiftyOne -->


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

<?php 

      if(isset($_POST['registerUser']))
      {
        $adminName =  $_POST['username'];
        $adminEmail = $_POST['useremail'];
        $adminContact = $_POST['usercontact'];
        $adminPassword = $_POST['userpassword'];
        $adminRole = "Gallery User";

        // handling user profile here
        $targetFolder = "uploads/";
        $fileOrgName = $_FILES['useravatar']['name'];
        $fileTempName = $_FILES['useravatar']['tmp_name'];
        $imageaddress = $base_url.$targetFolder.$fileOrgName;
        // handling user profile here

        $checkEmail = mysqli_query($config,"SELECT admin_email FROM user_registration WHERE admin_email='$adminEmail'");

        $checkContact = mysqli_query($config,"SELECT admin_contact FROM user_registration WHERE admin_contact='$adminContact'");

        if(mysqli_num_rows($checkEmail)>0)
        {
          echo "<script>alert('User with the same Email already Exist')
          window.location.href='login.php';
          </script>";
          
        }
        elseif(mysqli_num_rows($checkContact)>0)
        {
          echo "<script>alert('User with the same Contact already Exist')
          window.location.href='login.php';
          </script>";
          
        }
        else
        {
          $registerUser = mysqli_query($config,"INSERT INTO user_registration(admin_name,admin_email,admin_contact,admin_password,admin_role,admin_avatar) VALUES('$adminName','$adminEmail','$adminContact','$adminPassword','$adminRole','$imageaddress')");
          if($registerUser)
          {
            echo "<script>alert('User Successfully Registered with Snapshots.')
            window.location.href='login.php';
            </script>";
            move_uploaded_file($fileTempName,$targetFolder.$fileOrgName);
          
          }
        }
      }


?>