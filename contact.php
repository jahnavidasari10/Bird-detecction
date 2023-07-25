<!DOCTYPE html>
<html>
<head>
    <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
   <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Conserve Wildlife</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="contact.php">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="adminpage.php">Update</a>
        </li>
      </ul>
      
    </div>
  </div>
</nav> 

<section class="my-5">
    <div class="py-5">
	    <h2 class="text-center"> Contact</h2>
	</div>
	
	<div class="w-50 m-auto">
	    <form action="userinfo.php" method="post">
		    <div class="form-group">
			     <label>Username</label>
				 <input type="text" name="user" autocomplete="off" class="form-control">
			</div>
		    <div class="form-group">
			     <label>Email Id</label>
				 <input type="text" name="email" autocomplete="off" class="form-control">
			</div>
		    <div class="form-group">
			     <label>Mobile</label>
				 <input type="text" name="mobile" autocomplete="off" class="form-control">
			</div>
	        <div class="form-group">
	            <label>Comments</label>
		        <textarea class="form-control" name="comments">
		        </textarea>
	         </div>
		    <button type="submit" class="btn btn-success">Submit</button>
		</form>
	</div>
</section>
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
	
