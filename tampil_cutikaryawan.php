<?php
include "koneksi.php";
?>

<h1>List Karyawan</h1>
<table border="1">
	<tr>
		<td>No</td>
		<td>Nama Karyawan</td>
		<td>Cuti Karyawan</td>
		<td colspan="2">Action</td>

	</tr>
	<?php 
		$no=1;
		$query=mysqli_query($koneksi, "select * from karyawan");
		while ($list_karyawan=mysqli_fetch_array($query))
		{
		?>

	<tr>
		<td><?php echo $no++;?></td>
		<td><?php echo $list_karyawan['nama_karyawan'];?></td>
		<td><?php echo $list_karyawan['cuti_karyawan'];?>
	</tr>
		<?php } ?>

</table>