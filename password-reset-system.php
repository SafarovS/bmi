<?php 
require 'include/connect.php';
session_start();
if (isset($_POST['send'])) {
  $email= $_POST['email'];

  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header("Location: forgoto.php?error= Email addres is invalid");
  }
  else{
    $sql="SELECT * FROM users WHERE email='$email' LIMIT 1";
    $res=mysqli_query($db, $sql);
    $row=mysqli_fetch_array($res);
    if ($row ['email']==$email) { 
       $code=rand(999999,111111);
       $updt="UPDATE `users` SET `code` = '$code' WHERE `users`.`email` = '$email'";
       $updtres=mysqli_query($db, $updt);
       if ($updtres) {
        if (mail($email, "Safarov Academy", "Sizning tasdiqlash kodingiz $code", "From: sukhrob2024@gmail.com")) {
       header("Location:conformation.php?info=We have send a conformation code to your email $email");
     }else
         header("Location: forgoto.php?error= junatilmadi");
       }
    }else{
     header("Location: forgoto.php?error= This is email not exist! ");
    }
  }
}

  if(isset($_POST['code'])) {
    $code= ($_POST['code']);

      $verifsql= "SELECT * FROM users WHERE code='$code'";
      $verifres=mysqli_query($db, $verifsql);
      if ($verifres) {
          $ssl="UPDATE `users` SET `code` = '0' WHERE `users`.`email` = '$email'";
          mysqli_query($db, $ssl);
      }
      if (mysqli_num_rows($verifres)===1) {
        $verfrow=mysqli_fetch_assoc($verifres);
        if ($verfrow['code']=== $code) {
          
          $_SESSION['email']= $verfrow['email'];
          $_SESSION['id']= $verfrow['id'];
          header("Location: verif.php");
          exit();
        }else{
        header("Location: conformation.php?error= Incored conformation code");
        exit();
        }
      }

    }

    if (isset($_POST['update'])) {
      $newlogin=$_POST['newlogin'];
      $newpassword= $_POST['newpassword'];
      $email=$_SESSION['email'];
      
        $pasupdate= "UPDATE `users` SET `uname` = '$newlogin', `password` = '$newpassword' WHERE `users`.`email` = '$email'";
        $passresult= mysqli_query($db, $pasupdate);
        if ($passresult) {
         session_start();
         session_unset();
         session_destroy();
        header("Location: login.php");
        }else{
           header("Location:verif.php?error=Updated failed ");
        }
      
    }
 
        
 ?>