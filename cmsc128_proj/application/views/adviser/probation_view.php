<table cellpadding="0" cellspacing="20" width="700">
	<thead>
			<th>STUDENT NUMBER</th>
			<th>YEAR</th>
			<th>SEMESTER</th>
			<th>UNITS REGISTERED</th>
			<th>UNITS EARNED</th>
	</thead>

	<tbody>
            <?php foreach($csvData as $field){?>
				<?php 
				// compute the percentage of units earned over units registered in a semester
				$percentage = ($field['UnitsEarned'] / $field['UnitsReg']);
				$percentage=1-$percentage;
				// if the percentage is greater than or equal to 50% and less than or equal to 75%, the student's academic standing is classified as PROBATION
				if (($percentage >= 0.5) && ($percentage <= 0.75)) {
					echo '<tr>
						<td>'.$field['StudentNumber'].'</td>
					   <td>'.$field['Year'].'</td>
						<td>'.$field['Sem'].'</td>
						<td>'.$field['UnitsReg'].'</td>
						<td>'.$field['UnitsEarned'].'</td>
					</tr>';
				} ?>
            <?php }?>
	</tbody>

</table>