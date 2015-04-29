		<div class="panel-heading">
			<?Php 
			if($search_param!=null){
				echo heading("Searching <em>{$search_param}</em>...",4);
			}
			?>
		</div>
		<div class="panel-body">  
			<?Php
	if ($students != null){	?>
		<table class="table table-hover table-striped">
			<th>Student Number</th>
			<th>Name</th>
			<th>Classification</th>
			<th>Status</th>
			<th>Email Address</th>
			<th>Contact No.</th>
			<th></th>
<?Php	foreach ($students as $row){
				
			echo form_open('');		?>
				<tr>
					<td>
						<?= $row->stud_no;?>
					</td>
							
					<td>
						<?Php
							$attr = array(
								'data-toggle' => "modal",
								'data-target' => "#view_Modal",
								'data-id' => $row->stud_no,
								'data-name' => $row->name,
								'data-classification' => $row->classification,
								'data-status' => $row->status,
								'data-email_add' => $row->email_add,
								'data-contact_no' => $row->contact_no
								);
							echo anchor('view_Modal', "{$row->name}", $attr);
						?>
					</td>
							
					<td>
						<?= $row->classification;?>
					</td>
							
					<td>
						<?= $row->status;?>
					</td>
							
					<td>
						<?= $row->email_add;?>
					</td>
							
					<td>
						<?php
							foreach ($has_contact as $row1) {
								if ($row1->stud_no === $row->stud_no) {
									if ($row1->has_contact === 't') {
										echo $row->contact_no;
										break;										
									}
									else{
										echo "Contact Information Unavailable";
									
						?>
					</td>
							
					<td>
						<div class="btn-group btn-block">
						<?Php						
							echo "<div class='btn-group btn-block'>";
								echo "<input type='hidden' id='hide' value='".$row->stud_no."'/>";
								$attr = array(
										'id' => $row->stud_no,
										'class' => "btn btn-default",
										'value' =>  "Request",
										'onclick' => 'request_contact();request_sent()'
									);
								echo form_input($attr);
								echo form_close();
							echo "</div>";
							echo "</td>";//ayusin UI
								}
							}
						}
						?>
						</div>
					</td>
				</tr>
<?Php	}	?>
			</table>
<?Php	}else echo heading("No Students.",4);	?>
		</div>