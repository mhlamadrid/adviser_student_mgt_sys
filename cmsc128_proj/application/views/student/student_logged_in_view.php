 <!DOCTYPE html>
 <head>
   <title>Student Page</title>
   
<?Php 
	echo link_tag(base_url('css/bootstrap.css'));
	echo link_tag(base_url('css/common.css'));
	echo script_tag(base_url('js/jquery-1.11.2.min.js'));
	echo script_tag(base_url('js/bootstrap.js'));
?>
	<script>
		$(document).ready(function(){		 
			$('#myTab a:first').tab('show')
		});
	</script>
	
	<style>
		.student-info {
		  text-align: center;
		}
	</style>	
 </head>
 <body>	
	<!--MODAL-->
	<?php $this->load->view('student/curriculum_modal');?>
	<?php $this->load->view('student/account_settings_modal');?>
	<?Php $this->load->view('student/form_modal');?>

	<!--MODAL-->

	<!---Header-->
	<?Php $this->load->view('header_view');?>

	<div class="container">
		<div class="row">
			<div class="student-info">
				<h1 class="text-capitalize"><?=$username;?></h1>
				<p>Student info...</p>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-9 col-md-9">
			<!--TABS-->
				<div class="panel panel-default">
					<div class="panel-body">
						<ul class="nav nav-tabs" role="tablist" id="myTab">
						  <li role="presentation" class="active"><a href="#tab_announce" aria-controls="home" role="tab" data-toggle="tab"><?= heading("ANNOUNCEMENTS", 4)?></a></li>
						  <li role="presentation"><a href="#tab_adviser" aria-controls="profile" role="tab" data-toggle="tab"><?= heading("ADVISER", 4)?></a></li>
						  <li role="presentation"><a href="#tab_documents" aria-controls="docs" role="tab" data-toggle="tab"><?= heading("DOCUMENTS", 4)?></a></li>
						</ul>

						<div class="tab-content"> 
						<?Php 
							$this->load->view('student/tab_announce');
							$this->load->view('student/tab_adviser');
							$this->load->view('student/tab_documents');
						?>
						</div>
					</div>
				</div>
			<!--TABS-->
			</div>
			
			<div class="col-xs-12 col-sm-3 col-md-3">
				<?php $this->load->view('student/student_panel');?>
			</div>
		</div>
	</div>
	
	<!---Footer-->
	<?php $this->load->view('footer_view');?>
	
 </body>
</html>