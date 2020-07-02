<?php
include 'connect.php';
$q = "select * from pelanggan where id_pelanggan='".$_GET['id']."'";
echo $q;
$parsesql = oci_parse($conn, $q);
oci_execute($parsesql);
$rows=oci_fetch_object($parsesql);
?>
<h1>Edit Case Gangguan</h1>
<form method=POST>
<table>
<tr><td>ID Pelanggan</td><td><input type=text name='id_pelanggan' value='<?php echo $rows->ID_PELANGGAN; ?>'</td></tr>
<tr><td>Nama Pelanggan</td><td><input type=text name='nama_pelanggan' value='<?php echo $rows->NAMA_PELANGGAN; ?>'></td></tr>
<tr><td>Kontak Pelanggan</td><td><input type=text name='kontak_pelanggan' value='<?php echo $rows->KONTAK_PELANGGAN; ?>'></td></tr>
<tr><td>Alamat Pelanggan</td><td><input type=text name='alamat_pelanggan' value='<?php echo $rows->ALAMAT_PELANGGAN; ?>'></td></tr>
<tr><td rowspan='2'><input type=submit name='submit'></td></tr>
</table>
</form>
<?php
if(isset($_POST['submit'])){

	$id_pelanggan = $_POST['id_pelanggan'];
	$nama_pelanggan = $_POST['nama_pelanggan'];
	$kontak_pelanggan = $_POST['kontak_pelanggan'];
	$alamat_pelanggan = $_POST['alamat_pelanggan'];
	$q = "update pelanggan set id_pelanggan='".$id_pelanggan."',nama_pelanggan='".$nama_pelanggan."', kontak_pelanggan='".$kontak_pelanggan."',alamat_pelanggan='".$alamat_pelanggan."' where id_pelanggan = '".$_GET['id']."';";
	echo $q;
	$parsesql = oci_parse($conn, $q);
	oci_execute($parsesql);
}
?>
<a href="add_cg.php">Tambah</a><br>
<a href="..">Kembali</a>


