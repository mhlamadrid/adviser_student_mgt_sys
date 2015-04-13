<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
	<title>University of the Philippines | Logged In</title>

	<!-- CSS Links -->
	<link rel="stylesheet" href="<?= base_url();?>assets/dist/css/bootstrap.css">
	<link href="<?= base_url();?>assets/dist/css/home.css" rel="stylesheet" type="text/css">
	<link href="<?= base_url();?>assets/dist/css/home_student.css" rel="stylesheet" type="text/css">
	<link href="<?= base_url();?>assets//cust/bootstrap_002.css" rel="stylesheet">
	<script src="<?php echo base_url();?>js/login.js"></script>
</head>


<body>
	<div id="navbar_top" class="navbar navbar-default navbar-fixed-top">
    	<div  class="container-fluid">
    		<a class="navbar-brand" href="#"><img src="<?=base_url();?>assets/img/logo.png" alt="128 AB-4L" height="80" width="80"></a> 
        	<div>
				<ul class="nav navbar-nav navbar-right">
					<li>
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<span style="font-size: 21px" class="glyphicon glyphicon-globe"><span class="badge"></span></span>
						</a>
					</li>

					<li class="dropdown close">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<span class="glyphicon glyphicon-menu-down"></span>
						</a>
							<ul class="dropdown-menu">
								<li style="margin-left: 35px;">
									<img src="<?=base_url();?>assets/img/prof_pic.jpg" alt="profile_pic" height="90" width="90">	
								</li>
								
								<li class="divider"></li>
								<li></li>
								<li>
									<form method="post" action='<?php echo base_url();?>'>
										<span class="glyphicon glyphicon-log-out"></span><input type="submit" name="logout" value="logout"/>
								    </form>
								</li>
								<!-- <li><a href="#"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li> -->
								
							</ul>
					</li>
				</ul>
        	</div>
    	</div>
    </div> 

	<!--Welcome-->

	<div class="col-md-12" style="height: 100px; position: relative; top: 90px; ">
		<p id="studentName">DELA CRUZ, JUAN</p>
		<p id="studentNum">2012-12345<p>
	</div>
	<form method="POST" action="<?php echo site_url('adviser_control/adviserRequest'); ?>">
		<div class="col-md-11" style="height: 50px; position: relative; top: 70px;">
			<button class="btn btn-default" type="submit" id="request" onClick="requestSent()">Request Additional Contact Information</button>
		</div>
	</form>
	<div class="col-md-3" style="height: 400px; position: relative; top: 70px; ">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4>APPOINTMENTS</h4>

			</div>
			<div class="panel-body">
				<p>No upcoming appointments</p>
			</div>
		</div>

	</div>
	<div class="col-md-9" style="height: 400px; position: relative; top: 70px; ">
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
	
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?=base_url();?>assets/cust/jquery-1.7.1.min.js"></script>
    <script src="<?=base_url();?>assets/cust/bootstrap.js"></script>

    <script>
		function requestSent() {
		    alert("Request Sent!");
		}
	</script>
	
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
	
</body><!--end of body--></html>