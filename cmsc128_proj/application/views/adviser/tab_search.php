<div role="tabpanel" class="tab-pane" id="tab_search">
	<div class="panel panel-default" style="margin-top:10px">
		<div class="panel-heading">
			Search Result(s):
		</div>
		<div class="panel-body">  
		<?Php	if ($search_results != null){	?>
					<ul>
					<?Php	foreach($search_results as $row){	?>
								<li>
								<?Php
									echo "Student no.: {$row->stud_no}";
									echo br();			
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
									echo anchor('view_Modal', "Name: {$row->name}", $attr);
									echo br();
									echo "Classification: {$row->classification}";
									echo br(2);
								?>
								</li>
					<?Php	}	?>
					</ul>
		<?Php	}else	echo "No Students Found.";	?>
		</div>
	</div>
</div>