<?php include "db_conn.php"; ?>
<!DOCTYPE html>
<html>
<head>
     <title>View</title>
</head>
<body>
      <a href="index.php">&#8592;</a>
	  <?php
	 
	       $sql ="SELECT * FROM image ORDER BY id DESC";
		   $res=mysqli_query($conn, $sql);
		   
		   if(mysqli_num_rows($res) >0){
			   while($image = mysqli_fetch_assoc($res)) {  ?>
			   
			   <div class ="alb">
			       <img src= "images/<?=$image['file_name']?>">
			   </div>
	   <?php } }?>
</body>
</html>