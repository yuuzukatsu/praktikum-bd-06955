<?php
include 'connect.php';
?>
<h1>Tabel Case Gangguan</h1>
<?php
$q = "select * from pelanggan";
$parsesql = oci_parse($conn, $q);
oci_execute($parsesql);
echo "
	<table border=1>
	<tr>
		<td>ID Pelanggan</td>
		<td>Nama Pelanggan</td>
		<td>Kontak Pelanggan</td>
		<td>Alamat Pelanggan</td>
		<td></td>
	</tr>
	";
while($rows=oci_fetch_object($parsesql)){
	echo "
	<tr>
		<td>".$rows->ID_PELANGGAN."</td>
		<td>".$rows->NAMA_PELANGGAN."</td>
		<td>".$rows->KONTAK_PELANGGAN."</td>
		<td>".$rows->ALAMAT_PELANGGAN."</td>
		<td><a href='edit_pl.php?id=".$rows->ID_PELANGGAN."'>Edit</a> || <a href='hapus_pl.php?id=".$rows->ID_PELANGGAN."'>Hapus</a></td>
	</tr>
	";
}
echo "
	</table>
	";
?>

<a href="add_pl.php">Tambah</a><br>
<a href="..">Kembali</a>
