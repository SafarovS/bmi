
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Safarov Academy &mdash; Forgoto path</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


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

    
    <div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('images/bg_1.jpg')">
        <div class="container">
          <div class="row align-items-end justify-content-center text-center">
            <div class="col-lg-7">
              <h2 class="mb-0">Forgoto password</h2>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
            </div>
          </div>
        </div>
      </div> 
    

    <div class="custom-breadcrumns border-bottom">
      <div class="container">
        <a href="index.php">Home</a>
        <span class="mx-3 icon-keyboard_arrow_right"></span>
         <a href="login.php">Login</a>
         <span class="mx-3 icon-keyboard_arrow_right"></span>
        <span class="current">Forgoto password</span>
      </div>
    </div>

    <div class="site-section">
        <div class="container">
          <div class="row justify-content-center col-md-12" >
                <div class="col-md-6 shadow">
                  <h4 class="row justify-content-center text-white bg-primary " style="font-family: Times new roman;line-height: 50px;">
                  Forgoto password</h4>
                 
                  <form class="form-group" action="password-reset-system.php" method="post" style="<?php echo $_GET['info']; ?>">
                    <div class="row justify-content-center" >
                       <?php  if (isset($_GET['error'])) {?>
                  <div class="alert alert-danger col-md-10" style="text-align: center;">
                    <h6> <?php echo $_GET['error']; ?></h6>
                  </div>
                        <?php } ?><br><br><br>
                         
                        <div class="col-md-12 form-group">
                          <label for="username">Email</label>
                            <input type="email" name="email" id="username" class="form-control form-control-lg" required placeholder="Write Email adress..." >
                        </div>
                        <div class="col-md-12 form-group">
                          <input type="submit" name="send" value="Send" class="btn btn-primary btn-lg px-5">
                        </div>
                    </div>
                   
                  </form>

                   
                </div>
              </div>
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




  <script src="js/main.js"></script>

</body>

</html>
