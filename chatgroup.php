<?php 
  session_start();
  include_once "include/connect.php";
  if (!isset($_SESSION['group_id'])) {
   header("Location:personal.php");
  }

  
?>
<head>
  <title>Safarov Academy- Chat app</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/bootstrap.min.css">
 

  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/alert.css">
  <link rel="stylesheet" href="css/chat.css">
  <link  href="css/collapse.css" rel="stylesheet">
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

 
</head>
<body class="boddy">
  <div class="wrapper">
    <section class="chat-area">
      <header>
        <?php 
        
          $group_id =  $_GET['groupid'];
          $sql = mysqli_query($db, "SELECT * FROM groups WHERE group_id = {$group_id}");
          if(mysqli_num_rows($sql) > 0){
            $row = mysqli_fetch_assoc($sql);
          }else{
            header("location: personal.php");
          }
        ?>
        
      <a href="personal.php" class="back-icon"><i class="icon-arrow-left"></i></a>
      <a href="#" data-toggle="modal" data-target="#groupModal" class="d-flex">
        <img src="127.0.0.1-admin/upload_profile/<?php echo $row['group_img']; ?>" alt="" style="background: #1cc88a;">
        
        <div class="details">
          <span><?php echo $row['group_name'] ?></span>
        </div>
        </a>
      </header>
      <div class="status"><span><?php echo $row['group_users']?> ta a'zo</span></div>
      
      
      <div class="scrollbar scrollbar-success">
      <div class="chat-box ">
      	
      </div>
      </div>
      <form action="#" class="typing-area">
        <input type="text" class="incoming_id" name="incoming_id" value="<?php echo $user_id; ?>" hidden>
        <input type="text" name="message" class="input-field" placeholder="Type a message here..." autocomplete="off">
        <button ><i class="icon-send" ></i></button>
      </form>
    </section>
  </div>
<div class="modal fade" id="groupModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                  <div class="grpname ">
                    <h5 class="mt-3  d-lg-inline "><?php echo $row['group_name']; ?></h5><br>
                    <span><?php echo $row['group_users']?> ta a'zo</span><br>
                    <span>id: <?php echo $group_id; ?></span>
                  </div>
                    
                  <div class="file-upload-content grpcontent">
                   <img  class="file-upload-image img-profile rounded-circle border border-white grpimg"src="127.0.0.1-admin/upload_profile/<?php echo $row['group_img']; ?>" style="width: 50px;height:50px; background:#1cc88a; " > 
                         
                  </div>

                  </div>
                    
                    <button class="close clsbtn" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                  <i class="icon-user-plus"></i> Lorem, ipsum, dolor sit amet consectetur adipisicing elit. Eos amet possimus ex aperiam error deleniti voluptatem vero natus, sit nostrum quo eius suscipit, consequuntur corrupti atque, corporis eligendi dolorum a.
                </div>
                <div class="modal-footer">
                  <!--<span class="icon-camera" onclick="$('.file-upload-input').trigger( 'click' )"></span> <input class="file-upload-input d-none" type='file' onchange="readURL(this);" accept="image/*" id="file"  name="f1" />  -->
                </div>
            </div>
        </div>
    </div>
  <script src="js/chatgr.js"></script>
  <?php include 'include/js.php'; ?>
</body>
</html>
