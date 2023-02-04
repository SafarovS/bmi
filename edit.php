<?php include 'include/connect.php';
session_start();
 include 'include/'.$_SESSION['til'].".php";
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Profil editor</title>
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
  <link href="css/jquery.mb.YTPlayer.min.css" media="all" rel="stylesheet" type="text/css">

  <link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="container mt-5">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-primary ">
                	
              <h5 class="mt-3  d-lg-inline text-white"><?=$data['profledit'] ?></h5>
                	<div class="d-flex">                                                                          
                     <img  class="img-profile rounded-circle border border-white avatar"src="127.0.0.1-admin/upload_profile/<?php echo $_SESSION['avatar']; ?>" style="width: 50px;height:50px;" >
                            
                     </div>
                   
                </div>
                <div class="modal-body">
                	<form action="update.php" method="post" enctype="multipart/form-data" id="form">
                		<div class="row">
                		<div class="col-md-12 form-group">
                            <label for="email"><?=$data['profledit1'] ?></label>
                            <input type="text" name="fname" required id="email" class="form-control form-control-lg" placeholder="<?=$data['profledit4'] ?>">
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="password"><?=$data['profledit2'] ?></label>
                            <input  id="password" name="lname"  type="text" class="form-control form-control-lg" placeholder="<?=$data['profledit5'] ?>">
                        </div>
                        <input type="file" id="f" name="f1" style="display: none;">
                	</div>
                	<div class="modal-header  d-flex ">
                    <label for="f" class="btn btn-primary btn-lg form-control-lg  icon-cloud-upload" > <?=$data['profledit3'] ?></label>
                   
                    </div>
                </form>
                	<?php  if (isset($_GET['error'])) {?>
                <div class="alert alert-danger" style="text-align: center;"> 
                <i class="icon-error" style="font-size: 3rem;"></i>
                 <h3> <?php echo $_GET['error']; ?></h3>
                </div>
                 <?php } ?>
            </div>
        </div>
    </div>
 						
 						<script type="text/javascript">
                            document.getElementById('f').onchange = function() {
                                document.getElementById('form').submit();
                            }
                        </script>

</body>
</html>