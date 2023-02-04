<?php 
include 'include/connect.php';
session_start();
if (isset($_POST['update'])) {
	$id = $_SESSION['id'];
	$imgname=$_FILES['f1']['name'];
	$imgsize=$_FILES['f1']['size'];
	$tmpname=$_FILES['f1']['tmp_name'];
	$fname= $_POST['fname'];
	$lname= $_POST['lname'];
	//validation image file
	$validimgExtension= ['jpg','png','jpeg','gif'];
	$imgExtension= explode('.',  $imgname);
	$imgExtension= strtolower(end($imgExtension));
	if (!in_array($imgExtension, $validimgExtension)) {
		echo "Invalid file is type";
	}
	elseif ($imgsize > 1200000) {
		echo "This file is large";
	}
	$time= time();
	$newname= $time.$imgname;
	$mupl= move_uploaded_file($tmpname, '127.0.0.1-admin/upload_profile/' . $newname);
	if ($mupl) {
		$sql= "UPDATE `users` SET `fname` = '$fname',`lname` = '$lname', `avatar` = '$newname' WHERE `users`.`id` = $id ";
	$res=mysqli_query($db , $sql);
	if ($res) {
		header("Location: personal.php");
	}
	else{
		header("Location: update.php?error=Updated error");
	}
	}else{
		echo "Xatooooooooooooooooooooooooooooooooooooooo";
	}
	
	
}
	
		
			
		
	
 ?>