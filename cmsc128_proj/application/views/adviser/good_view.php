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
				// if the percentage is less than 25%, the student's academic standing is classified as GOOD
				if ($percentage < 0.25) {
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