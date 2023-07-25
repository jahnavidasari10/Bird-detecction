

<?php
 
 include "db_conn.php";
$con=mysqli_connect('localhost','root');
if($con){
	echo "Connection successful";
}
else{
	echo "No connection";
}

mysqli_select_db($con,'project');
$user=$_POST['username'];
$pass=$_POST['password'];

//$query="insert into logindata(username,password) values('$username','$password')";



//mysqli_query($con,$query);
header('location:login.php');
?>
