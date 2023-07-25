<?php
session_start();
include "db_conn.php";

if(isset($_POST['submit'])){
	$username=$_POST['username'];
	$password=$_POST['password'];
	
	$sql="select * from login where username='$username' and
	         password='$password'";
	$query=mysqli_query($con,$sql);
	
	$row = mysqli_num_rows($query);
		if($row == 1){
			echo"login successful";
			$_SESSION['username']=$username;
			header('location:index.php');
		}
		else{
			echo "login failed";
			header('location:login.php');
		}
	
}
?>