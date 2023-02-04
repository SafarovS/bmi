<?php 
require 'include/connect.php';
   session_start();
  if ($_SESSION['til']="uz") 
  if (isset($_GET['til'])) {
    $_SESSION['til']=$_GET['til'];
  }
    include 'include/'.$_SESSION['til'].".php";
    ?>
<!DOCTYPE html>
<html lang="en">
<!-- // header site-->
<?php include 'include/header.php'; ?>
<!-- // header site-->
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

  <div class="site-wrap" id="home">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
<!-- // top site-->
<div class="py-2 bg-light ">
      <div class="container ">
        <div class="row align-items-center ">
          <div class="col-lg-6  d-lg-block ">
            <a href="#" class="small mr-3"><span class="icon-phone2 mr-2"></span> 10 20 123 456</a> 
            <a href="#" class="small mr-3"><span class="icon-envelope-o mr-2"></span> info@mydomain.com</a> 
          </div>
                            
            <div class="col-lg-4 text-right ">
            <a href="login.php?<?php echo $_SESSION['til']; ?>" class="small mr-3"><span class="icon-unlock-alt"></span> <?=$data['login'] ?></a>
            <a href="register.php" class="small btn btn-primary px-2 py-2 rounded-0"><span class="icon-users"></span> <?=$data['regstr'] ?></a>
          </div>
          
        </div>
      </div>
    </div>
<!-- // top site-->
<!-- // header nav begin site-->
 <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="d-flex align-items-left">
         <?php include 'include/logo.php'; ?>
          <div class="mr-auto">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li class="navbar-nav">
                  <a href="#index.php" class="nav-link text-left"><?=$data['nav1'] ?></a>
                </li>
                <li class="has-children ">
                  <a href="#about" class="nav-link text-left"><?=$data['abaut'] ?></a>
                  <ul class="dropdown">
                    <li>
                      <a href="#teachers" class="nav-link text-left"><?=$data['teachers'] ?></a>
                    </li>
                     <li>
                    <a href="#why-works" class="nav-link text-left"><?=$data['nav5'] ?></a>
                    </li>
                    <li>
                    <a href="#popular-course" class="nav-link text-left"><?=$data['nav6'] ?></a>
                    </li>
                  </ul>
                </li>
                <li>
                  <a href="#course" class="nav-link text-left"><?=$data['nav3'] ?></a>
                </li>
                    <li>
                    <a href="#news" class="nav-link text-left"><?=$data['nav7'] ?></a>
                    </li>
                    <li>
                    <a href="#contact" class="nav-link text-left"><?=$data['nav4'] ?></a>
                    </li>
                    <li>
                          
                    </li> 
                    </ul>                                                                                                          
            </nav>

          </div>
          <!-- // header icons begin site-->
           <?php include 'include/icon.php'; ?>

         <!-- // header icons end site-->
        </div>
                        <div class="til">
                          <div class="dropdown  col-md-1   d-flex">
                            
                              <a href="#" class="dropdown" data-toggle="dropdown"><span class="icon-globe mr-2"></span><?=$data['til'] ?></a>
                              <ul class="dropdown-menu ">
                               <li class=" ml-2"><a href="?til=uz" class="nav-link text-left">O'zbekcha</a></li>
                               <li class=" ml-2"><a href="?til=ru" class="nav-link text-left">Русский</a></li>
                               <li class="ml-2"><a href="?til=en" class="nav-link text-left">English</a></li>    
                              </ul>
                          </div>
                        </div>  
      </div>

    </header>
<!-- // header nav end site-->
<?php include 'include/carusel.php'; ?>
<?php include 'include/why-works.php'; ?>

<?php include 'include/popular-courses.php'; ?>
<?php include 'include/about.php'; ?>
<?php include 'include/course.php'; ?>
<?php include 'include/news.php'; ?>
<?php include 'include/contact.php'; ?>
    <!-- // 05 - Block -->
  <?php include 'include/footer.php'; ?>

  </div>
  <!-- .site-wrap -->

   
  <!-- loader -->
  <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#51be78"/></svg></div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/jquery.mb.YTPlayer.min.js"></script>
  <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>




  <script src="js/main.js"></script>

</body>

</html>