<table border="1" cellpadding="10">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Prodi</th>
		</tr>
	</thead>
	<tbody>
<?php  
foreach($Mahasiswa as $row) {
?>
		<tr>
			<td><?php echo $row['no']; ?></td>
			<td><?php echo $row['nama']; ?></td>
			<td><?php echo $row['prodi']; ?></td>
		</tr>
<?php  
} ?>
	</tbody>
</table>