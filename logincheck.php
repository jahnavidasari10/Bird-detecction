<?php 
session_start(); 
include "db_login.php";
//include  "db_admin.php";
if (isset($_POST['uname']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}
    $user=validate($_POST['id']);
	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	if (empty($uname)) {
		header("Location: login.php?error=User Name is required");
	    exit();
	}else if(empty($pass)){
        header("Location: login.php?error=Password is required");
	    exit();
	}else{
		// hashing the password
       // $pass = md5($pass);

        
		$sql = "SELECT * FROM login WHERE username='$uname' AND password='$pass'";
       // $query="SELECT * FROM admin WHERE user='$uname' AND pass='$pass'";
		$result = mysqli_query($conn, $sql);
        //$result1=mysqli_query($conn,$query);
		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['username'] === $uname && $row['password'] === $pass) {
            	$_SESSION['username']= $row['username'];
				$_SESSION['password']=$row['password'];
				$_SESSION['name']=$row['name'];
				$_SESSION['id']=$row['id'];
				header("Location: index.php");
				exit();
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
	header("Location: login.php");
	exit();
}