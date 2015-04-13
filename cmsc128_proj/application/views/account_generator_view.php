<html>
	<head>
		<title><?=$title?></title>
	</head>

	<body>

	<form method = "post">
	
		<input class="login_input" type = "text" name="username" placeholder="username" size="27"/></br>
		<input class="login_input" type = "password" name="password" placeholder="password" size="27"/></br>
		<input type = "submit" name="submit" value="Generate" id="submit_button" /> </br>
		
	</form>
		
	<form method = "post">
		<input class="login_input" type = "text" name="loginusername" placeholder="username" size="27"/></br>
		<input type = "submit" name="submit" value="Login" id="submit_button" /> </br>
		<?= $password ?> </br>
	</form>
	
	</body>
</html>