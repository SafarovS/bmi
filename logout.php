<?php 
session_start();
    if(isset($_SESSION['unique_id'])){
        include_once "include/connect.php";
        $logout_id = $_GET['logout_id'];
        if(isset($logout_id)){
            $status = "Offline";
            $color= "secondary";
            $sql = mysqli_query($db, "UPDATE users SET status = '{$status}', color = '{$color}' WHERE unique_id={$_GET['logout_id']}");
            if($sql){
                session_unset();
                session_destroy();
                header("location:index.php");
            }
        }else{
            header("location: index.php");
        }
    }else{  
        header("location:index.php");
    }
 ?>