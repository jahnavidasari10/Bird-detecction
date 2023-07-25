<?php
	include"db_conn.php";
	if( isset($_GET['id']) ){

		//get image id
		$img_id = $_GET['id'];

		//check if image is present
    	$img = ("SELECT * FROM image WHERE id = $img_id"); 
        $result=$conn->query($img);
		//no of rows
$query = "SELECT COUNT(*) AS total_rows FROM image";
$res = mysqli_query($conn, $query);

// Check if the query was successful
if ($res) {
    $row = mysqli_fetch_assoc($res);
}
$no_of_rows = $row['total_rows'];	

		if( !$no_of_rows ){
			die("Image not found!");
		}else{

			//Now run update query
			$query = ("DELETE FROM image WHERE id = $img_id");
            $result=mysqli_query($conn,$query);
         	//check if successfully inserted
        	if($result){ 
            	echo "Image has been successfully deleted."; 
            }else{ 
                echo "Something went wrong when deleting image!!!"; 
            }  
		}
	}//end of get check
	else{
		die("Image not found!");
	}