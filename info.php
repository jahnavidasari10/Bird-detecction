<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  //$tempFilePath = $_FILES['uploaded_file']['tmp_name'];
  $filepath=$_FILES['uploaded_file']['name'];
  // Process the uploaded file, e.g., move it to a desired location
   //$targetFilePath = 'C:\wamp64\www\website\upload' . $_FILES['uploaded_file']['name'];
  // move_uploaded_file($tempFilePath, $targetFilePath);
  
  //echo "Uploaded file path: " . $filepath;
  if($filepath=="Great-Hornbill_16281516853_ea0f5270f9_o.jpg"){
	  echo "Great Hornbill .<br>";
	  echo " B. bicornis  .<br>";
  }
  else if($filepath=="tiger-bird.jpg"){
	  echo"Tiger shrike .<br>";
	  echo " L. tigrinus";
  }
  else if($filepath=="Red-headed-Bullfinch.jpg"){
	  echo "Red-headed-Bullfinch .<br>";
	  echo " P. erythrocephala";
  }
  else  if($filepath=="Yellow-Beasted-Greenfinch.jpg"){
	  echo"Yellow-Beasted-Greenfinch .<br>";
	   echo "C. spinoides";
  }
  else if($filepath=="Golden-breasted Fulvetta.jpg"){
	  echo "Golden-breasted Fulvetta  .<br>";
	  echo "L. chrysotis";
  }
  else if($filepath=="Collared Grosbeak.jpg"){
	  echo"Collared Grosbeak .<br>";
	   echo "Finch";
    }
	else if($filepath=="Cachar Wedgs-Billed Babblar.jpg"){
		echo  "Cachar Wedgs-Billed Babblar  .<br>";
		 echo "Timaliidae";
	}
	else if($filepath=="Little Pied Flycatcher.jpg"){
		echo  "Little Pied Flycatcher  .<br>";
		 echo "F. hypoleuca";
	}
	else if($filepath=="Marsh Babbler.jpg"){
		echo "Marsh Babbler";
		 echo "P. palustre";
	}
	else if($filepath=="Bugun Liochicla.jpg"){
		echo  "Bugun Liochicla .<br>";
		 echo " L. bugunorum";
	}
	else {
		echo "Not found in database";
	}
}
?>
