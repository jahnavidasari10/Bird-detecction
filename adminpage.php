<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,intial-scale=1.0">
	<title>admin main page</title>
     <link rel="stylesheet" type="text/css" href="style.css">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
   <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Staatliches" rel="stylesheet">
</head>
<body>

<section class="my-5">
    <div class="py-5">
	    <h2 class="text-center">Upload Image</h2>
	</div>	
		<div class="w-50 m-auto">
			<form class="col-8" method="post" action="addimage.php" enctype="multipart/form-data">
				<div class="form-group">
					<label for="title">Title</label>
					<input type="text" class="form-control" id="title" name="title" placeholder="Enter Title" required>
				</div>
				<div class="form-group">
					<label for="title">Species</label>
					<input type="text" class="form-control" id="species" name="species" placeholder="Enter Species" required>
				</div>
				<div class="form-group">
					<label for="image">Select Image</label>
					<input type="file" class="form-control-file" id="image" name="image" placeholder="select image" required>
				</div>
				<div class="form-group">
					<button type="submit" name="submit" class="btn btn-success">Update Image</button>
					<a href="addimage.php" class="btn btn-warning">Add New Image</a>
					<a href="viewimage.php" class="btn btn-info">View Image</a>
				</div>	
				
			</form> 
            <a href="logout.php" class "btn btn-danger">Logout</a>			
		</div>
         </div>
    </div>
</section>

</body>
</html>