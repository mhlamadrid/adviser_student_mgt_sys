<nav class="navbar navbar-inverse navbar-fixed-top" id="navbar">
    <div class="container" id="navbar_container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			
			<a class="navbar-brand" href="#">
			<?Php 
				$image_properties = array(
						'src'   => base_url('img/logo.png'),
						'alt'   => '128 AB-4L',
						'class' => 'post_images',
						'width' => '80',
						'height'=> '80',
						'title' => 'Logo',
				);

				echo img($image_properties);
			?>
			</a>  
        </div>
<?Php
	//IF LOGGED IN, navbar contain notifs and account mgt
	if($this->session->userdata('logged_in'))
	{
?>       
		<div class="collapse navbar-collapse" id="head-notifs">
			
        </div><!--/.nav-collapse -->
<?Php
	//IF NOT LOGGED IN, navbar contains login form
	}
	else
	{	
?>
		<div class="collapse navbar-collapse">
			<?= form_open('main_control/login', array( 'class' => "navbar-form navbar-right pull-right"));?>
				<div class="input-group input-group-sm">
					<span class="input-group-addon glyphicon glyphicon-user" id="basic-addon1"></span><input type="text" class="form-control" aria-describedby="sizing-addon3" name = "username">
				</div>
				<div class="input-group input-group-sm">
					<span class="input-group-addon glyphicon glyphicon-lock" id="basic-addon1"></span><input type="password" class="form-control" aria-describedby="sizing-addon3" name = "password">
				</div>
					<button type = "submit" class = "btn btn-default btn-sm">LOG IN</button>
			</form>
		</div><!--/.nav-collapse -->
<?Php
	}
?>		
    </div>
</nav>

<?Php
	//IF LOGGED IN, navbar contain notifs and account mgt
	if($this->session->userdata('logged_in'))
	{
?>
<script>
	//$(document).ready(function(){
		var id = "<?=$username?>"
		$.ajax({
			type: 'POST',
				 
			//We are going to make the request to the method "list_dropdown" in the match controller
			url: '<?= site_url();?>/notifications_control', 
			
			//POST parameter to be sent with the tournament id
			data: { user_id:id},
			
			//When the request is successfully completed, this function will be executed
			success: function(resp) { 
				//With the ".html()" method we include the html code returned by AJAX into the matches list
				$("#head-notifs").html(resp);
				//alert('Success while requests..' + resp);
				
			},
			error: function(){						
				alert('Error while requests notifications..');
			}
		});
	//});
</script>
<?Php
	}
?>