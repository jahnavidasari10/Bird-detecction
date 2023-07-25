<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,intial-scale=1.0">
	<title>admin page</title>
     <link rel="stylesheet" type="text/css" href="admin_style.css">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
   <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Staatliches" rel="stylesheet">
	
</head>
<body>
<div class="container center-div ">
    <div class="heading text-center text-uppercase text-white">ADMIN LOGIN PAGE</div>
	<div class="container row d-flex flex-row
	justify-content-center mb-5">
	    <div  class="admin-form shadow p-2">
		    <form action="login.php" method="POST">
			    <div class="form-group">
				    <label>Username</label>
					<input type="text"name="user" value=""
					class="form-control" autocomplete="off">
				</div>
				<div class="form-group">
				    <label>Password</label>
					<input type="text"name="pass" value=""
					class="form-control"autocomplete="off">
				</div>
				<input type="submit" class="btn btn-success"
				name="submit">
			</form>
		</div>
	</div>
</div>    
</body>
</html>