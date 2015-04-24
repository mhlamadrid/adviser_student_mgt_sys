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
						<?= $row->name;?>
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
						<?= $row->contact_no;?>
					</td>
							
					<td>
						<div class="btn-group btn-block">
						<?Php						
							$attr = array(
									'value'       => 'Do Something',
									'class' 	  => "btn btn-primary",
									);
							echo form_submit($attr);
							echo form_close();
						?>
						</div>
					</td>
				</tr>
<?Php	}	?>
			</table>
<?Php	}else echo heading("No Students.",4);	?>
		</div>