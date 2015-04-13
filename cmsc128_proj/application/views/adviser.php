<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv = "X-UA-Compatible" content = "IE=edge">
		<meta name = "viewport" content="width=device-width, initial-scale=1.0">
		<link rel = "stylesheet" type = "text/css" href = "<?php echo base_url();?>assets/css/bootstrap.min.css">
		<link rel = "stylesheet" type = "text/css" href= "<?php echo base_url();?>assets/css/styles.css">
		<link rel = "stylesheet" type = "text/css" href= "<?php echo base_url();?>assets/css/home.css">
		<title>Adviser</title>
	</head>
	
	<body>
		<!--Navbar-->
		<div id="navbar_top" class="navbar navbar-default navbar-fixed-top">
			<div class = "container">
				<a class="navbar-brand" href="#"><img src="<?php echo base_url();?>assets/img/logo.png" alt="128 AB-4L" height="80" width="80"></a>
        	<div>
				<ul class="nav navbar-nav navbar-right">
					<li>
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<span  style="font-size: 21px" class="glyphicon glyphicon-globe"></span>
						</a>
						<ul class="dropdown-menu">
							<li><a href="<?php echo base_url();?>index.php/adviser_control/good">Good</a></li>
							<li><a href="<?php echo base_url();?>index.php/adviser_control/probation">Probation</a></li>
							<li><a href="<?php echo base_url();?>index.php/adviser_control/dismissed">Dismissed</a></li>
						</ul>



					</li>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span style="font-size: 21px" class="glyphicon glyphicon-user pull-right"></span></a>
          <ul class="dropdown-menu">
			<li style="margin-left: 35px;">
				<img src="<?php echo base_url();?>assets/img/prof_pic.jpg" alt="profile_pic" height="90" width="90">	
			</li>
            <li class="divider"></li>
            <li><form method="post" action='<?php echo base_url();?>'>
										<span class="glyphicon glyphicon-log-out"></span><input type="submit" name="logout" value="logout"/>
								    </form></li>
          </ul>
        </li>
				</ul>
        	</div>
			</div>
		</div>
	
		<div id="content">
			<div class="col-md-3" style="height: 400px; position: relative; top: 90px; ">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4>APPOINTMENTS</h4>

					</div>
					<div class="panel-body">
						<p>No upcoming appointments</p>
					</div>
				</div>

				<div class="panel panel-default">
					<div class="panel-heading">
						<h4>SEARCH</h4>
					</div>
					
					<div class="panel-body">
						<form role="form">
						  <div class="form-group">
						    <input type="text" class="form-control" id="" placeholder="Enter advisee's name">
						  </div>
						  <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-search"></span> Search </button>
						</form>
					</div>
				</div>

				<div class="panel panel-default">
					<div class="panel-heading">
						<h4>REQUEST CONTACT INFO</h4>

					</div>
					<div class="panel-body">
						
					</div>
				</div>
			</div>

			<div class="col-md-9" style="position: relative; top: 90px; ">
				<div class="panel" style="background:white;">
					<ul class="nav nav-tabs" role="tablist">
				        <li class="active"><a href="#" role="tab" data-toggle="tab"><h4 id="view_graph">ACADEMIC STANDING</h4></a></li>
				        <li><a href="#" id="view_documents" role="tab" data-toggle="tab"><h4 style="color: gray;">DOCUMENTS</h4></a></li>
				        <li id="view_search"><a href="#" role="tab" data-toggle="tab"><h4 style="color: gray;" >FILTERED SEARCH</h4></a></li>        
				    </ul>

				 	<div class="tab-content" id="pill_content">
						<p> &nbsp&nbsp&nbsp&nbsp&nbsp Since we are working with modules, its better to use separate .php files and just use sripts to add them in this page.</p>
					</div>
				</div>
			</div>
			
			<div style="position: relative; top: 90px; ">
				<?php
					$this->load->view($page, $csvData);
				?>
			</div>
			
		</div>
		<!--================================================================Footer================================================================-->
		<div id = "navbar_bottom" class = "navbar navbar-default navbar-fixed-bottom">
			<div class = "container">
				<p class = "navbar-text pull-left">All Rights Reserved (c) 2015 CMSC 128 AB-4L</p>
				<!--<a class="navbar-btn btn-info btn pull-right" href="#">Oh yeah</a>-->
			</div>
		</div>

		<script src="<?php echo base_url();?>assets/cust/jquery-1.7.1.min.js"></script>
	    <script src="<?php echo base_url();?>assets/cust/bootstrap.js"></script>
		
		<script type="text/javascript">
			$('#myTab a').click(function (e) {
	  			e.preventDefault()
	  			$(this).tab('show')
			})
		</script>
	    <script>
	    $(document).ready(function(){

	    	$("#view_documents").click(function(){
	    		$("#pill_content").load('php/view_documents.php');
	    		$('#myTab li:eq(1) a').tab('show');
	    	});

	    	$("#view_graph").click(function(){
	    		$("#pill_content").load('php/view_graphs.php');

	    	});

	    	$("#view_search").click(function(){
	    		$("#pill_content").load('php/view_search.php');

	    	});


	    });
		</script>
	</body>
</html>