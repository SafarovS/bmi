<?php include 'include/connect.php'; ?>

<?php 
	session_start();
	if(isset($_POST['uname']) && isset($_POST['password'])) {
		

		$uname= ($_POST['uname']);
		$pass= ($_POST['password']);

		if (empty($uname)) {
			header("Location: login.php?error=User name is required");
			exit();
		}else if(empty($pass)){
			header("Location: login.php?error=Password is required");
			exit();
		}else{
			$sql= "SELECT * FROM users WHERE uname='$uname' AND password='$pass'";
			$res=mysqli_query($db, $sql);
			
			if (mysqli_num_rows($res)===1) {
				$row=mysqli_fetch_assoc($res);
				if ($row['uname']=== $uname && $row['password']=== $pass) {
					$_SESSION['unique_id']= $row['unique_id'];
					$_SESSION['uname']= $row['uname'];
					$_SESSION['fname'] = $row['fname'];
					$_SESSION['lname'] = $row['lname'];
					$_SESSION['avatar']= $row['avatar'];
					$_SESSION['id']= $row['id'];

					if ($row) {
					$status = "Online";
					$color= "success";
                	$sql2 = mysqli_query($db, "UPDATE users SET status = '{$status}', color = '{$color}' WHERE unique_id = {$row['unique_id']}");
					}
					if ($sql2) {
						header("Location:personal.php");
						exit();
					}
				}else{
				header("Location: login.php?error=Incorect User name or password");
				exit();
				}
			}else{
				header("Location: login.php?error=Incorect User name or password");
				exit();
			}
		}
	}else{
		header("Location: login.php?error");
		exit();
	}
 ?>