<table border="1" cellpadding="10">
	<thead>
		<tr>
			<th>No</th>
			<th>Tahun</th>
		</tr>
	</thead>
	<tbody>
<?php  
foreach($Angkatan as $row) {
?>
		<tr>
			<td><?php echo $row['no']; ?></td>
			<td><?php echo $row['tahun']; ?></td>
		</tr>
<?php  
} ?>
	</tbody>
</table>