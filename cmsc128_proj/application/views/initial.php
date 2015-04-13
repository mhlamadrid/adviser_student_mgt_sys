<!-- PRINTS ALL THE LIST OF ADVISEES -->
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
                <tr>
                    <td><?=$field['StudentNumber']?></td>
                   <td><?=$field['Year']?></td>
                    <td><?=$field['Sem']?></td>
					<td><?=$field['UnitsReg']?></td>
                    <td><?=$field['UnitsEarned']?></td>
                </tr>
            <?php }?>
	</tbody>

</table>