  <?php
require_once 'include/connect.php';
 session_start();

   if (isset($_POST['register'])) {
    $fname= ($_POST['fname']);
    $lname= ($_POST['lname']);
    $username= ($_POST['uname']);      
    $email= ($_POST['email']);
    $password= ($_POST['password']);
    $unique_id= rand(999999,111111);
    $status= "New";
    $color= "info";
    //Validate 
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location:register.php?error=Email is not valid");
        } else{
        $sql="INSERT INTO users(unique_id,fname,lname,uname,email,password,status,color,vaqt,avatar) VALUES ('$unique_id','$fname','$lname','$username','$email','$password','$status','$color',NOW(),'user.jpg')";
        $result=mysqli_query($db, $sql);
       if ($result) {
         header("Location:register.php?info");
       }else{
        header("Location:register.php?error=Regestration an error");
       }
       }
    }

if (isset($_POST['creategroup'])) {
  $group_name= $_POST['group_name'];
  $create_id= $_POST['create_id'];
  $group_id= rand(999999,111111);
  $group_img= "group.png";
  $insrt="INSERT INTO groups(group_id,create_id,group_name,group_img,group_users,group_time) VALUES ('$group_id','$create_id','$group_name','$group_img','1',NOW())";
  $insrt_result=mysqli_query($db, $insrt);
  $selct="SELECT * FROM groups WHERE group_id ORDER BY id DESC";
  $sel_res= mysqli_query($db, $selct);
  $grpid=mysqli_fetch_assoc($sel_res);
  
  if ($insrt_result) {
    $_SESSION['group_id']= $grpid['group_id'];
    header('Location:chatgroup.php?groupid='. $grpid['group_id'] .'');
  }else{
    header("Location:personal.php?error");
  }
}