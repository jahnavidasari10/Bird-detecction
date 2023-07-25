<!DOCTYPE html>
<html>
<head>
    <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
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
      
    </div>
  </div>
</nav> 


<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="bird.jpg" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Great Indian Hornbill</h3>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="bird2.jpg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Black&Yellow Grossbeak</h3>
      </div>   
    </div>
	<div class="carousel-item">
      <img src="bird6.jpg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Fire Tailed Myzornis</h3>
      </div>   
    </div>
	<div class="carousel-item">
      <img src="bird7.jpg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Streak Throated Barwing</h3>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="bird8.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Maroon Oriole</h3>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<section class="my-5">
    <div class="py-5">
	    <h2 class="text-center">About Us</h2>
	</div>
	<div class="container-fluid">
	    <div class="row">
		    <div class="col-lg-6 col-md-6 col-12">
			    <img src="bird5.jpg" class="img-fluid aboutimg">
			</div>
			<div class="col-lg-6 col-md-6 col-12">
			<h2 class=display-4"> Birds Species Detection</h2>
			   <p class="py-3"> To know which species the bird belong to and when the user uploads the image of bird,
			    we  can get the name and the species of the bird.
			   </p>
			   <a href="about.php" class="btn btn-success"> Know More </a>
			</div>
		</div>
	</div>
</section>

	 


	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>

</section>

<section class="my-5">
    <div class="py-5">
	    <h2 class="text-center"> Get Info</h2>
	</div>
	<div class="w-50 m-auto">
	<div class="form-group">
	    <form class="col-8" method="post" action="info.php" enctype="multipart/form-data">
		<form action="info.php" method="POST" enctype="multipart/form-data">
         <input type="file" name="uploaded_file">
  <input type="submit" value="Upload">
</form>

	</div>
	</form>
	</div>
</section>


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
	


</body>
</html>