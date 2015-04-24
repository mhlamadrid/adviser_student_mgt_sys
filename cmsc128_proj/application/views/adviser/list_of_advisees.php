<!-- PRINTS ALL THE LIST OF ADVISEES -->
<table cellpadding="10" cellspacing="10" width="900">
	<thead>
			<th width="210">STUDENT NUMBER</th>
			<th width="150">YEAR</th>
			<th width="180">SEMESTER</th>
			<th width="180">UNITS REGISTERED</th>
			<th>UNITS EARNED</th>
	</thead>

	<tbody>
		<?php if(!empty($csvData)) { ?>
            <?php foreach($csvData as $field){?>
                <tr>
					<td><?=$field['StudentNumber']?></td>
					<td><?=$field['Year']?></td>
					<td><?=$field['Sem']?></td>
					<td><?=$field['UnitsReg']?></td>
					<td><?=$field['UnitsEarned']?></td>
                </tr>
            <?php }?>
		<?php } ?>
	</tbody>

</table>