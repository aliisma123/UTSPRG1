<?php
include "koneksi.php";
if(isset($_POST['Save'])){
	$nama=$_POST['nama_karyawan'];
	$cuti=$_POST['cuti_karyawan'];

$query=mysqli_query($koneksi,"insert into karyawan(nama_karyawan,cuti_karyawan)
value ('$nama_karyawan',
'$cuti_karyawan')");
if($query){
	header("location:tampil_cutikaryawan.php");
}else{
	echo mysqli_error();
}
}

?>
<form method ="POST">
<table border="1">
	<tr>
		<td>Nama Karyawan</td>
		<td>Ambil Cuti</td>
	</tr>
	<tr>
		<td><input type="text" name="nama_karyawan"></td>
		<td><select name="cuti_karyawan">
			<option value="">-----Pilih-----</option>
			<option value="1hari">1 hari</option>
			<option value="2hari">2 hari</option>
		</select>
	</td>
	<Td>
		<button><input type="submit" name="Save" value="Simpan"></button>
	</Td>

	</tr>

</table>
</form>