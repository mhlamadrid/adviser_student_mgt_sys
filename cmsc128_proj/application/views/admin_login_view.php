
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv = "X-UA-Compatible" content = "IE=edge">
		<meta name = "viewport" content="width=device-width, initial-scale=1.0">
		<link rel = "stylesheet" type = "text/css" href = "css/bootstrap.min.css">
		<link rel = "stylesheet" type = "text/css" href= "css/styles.css">
		<link rel = "stylesheet" type = "text/css" href= "css/home.css">
		<title>Home: Jhubabies UI</title>
	</head>
	
	<body>
		<!--Navbar-->
		<div id="navbar_top" class="navbar navbar-default navbar-fixed-top">
			<div class = "container">
				<a class="navbar-brand" href="#"><img src="img/logo.png" alt="128 AB-4L" height="80" width="80"></a>
				<div class = "collapse navbar-collapse navHeaderCollapse">
					<form class = "navbar-form navbar-right pull-right" role = "form" method="post">
						<div class="input-group input-group-sm">
							<span class="input-group-addon glyphicon glyphicon-user" id="basic-addon1"></span><input type="text" class="form-control" aria-describedby="sizing-addon3" name = "username">
						</div>
						<div class="input-group input-group-sm">
							<span class="input-group-addon glyphicon glyphicon-lock" id="basic-addon1"></span><input type="password" class="form-control" aria-describedby="sizing-addon3" name = "password">
						</div>
						<a href="adviser.php"><button type = "submit" class = "btn btn-default btn-sm">LOG IN</button></a>
					</form>
				</div>
			</div>
		</div>
	
		<div class = "separator"></div>
		<div class = "sep"></div>
		<!--Announcements-->
		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			  <!-- Indicators -->
			  <ol class="carousel-indicators">
			    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
			    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
			  </ol>

			  <!-- Wrapper for slides -->
			  <div class="carousel-inner" role="listbox">

			    <div class="item active">
			      <div class="carousel-caption">
					<h2>Announcement 1</h2>
					<br></br>
					<p>Details details details details details. Details details details details details. Details details details details details.</p>
					<br></br>
					<br></br>
					<br></br>
			      </div>
			    </div>

			    <div class="item">
			      <div class="carousel-caption">
					<h2>Announcement 2</h2>
					<br></br>
					<p>Details details details details details. Details details details details details. Details details details details details.</p>
					<br></br>
					<br></br>
					<br></br>
			      </div>
			    </div>
			   
			   <div class="item">
			      <div class="carousel-caption">
					<h2>Announcement 3</h2>
					<br></br>
					<p>Details details details details details. Details details details details details. Details details details details details.</p>
					<br></br>
					<br></br>
					<br></br>
			      </div>

			  </div>

			</div>
		</div>
		<div class = "separator"></div>
		<div class = "sep-2"></div>
		<!--================================================================Footer================================================================-->
		<div id = "navbar_bottom" class = "navbar navbar-default navbar-fixed-bottom">
			<div class = "container">
				<p class = "navbar-text pull-left">All Rights Reserved (c) 2015 CMSC 128 AB-4L</p>
				<!--<a class="navbar-btn btn-info btn pull-right" href="#">Oh yeah</a>-->
			</div>
		</div>

	<!--jQuery-->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
	<script src="js/skrollr.js"></script>
	<script src="js/_main.js"></script>
	</body>
</html>