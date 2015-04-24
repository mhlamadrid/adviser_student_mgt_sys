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
				<br>
				<h2><p>Institute of Computer Science</p></h2>
			</center>
			
			<?= form_open_multipart('student_control/insertDocumentData', array('class' => 'form-horizontal', 'id' => 'form_add'));?>
			
			<div align = left>
				<br>
				<u>Please check the appropriate boxes</u>
				<br>
				<br>
				<?php echo form_radio('type', '1', TRUE); ?>Change in Option(Thesis/SP-Practicum)
				<br>
				<?php echo form_radio('type', '2'); ?>Change in Elective(s)*
				<br>
				<?php echo form_radio('type', '3'); ?>Change in GE Plan of Course Work**
				<br><br>
				<!--
				<div class="row">
					<div class="col-md-6">
						<strong>NAME: </strong>
						<?php
							$data = array(
									'class'		=> "form-control",
									'id'			=> 'name',
									'name'		=> 'name',
									'maxlength'	=> '30',
									'value'   		=> set_value('name')
								);
							echo form_input($data);
						?>
					</div>
					<div class="col-md-6">										
						<strong>DEGREE COURSE:</strong><input type="text" class="form-control" value="B.S. in Computer Science" disabled>
					</div>
				</div>
				
				
				<div class="row">
					<div class="col-md-6">
						<br>
						<strong>STUDENT NO: </strong>
						<?php
							$data = array(
									'class'		=> "form-control",
									'id'			=> 'studentno',
									'name'		=> 'studentno',
									'maxlength'	=> '10',
									'value'   		=> set_value('studentno')
									);
							echo form_input($data);
						?>
					</div>
					<div class="col-md-6">
						<br>
						<strong>E-MAIL/PHONE:</strong>
						<?php
							$data = array(
										'class'		=> "form-control",
										'id'			=> 'contact',
										'name'		=> 'contact',
										'maxlength'	=> '20',
										'value'   		=> set_value('contact')
								);
							echo form_input($data);
						?>
					</div>
				</div>
				
				-->
				
				<br><br>
				<p><strong>INITIALLY APPROVED</strong></p>
						<p>(Indicate Course Number and Course Title)</p>
						<div class="row">
							<div class="col-md-6">
								<?php
									$data = array(
											'class'			=> "form-control",
											'id'				=> 'crs_no1',
											'name'			=> 'crs_no1',
											'placeholder'		=> 'Course Number',
											'maxlength'		=> '10',
											'value'   			=> set_value('crs_no1')
											);
									echo form_input($data);
								?>
							</div>
							<div class="col-md-6">
								<?php
									$data = array(
											'class'			=> "form-control",
											'id'				=> 'crs_title1',
											'name'			=> 'crs_title1',
											'placeholder'		=> 'Course Title',
											'maxlength'		=> '20',
											'value'   			=> set_value('crs_title1')
											);
									echo form_input($data);
								?>
							</div>
						</div>
						
						<br>
						<div class="row">
							<div class="col-md-6">
								<?php
									$data = array(
											'class'			=> "form-control",
											'id'				=> 'crs_no2',
											'name'			=> 'crs_no2',
											'placeholder'		=> 'Course Number',
											'maxlength'		=> '10',
											'value'   			=> set_value('crs_no2')
											);
									echo form_input($data);
								?>
							</div>
							<div class="col-md-6">
								<?php
									$data = array(
											'class'			=> "form-control",
											'id'				=> 'crs_title2',
											'name'			=> 'crs_title2',
											'placeholder'		=> 'Course Title',
											'maxlength'		=> '20',
											'value'   			=> set_value('crs_title2')
											);
									echo form_input($data);
								?>
							</div>
						</div>
						
						<br>
						<div class="row">
							<div class="col-md-6">
								<?php
									$data = array(
											'class'			=> "form-control",
											'id'				=> 'crs_no3',
											'name'			=> 'crs_no3',
											'placeholder'		=> 'Course Number',
											'maxlength'		=> '10',
											'value'   			=> set_value('crs_no3')
											);
									echo form_input($data);
								?>
							</div>
							<div class="col-md-6">
								<?php
									$data = array(
											'class'			=> "form-control",
											'id'				=> 'crs_title3',
											'name'			=> 'crs_title3',
											'placeholder'		=> 'Course Title',
											'maxlength'		=> '20',
											'value'   			=> set_value('crs_title3')
											);
									echo form_input($data);
								?>
							</div>
						</div>
						
						<div>
							<br>
							<br>
							<p><strong>PROPOSED CHANGES</strong></p>
							<p>(Indicate Course Number, Course Title and SEM/AY to be taken)</p>
							<div class="row">
								<div class="col-md-4">
									<?php
										$data = array(
												'class'			=> "form-control",
												'id'				=> 'newcrs_no1',
												'name'			=> 'newcrs_no1',
												'placeholder'		=> 'Course Number',
												'maxlength'		=> '10',
												'value'   			=> set_value('newcrs_no1')
												);
										echo form_input($data);
									?>
								</div>
								<div class="col-md-4">
									<?php
										$data = array(
												'class'			=> "form-control",
												'id'				=> 'newcrs_title1',
												'name'			=> 'newcrs_title1',
												'placeholder'		=> 'Course Number',
												'maxlength'		=> '20',
												'value'   			=> set_value('newcrs_title1')
												);
										echo form_input($data);
									?>
								</div>
								<div class="col-md-4">
									<?php
										$data = array(
												'class'			=> "form-control",
												'id'				=> 'sem1',
												'name'			=> 'sem1',
												'placeholder'		=> 'Semester/Year Taken',
												'maxlength'		=> '15',
												'value'   			=> set_value('sem1')
												);
										echo form_input($data);
									?>
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-md-4">
									<?php
										$data = array(
												'class'			=> "form-control",
												'id'				=> 'newcrs_no2',
												'name'			=> 'newcrs_no2',
												'placeholder'		=> 'Course Number',
												'maxlength'		=> '10',
												'value'   			=> set_value('newcrs_no2')
												);
										echo form_input($data);
									?>
								</div>
								<div class="col-md-4">
									<?php
										$data = array(
												'class'			=> "form-control",
												'id'				=> 'newcrs_title2',
												'name'			=> 'newcrs_title2',
												'placeholder'		=> 'Course Number',
												'maxlength'		=> '20',
												'value'   			=> set_value('newcrs_title2')
												);
										echo form_input($data);
									?>
								</div>
								<div class="col-md-4">
									<?php
										$data = array(
												'class'			=> "form-control",
												'id'				=> 'sem2',
												'name'			=> 'sem2',
												'placeholder'		=> 'Semester/Year Taken',
												'maxlength'		=> '15',
												'value'   			=> set_value('sem2')
												);
										echo form_input($data);
									?>
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-md-4">
									<?php
										$data = array(
												'class'			=> "form-control",
												'id'				=> 'newcrs_no3',
												'name'			=> 'newcrs_no3',
												'placeholder'		=> 'Course Number',
												'maxlength'		=> '10',
												'value'   			=> set_value('newcrs_no3')
												);
										echo form_input($data);
									?>
								</div>
								<div class="col-md-4">
									<?php
										$data = array(
												'class'			=> "form-control",
												'id'				=> 'newcrs_title3',
												'name'			=> 'newcrs_title3',
												'placeholder'		=> 'Course Number',
												'maxlength'		=> '20',
												'value'   			=> set_value('newcrs_title3')
												);
										echo form_input($data);
									?>
								</div>
								<div class="col-md-4">
									<?php
										$data = array(
												'class'			=> "form-control",
												'id'				=> 'sem3',
												'name'			=> 'sem3',
												'placeholder'		=> 'Semester/Year Taken',
												'maxlength'		=> '15',
												'value'   			=> set_value('sem3')
												);
										echo form_input($data);
									?>
								</div>
							</div>
							</p>
					</div>
					
					<div>
						<p><strong>JUSTIFICATION:</strong><p><br>
						<?Php
							$data = array(
									  'class'	=> "form-control",
									  'id'		=> 'justification',
									  'name'	=>  'justification',
									  'style'	=> "resize:none",
									  'value'   => set_value('justification')
									);
							echo form_textarea($data);
						?>
					</div>

					<div>
						<?php
							echo form_submit('submit', 'SUBMIT FORM');
						?>
					</div>

				<?= form_close();?>
			</div>
			</div>
		</div>
	</div>
</div>