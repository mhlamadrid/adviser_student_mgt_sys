<div class="modal fade" id="change_password_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
			<!--Start of Header-->
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="exampleModalLabel">Curriculum</h4>
			<!--End of Header-->
			</div>
			<div class="modal-body">
			<!--Start of Body-->
				<?=form_open('main_control/change_password'); ?>
				<!--<form method="post" action=''>-->
				<center>
		    	<input class="form-control" type="password" name="password"><br>
		    	<input class="btn btn-primary" type="submit" name="change_pass" value="Change Password"/>
		    	</center>
		        </form> 
			<!--End of Body-->
			</div>
			<div class="modal-footer">
			<!--Start of Footer-->
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			<!--End of Footer-->
			</div>
		</div>
	</div>
</div>