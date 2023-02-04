<?php include 'include/connect.php';
    session_start();
    if ($_SESSION['til']="uz") 
    if (isset($_GET['til'])) {
    $_SESSION['til']=$_GET['til'];
  }
    include 'include/'.$_SESSION['til'].".php"; 
 ?>
<?php 

  if (isset($_SESSION['unique_id']) && isset($_SESSION['uname'])) {
  
 
 ?>

                     
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Safarov Academy &mdash; Personal</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
  <link rel="stylesheet" href="fonts/icomoon/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

  
  <link rel="stylesheet" href="css/aos.css">
  <link href="css/jquery.mb.YTPlayer.min.css" media="all" rel="stylesheet" type="text/css">

  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/alert.css">
  <link rel="stylesheet" href="css/collapse.css">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     
  </head> 
 

<body>
 
   
  <div>

  

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <div class="container-fuild">
                  <nav class="navbar navbar-expand navbar-light bg-white topbar  static-top ">
                   <ul class="navbar-nav mr-auto ">
                    <div class=" d-none d-lg-block"><?php include 'include/logo.php'; ?></div>
                     
                   </ul>
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                      <?php include 'include/message-center.php'; ?>
                      <div class="topbar-divider d-none d-sm-block"></div>
                        
                         <?php include 'include/avatar.php'; ?>
                         
                        <?php   
                           $outgoing_id = $_SESSION['id'];                
                           $sql="SELECT * FROM users WHERE NOT id = {$outgoing_id} ORDER BY id DESC";
                            $res=mysqli_query($db,$sql);
                             mysqli_num_rows($res);
                            $users = [];
                             while ($a=mysqli_fetch_assoc($res)) {
                            $users []=$a;
                            } ?>

    <div class="modal fade" id="UserModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-success">
                    <h5 class="modal-title text-white" id="exampleModalLabel"><?=$data['users'] ?></h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span class="text-white" aria-hidden="true">x</span>
                    </button>

                </div>
                <div class="modal-header ">
                <form class=" d-sm-inline-block form-inline mr-auto ml-md-4 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            
                            <input type="search"  class="form-control bg-light border-0 small" placeholder="Search for..."id="filter">
                            
                            <div class="input-group-append">
                                <button class="btn btn-success" type="button">
                                    <i class="icon-search "></i>
                                </button>
                            </div>
                        </div>
                    </form>
                    
                </div> 
                      
                        <div class="container-fuild group ">
                          <ul id="accordion" class="accordion   rounded-top" >
                            <li class="list">
                              <div class="link"><a  class="nav-link" ><img src="images/group.png" alt="" class=" img-profile rounded-circle avatar grp"><span>Create group</span><i class="text-success icon-chevron-down"></i></a>
                              </div>
                                <ul class="submenu">
                                   <div class="col-md-12" id="submenyu">
                                    <form action="controlleer.php" method="post" name="grform">
                                    <input type="hidden" name="create_id" value="<?php echo $_SESSION['unique_id']; ?>">
                                    <input type="text"  name="group_name" class="form-control form-control-lg mt-3 mb-3" placeholder="Enter your group name..">
                                    <input type="submit" name="creategroup" class="btn btn-success create-gr" value="Create Group"> 
                                    </form>
                                    </div>
                                </ul>
                            </li>
                          </ul>
                        </div>        
                       
                           
                <div class="modal-body" id="user-list">
                
                      <nav>

                        <ul class="liveSearchBar">
                          <?php foreach ($users as $user) :?>
                            <li>
                              <a href="chat.php?user_id=<?=$user['unique_id']; ?>" class="nav-link name">
                            <img src="127.0.0.1-admin/upload_profile/<?=$user['avatar']?>" alt="img" class="img-profile rounded-circle avatar">

                            <span><?=$user['fname']. " " .$user['lname']?></span>

                            <div class="status-indicator  bg-<?=$user['color']?> status1" ></div>
                            
                            </a> 
                            
                            </li>
                            
                            <?php endforeach;?> 
                            <center><h6 class="" id="found"><span class=" text-sm text-danger">Ushbu qidiruv bo'yicha boshqa naeja yo'q</span></h6></center>
                        </ul>
                        </nav>
                
                
                </div>
               
            </div>
        </div>
    </div>

                        

                    </ul>
                  </nav>
                </div>
                <!-- End of Topbar -->
                

            </div>
<!-- Begin container fuild-->
     <div class="site-section ftco-subscribe-1 site-blocks-cover pb-4"  style="background-image: url('images/bg_1.jpg'); z-index: 0;">
        <div class="container">
          <div class="row align-items-end">
            <div class="col-lg-12 text-center">
              <h2 class="mb-0 "><?=$data['xush'] ?></h2>
              <p> <?php echo $_SESSION['fname']. " " .$_SESSION['lname']; ?> </p>
            </div>
          </div>
        </div>
      </div> 
    
    <div class="custom-breadcrumns border-bottom">
      <div class="container">
        <a href="index.php"><?=$data['nav1'] ?></a>
        <span class="mx-3 icon-keyboard_arrow_right"></span>
        <span class="current"><?=$data['nav2'] ?></span>
      </div>
    </div>

     <div class="site-section">
                  
        <div class="container">
            <div class="row">
<?php 
            $sql1="SELECT * FROM course";
            $res1=mysqli_query($db, $sql1);
            mysqli_num_rows($res1);
            $users= [];
            while ($row = mysqli_fetch_assoc($res1)) {
            $users[] = $row;
            }
            ?>                     
         <!--Display course--> 
                                <?php foreach ($users as $user ) :?> 
                                
                  <div class="col-lg-4 col-md-6 mb-4" >
                    <div class="course-1-item"style="border: 1px solid gray;">
                        <figure class="thumnail">
                        <a href="basic-course.php?curs_id=<?=$user['curs_id']?>"><img src="127.0.0.1-admin/cursimage/<?=$user['curs_img'] ?>" alt="Image" class="img-fluid"></a>
                       
                        <div class="category"><h3><?=$user['curs_name'] ?></h3></div>  
                        </figure>
                        <div class="course-1-content pb-4">
                        <h2><?=$user['curs_title'] ?></h2>
                        <div class="rating text-center mb-3">
                            <span class="icon-star2 text-warning"></span>
                            <span class="icon-star2 text-warning"></span>
                            <span class="icon-star2 text-warning"></span>
                            <span class="icon-star2 text-warning"></span>
                            <span class="icon-star2 text-warning"></span>
                        </div>
                        <p class="desc mb-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique accusantium ipsam.</p>
                        <p><a href="basic-course.php?curs_id=<?=$user['curs_id']?>" class="btn category text-white rounded-0 px-4 py-2"><?=$data['kir'] ?></a></p>
                        </div>
                    </div>
                </div>
                                <?php endforeach ?>
                

                
                
               
            </div>
        </div>
    </div>           
<!-- End container fulid-->                

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><?=$data['modal'] ?></h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body"><?=$data['modal1'] ?></div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal"><?=$data['yuq'] ?></button>
                    <a class="btn btn-primary" href="logout.php?logout_id=<?php echo $_SESSION['unique_id']; ?>"><?=$data['chiqish'] ?></a>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="profilModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-success ">
                  
              <h5 class="mt-3  d-lg-inline text-white"><?=$data['profledit'] ?></h5>
                                    <div class="file-upload-content">
                                     <img  class="file-upload-image img-profile rounded-circle border border-white avatar"src="127.0.0.1-admin/upload_profile/<?php echo $_SESSION['avatar']; ?>" style="width: 50px;height:50px;" > 
                                     <span class="icon-camera" onclick="$('.file-upload-input').trigger( 'click' )"></span>       
                                    </div>
                                    </div>
                                  
                                    
                <div class="modal-body">
                  <form action="update.php" method="post" enctype="multipart/form-data" id="form">
                    <div class="row">
                    <div class="col-md-12 form-group">
                            <label for="email"><?=$data['profledit1'] ?></label>
                            <input type="text" name="fname" required id="email" value="<?php echo $_SESSION['fname'];?> "class="form-control form-control-lg" >
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="password"><?=$data['profledit2'] ?></label>
                            <input  id="password" name="lname"  type="text" value="<?php echo $_SESSION['lname'];?> " class="form-control form-control-lg" >
                        </div> 
                        <input class="file-upload-input d-none" type='file' onchange="readURL(this);" accept="image/*" id="file"  name="f1" />
                  </div>
                  
                
            </div>
            <div class="modal-footer">
              <button class="btn btn-secondary" type="button" data-dismiss="modal"><?=$data['yuq'] ?></button>
                    <input type="submit" name="update" class="btn btn-success" value="Update">
            </div>
            </form>
        </div>
    </div>
            
                        
    </div>

    <!-- Logout Modal-->
    <a class="scroll-to-top rounded" href="#home">
        <i class="icon-angle-up"></i>
            </a>
<?php include 'include/js.php'; ?>
   <script src="search.js"></script> 
  <script src="js/collapse.js"></script> 
<?php include 'include/footer.php'; ?>
</body>
</html>




<?php 
  }else{
  header("Location: login.php");
  exit();
  }
 ?>
