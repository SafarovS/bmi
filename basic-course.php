 <?php include 'include/connect.php';
    session_start();
    if ($_SESSION['til']="uz") 
    if (isset($_GET['til'])) {
    $_SESSION['til']=$_GET['til'];
  }
    include 'include/'.$_SESSION['til'].".php"; 
    
    if (isset($_SESSION['unique_id']) && isset($_SESSION['uname'])) {

    if (isset($_GET['curs_id'])) {
      $curs_id= $_GET['curs_id'];
      $sql1="SELECT * FROM course WHERE curs_id =$curs_id";
      $res1=mysqli_query($db, $sql1);
      $row1=mysqli_fetch_assoc($res1);                  
      if ($curs_id= $row1['curs_id']) {
      
    
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>basic-courses</title>
	<?php include 'include/header.php'; ?>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

</head>
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
 
   
	
      <div class="container">
        <div class="d-flex align-items-center">
          <?php include 'include/logo.php'; ?>
          <div class="mr-auto">
           
          </div>
          <div class="ml-auto">
            <div class="social-wrap mt-2">
              <a href="#"><span class="icon-facebook"></span></a>
              <a href="#"><span class="icon-telegram"></span></a>
              <a href="#"><span class="icon-youtube-play"></span></a>

             
            </div>
          </div>
         
        </div>
      </div>
                     
   
<div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" id="course" style="background-image: url('images/bg_1.jpg')">
        <div class="container">
          <div class="row align-items-end">
            <div class="col-lg-12 text-center">
              <h2 class="mb-0 "><?php echo $row1['curs_name'] ?></h2>
              <p><?php echo $row1['curs_title'] ?></p>
            </div>
          </div>
        </div>
      </div> 

      <div class="custom-breadcrumns border-bottom">
      <div class="container">
        <a href="index.php"><?=$data['nav1'] ?></a>
        <span class="mx-3 icon-keyboard_arrow_right"></span>
        <a href="personal.php"><?=$data['nav2'] ?></a>
        <span class="mx-3 icon-keyboard_arrow_right"></span>
        <span class="current"><?php echo $row1['curs_name'] ?></span>
      </div>
    </div>

     <div class="section">
        <div class="contanr">
            <div class="row ">
                  <div>
                    <div class="d-block d-lg-none strelka shadow" id="strl">
                      <form name="f2">
                        <input type="checkbox" class="check" id="nav" name="hanburger" style="display: none;">
                      <label for="nav">
                        <span class=" icon-keyboard_arrow_right" id="icon1"></span>
                        <span class=" icon-keyboard_arrow_left" id="icon0"></span>
                      </label>
                      </form>
                    </div>
                  </div>
                 <div class=" bg-white "  id="list-lsn">
                     <?php 
                     $sql="SELECT * FROM lessons LEFT JOIN course ON lessons.lesson_id = course.curs_id WHERE(lesson_id = {$curs_id}) ORDER BY lsn_id";
                     $result= mysqli_query($db, $sql);
                      ?>
                  <ul class="gradient-list " >
                    <?php if (mysqli_num_rows($result) > 0) {
                      while ($row = mysqli_fetch_array($result)) {
                      ?>
                      <li>
                      	<video src="127.0.0.1-admin/videos/<?php echo $row['video'] ?>" class="video-lst" hidden ></video>
                      	<span class="icon-play-circle"> <?php echo $row['lsn_number'] ?></span>
                      	<sapan class="lst-title"><?php echo $row['theme'] ?></sapan>
                      </li>
                     
                      <?php }
                    } 
                    ?>
                    
                  </ul>

                     
                </div>

                <div class="content bg-light  shadow">
                  <div class="container">
                    <?php 
                    $sql="SELECT * FROM lessons LEFT JOIN course ON lessons.lesson_id = course.curs_id WHERE(lesson_id = {$curs_id})   ORDER BY `lsn_number` ASC LIMIT 1";
                     $result= mysqli_query($db, $sql);
                     if (mysqli_num_rows($result) > 0) {
                      while ($row = mysqli_fetch_assoc($result)) {
                     ?>
                    <div class="row align-items-center content-lsn  " >
                      
			<span class="text-center mt-5 center viedo-title"> <?php echo $row['theme']; ?></span>
			
  <div class="container1 show-controls mt-5">
  	<li class="options center" style="position: absolute;">
  		<i class="fab fa-youtube"></i>
  	</li>
    <div class="wrapper">
            <div class="video-timeline">
                <div class="progress-area">
                    <span>00:00</span>
                    <div class="progress-bar"></div>
                </div>
            </div>
            <ul class="video-controls">
                <li class="options left">
                    <button class="volume"><i class="fa-solid fa-volume-high"></i></button>
                    <input type="range" min="0" max="1" step="any">
                    <div class="video-timer">
                        <p class="current-time">00:00</p>
                        <p class="separator"> / </p>
                        <p class="video-duration">00:00</p>
                    </div>
                </li>
                <li class="options center">
                    <button class="skip-backward"><i class="fas fa-backward"></i></button>
                    <button class="play-pause"><i class="fas fa-play"></i></button>
                    <button class="skip-forward"><i class="fas fa-forward"></i></button>
                </li>
                <li class="options right">
                    <div class="playback-content">
                        <button class="playback-speed"><span class="material-symbols-rounded">slow_motion_video</span></button>
                        <ul class="speed-options">
                            <li data-speed="2">2x</li>
                            <li data-speed="1.5">1.5x</li>
                            <li data-speed="1" class="active">Normal</li>
                            <li data-speed="0.75">0.75x</li>
                            <li data-speed="0.5">0.5x</li>
                        </ul>
                    </div>
                    <button class="pic-in-pic"><span class="material-icons">picture_in_picture_alt</span></button>
                    <button class="fullscreen"><i class="fa-solid fa-expand"></i></button>
                </li>
            </ul>
        </div>
    	
     <video src="127.0.0.1-admin/videos/<?php echo $row['video'] ?>" class="main-vedio"></video>   
  </div>
                         
  	<div class="center"><a href="127.0.0.1-admin/files/<?php echo $row['code_project'] ?>"></a></div>

                      </div>
                      
                      <?php } }else{echo "<center> <h1 class='text-danger '>Kechirasiz ushbu kursda hali dars mavjud emas!!</h1></center>";}?>
                    </div>
                  </div>
                </div>
                

            </div>
        </div>
    </div>
    <script src="js/vedio.js"></script>
 <?php include 'include/js.php'; ?>   
<?php include 'include/footer.php'; ?>
</body>
</html>
<?php 
  }else{
  header("Location: personal.php");
  exit();
  }
}
  }else{
  header("Location: personal.php");
  exit();
  }

 ?>
