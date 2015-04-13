<!DOCTYPE html>
 <head>
   <title>Logged In</title>
   <script src="<?php echo base_url();?>js/login.js"></script>

 </head>
 <body>
   <h1>Home</h1>
   <h2>Welcome <?php echo $username; ?>, <?php echo $role; ?>!</h2>
   <form method = "post">
		<input class="login_input" type = "text" name="generate_username" placeholder="employee id" size="27"/></br>
		<input type = "submit" name="submit" value="Generate" id="submit_button" /> </br>	
	</form>
	<form method="post" action='<?php echo base_url();?>'>
		<!--<a href="proj_control/logout">Logout</a>-->
		<input type="submit" name="logout" value="logout"/>
    </form>
 </body>
</html>