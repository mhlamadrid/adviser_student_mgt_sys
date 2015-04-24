<div class="modal fade" id="update_records_Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
			<!--Start of Header-->
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="exampleModalLabel">Update Records</h4>
			<!--End of Header-->
			</div>
			<div class="modal-body">
			<!--Start of Body-->
				<p>
					Description and instructions here.
				</p>
				<?= form_open_multipart('admin_control/update_records', array('class' => 'form-horizontal', 'id' => 'form_update'));?>	
							<div class="form-group">
								<label for="file" class="col-sm-2 control-label">File</label>
								<div class="col-sm-10">
									<?Php	
												$data = array(
														  'type'	 	=> 'file',
														  'class'       => "form-control",
														  'id'			=> 'file',
														  'name'        => 'file',
														  'value'       => set_value('date'),
														);
												echo form_input($data);
									?>
								</div>
							</div>
						<?= form_close();?>
			<!--End of Body-->
			</div>
			<div class="modal-footer">
			<!--Start of Footer-->
				<?Php
					$attr = array(
								'type'         	=> 'button',
								'data-dismiss'	=> 'modal',
								'value'         => 'Close',
								'class' 	 	=> "btn btn-default",
							);
					echo form_input($attr);
					
					$attr = array(
								'type'          => 'button',
								'value'         => 'Upload and Update',
								'class' 	 	=> "btn btn-primary",
								'onclick'       => "func_update()"
							);
					echo form_input($attr);
				?>
			<!--End of Footer-->
			</div>
		</div>
	</div>
</div>

<script>
function func_update() {
    document.getElementById("form_update").submit();
}
</script>