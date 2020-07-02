<?php
include 'connect.php';
?>
<h1>Tambah Pelanggan</h1>
<form method=POST>
<table>
<tr><td>ID Pelanggan</td><td><input type=number name='id_pelanggan'></td></tr>
<tr><td>Nama Pelanggan</td><td><input type=text name='nama_pelanggan'></td></tr>
<tr><td>Kontak Pelanggan</td><td><input type=text name='kontak_pelanggan'></td></tr>
<tr><td>Alamat Pelanggan</td><td><input type=text name='alamat_pelanggan'></td></tr>
<tr><td rowspan='2'><input type=submit name='submit'></td></tr>
</table>
</form>
<?php
if(isset($_POST['submit'])){

	$id_pelanggan = $_POST['id_pelanggan'];
	$nama_pelanggan = $_POST['nama_pelanggan'];
	$kontak_pelanggan = $_POST['kontak_pelanggan'];
	$alamat_pelanggan = $_POST['alamat_pelanggan'];
	$q = "insert into pelanggan values(".$id_pelanggan.",'".$nama_pelanggan."',".$kontak_pelanggan.",'".$alamat_pelanggan."')";
	//echo $q;
	$parsesql = oci_parse($conn, $q);
	oci_execute($parsesql);
}
?>
<a href="add_cg.php">Tambah</a><br>
<a href="pelanggan.php">Kembali</a>


