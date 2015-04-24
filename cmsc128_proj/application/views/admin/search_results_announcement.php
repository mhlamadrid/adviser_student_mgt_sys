<?php 
		if (validation_errors()) {?><p class="lead"><em><?= heading(validation_errors(), 4);?></em></p><?Php }
			$attr = array(
					'type'          => 'button',
					'class' 	  => "btn btn-primary btn-block",
					'data-toggle' => "modal",
					'data-target' => "#add_Modal",
					);
			echo anchor('#add_Modal',"<span class='glyphicon glyphicon-plus'></span> &nbsp; CREATE NEW ANNOUNCEMENT", $attr);

			echo br();
	if ($announcements != null){	
		echo form_open('admin_control/del_announcement');?>
		<table class="table table-hover table-striped">
			<th>Date Posted</th>
			<th>Title</th>
			<th>Body</th>
			<th>Attachment</th>
			<th></th>
<?Php	foreach ($announcements as $row){	?>
			<tr>
				<td>
					<?= $row->date;?>
				</td>
				
				<td>
					<?= $row->title;?>
				</td>
						
				<td>
					<p class="tool-tip" data-toggle="tooltip" data-placement="right" title="<?= $row->body;?>">
						<?= $row->body;?>
					</p>
				</td>
						
				<td>
					<span class="glyphicon glyphicon-paperclip"></span>
				</td>
					
				<td>
					<div class="btn-group btn-block">
					<?Php
						echo form_hidden('id', $row->id);
										
						$attr = array(
									'class' 	  => "btn btn-link",
									'data-toggle' => "modal",
									'data-target' => "#edit_Modal",
									'data-id' => $row->id,
									'data-date' => $row->date,
									'data-title' => $row->title,
									'data-body' => $row->body
									);
						echo anchor("#edit_Modal", "Edit <span class='glyphicon glyphicon-edit' aria-hidden='true'></span>", $attr);
						?>
							&nbsp;
							
						<button type="submit" class="btn btn-link"> Delete <span class='glyphicon glyphicon-trash' aria-hidden='true'></span></button>
					</div>
				</td>
			</tr>
<?Php	}	?>
		</table>
<?Php	
		echo form_close();
	}else echo heading("No Announcements.",4);	?>