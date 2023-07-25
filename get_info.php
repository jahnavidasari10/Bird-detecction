<?php

  include "db_conn.php";
  $img = ("SELECT * FROM image "); 
	$result=$conn->query($img);
    
   
   
   
$query = "SELECT COUNT(*) AS total_rows FROM image";
$res = mysqli_query($conn, $query);

// Check if the query was successful
if ($res) {
    $row = mysqli_fetch_assoc($res);
}
$no_of_rows = $row['total_rows'];
// Check if there are any image names
if ($no_of_rows > 0) {
    // Output each image name
	$row = $result->fetch_row();
	/*if($row[0]="Great-Hornbill_16281516853_ea0f5270f9_o.jpg"){
		$img_name= $row[2];
		$img_species= $row[4];
		$output=$img_name .'   '.  $img_species;
		echo $output;
     }*/
	 if($row[1]="tiger-bird.jpg"){
		$img_name= $row[2];
		$img_species= $row[4];
		$output=$img_name .'   '.  $img_species;
		echo $output;
     }
	 /*else if($row[3]="Red-Headed-Bullfinch.jpg"){
		$img_name= $row[2];
		$img_species= $row[4];
		$output=$img_name .'   '.  $img_species;
		echo $output;
	 }*/
 else {
    echo "No images found in the database.Update the image to database";
	exit();
}
}

?>