<?php 
session_start();
    include 'include/'.$_SESSION['til'].".php";
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Safarov Academy &mdash; Register</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">

  <link rel="stylesheet" href="css/jquery.fancybox.min.css">

  <link rel="stylesheet" href="css/bootstrap-datepicker.css">

  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

  <link rel="stylesheet" href="css/aos.css">
  <link href="css/jquery.mb.YTPlayer.min.css" media="all" rel="stylesheet" type="text/css">

  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/mycode.css">
  <link rel="stylesheet" href="css/alert.css">
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
 
</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

  <div class="site-wrap">

    

<?php include 'include/top1.php'; ?>
    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="d-flex align-items-center">
          <?php include 'include/logo.php'; ?>
          <div class="mr-auto">
            
          </div>
          <div class="ml-auto">
            <div class="social-wrap">
              <a href="#"><span class="icon-facebook"></span></a>
              <a href="#"><span class="icon-telegram"></span></a>
              <a href="#"><span class="icon-youtube-play"></span></a>
            </div>
          </div>
         
        </div>
      </div>

    </header>

    <br>
    <br>
    <br>
    <div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('images/bg_1.jpg')">
        <div class="container">
          <div class="row align-items-end justify-content-center text-center">
            <div class="col-lg-7">
              <h2 class="mb-0">Register</h2>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
            </div>
          </div>
        </div>
      </div> 
    

    <div class="custom-breadcrumns border-bottom">
      <div class="container">
        <a href="index.php">Home</a>
        <span class="mx-3 icon-keyboard_arrow_right"></span>
        <span class="current">Register</span>
      </div>
    </div>

   <div class="site-section">
        <div class="container">
      
                  
            
      <form action="controlleer.php" method="post"> 
            <div class="row justify-content-center ">
                <div class="col-md-5 card-body border border-primary regestr-card" >

                 <?php  if (isset($_GET['error'])) {?>
                <div class="alert alert-danger" style="text-align: center;"> 
                <i class="icon-error" style="font-size: 3rem;"></i>
                 <h3> <?php echo $_GET['error']; ?></h3>
                </div>
                 <?php } ?>
                 <?php  if (isset($_GET['info'])) {
                  echo "<script> 
                  Swal.fire(
                    'Good job!',
                    'You clicked the button!',
                    'success'
                  )
                  </script>";
                   
                  } ?>
                 
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="name">First Name</label>
                            <input type="text" name="fname" id="name" required class="form-control form-control-lg">
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="name">Last Name</label>
                            <input type="text" name="lname" id="name" required class="form-control form-control-lg">
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="username">Username</label>
                            <input type="text" name="uname" required id="username"class="form-control form-control-lg">
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" required id="email" class="form-control form-control-lg">
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="password">Password</label>
                            <div class="input-group mb-3">
                            <input  id="password" name="password"  type="password" class="form-control form-control-lg">
                            <i class="icon-eye" id="togglePassword"style="cursor: pointer;position: absolute;top: 35%;right: 1%;"></i>
                            </div>
                        </div>
                       
                    </div>
                  
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <input type="submit" name="register" value="Register" id="regestr" class="btn btn-primary btn-lg form-control py-1 ">
                        </div>
                      </div>
                      <br>
                      <h6><p>Do you have an account?<a href="login.php">Sing In</a></p></h6>

                </div>
            </div>
        </form>
                  
        </div>
    </div>

    

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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  
  <script src="js/main.js"></script>
  
  <script src="js/password.js"></script>
  

</body>

</html>