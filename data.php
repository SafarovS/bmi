<?php 
require 'include/connect.php';

  
                           $outgoing_id = $_SESSION['id'];                
                           $sql="SELECT * FROM users WHERE NOT id = {$outgoing_id} ORDER BY id DESC";
                            $res=mysqli_query($db,$sql);
                             mysqli_num_rows($res);
                            $users = [];
                             while ($a=mysqli_fetch_assoc($res)) {
                            $users []=$a;
                            } ?>
                            <?php foreach ($users as $user) :?>
                            <a href="chat.php?user_id=<?=$user['unique_id']; ?>" class="nav-link name">
                            <img src="127.0.0.1-admin/upload_profile/<?=$user['avatar']?>" alt="img" class="users">
                            <span><?=$user['fname']. " " .$user['lname']?></span>
                            </a>
                            <?php endforeach;?>

 ?>
 							