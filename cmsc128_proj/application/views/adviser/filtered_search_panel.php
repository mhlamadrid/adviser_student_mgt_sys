<div class="panel panel-primary">
<!-- Default panel contents -->
	<div class="panel-heading">FILTERED SEARCH</div>
						
	<div class="panel-body">
		<p>Description of filtered search</p>
							
		<div class="form-group">
			<select id="selectCategory" class="form-control">
				<option value="searchStudent">Student</option>
				<option value="searchRegistered">Registered</option>
				<option value="searchGraduated">Graduated</option>
				<option value="searchPrevious">Previous</option>
				<option value="searchDismissed">Dismissed</option>
			</select>
		</div>		
	
		<!--SEARCH BY NAME-->
		<div class="drpSearch" id="searchStudent">
			<?= form_open('adviser_control/search_student');?>	
				<div class="form-group">
				<?Php
					$data = array(
						'class'     => "form-control",
						'id'		=> 'title',
						'name'      => 'title',
						'placeholder' => 'search student',
						'maxlength'   => '20'
						);
					echo form_input($data);
				?>
				</div>

				<div class="form-group">
				<?Php
					$attr = array(
						'value'         => 'Search',
						'class' 	 	=> "btn btn-primary btn-search",
						);
					echo form_submit($attr);
				?>			
				</div>

			<?= form_close();?>	
		</div>
				
		<!--View Registered-->
		<div class="drpSearch" id="searchRegistered">
			<?= form_open('adviser_control/search_registered');		
				$attr = array(
					'value'         => 'View All',
					'class' 	 	=> "btn btn-primary btn-search",
					);
				echo form_submit($attr);
				echo form_close();
			?>
		</div>

		<!--SEARCH BY Graduation sem-->
		<div class="drpSearch" id="searchGraduated">
		<?= form_open('adviser_control/search_graduated');
			if ($graduate_years != null){
		?>
			<div class="form-group">
				<select id="selectCategory" class="form-control">
				<?Php	foreach ($graduate_years as $row){ ?>
							<option><?= $row?></option>
				<?Php	}?>
				</select>
			</div>
		<?Php
			}
			
			$attr = array(
							'value'         => 'View All',
							'class' 	 	=> "btn btn-primary btn-search",
							);
						echo form_submit($attr);
			echo form_close();
		?>
		</div>

		<!--View Previous-->
			<div class="drpSearch" id="searchPrevious">
				<?= form_open('adviser_control/search_previous');
						$attr = array(
							'value'         => 'View All',
							'class' 	 	=> "btn btn-primary btn-search",
							);
						echo form_submit($attr);
						echo form_close();
				?>	
			</div>

		<!--View Dismissed-->
			<div class="drpSearch" id="searchDismissed">
			<?= form_open('adviser_control/search_dismissed');
				$attr = array(
					'value'         => 'View All',
					'class' 	 	=> "btn btn-primary btn-search",
					);
				echo form_submit($attr);
				echo form_close();
			?>	
			</div>
	</div>
</div>