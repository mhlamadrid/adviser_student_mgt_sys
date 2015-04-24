	<div class="modal fade" id="generate_Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
			<!--Start of Header-->
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="exampleModalLabel">Send Document</h4>
			<!--End of Header-->
			</div>
			<div class="modal-body">
			<!--Start of Body-->
			<center>
				<h2><p>University of the Philippines Los Ba&ntilde;os</p>
					<p>College of Arts and Sciences</p>
				</h2>
				<br>
				<h3>REQUEST FOR CHANGE IN THE APPROVED PLAN OF STUDY</h3>
				<br><br>
				<h2><p>Institute of Computer Science</p></h2>
			</center>
			<?php
			echo validation_errors();
			echo form_open();
			
			$data = array(
							'class'			=> "form-control",
							'id'				=> 'name',
							'name'			=> 'name',
							'maxlength'	=> '30'
						);
			echo form_input($data);

			?>
			</div>
		</div>
	</div>
</div>