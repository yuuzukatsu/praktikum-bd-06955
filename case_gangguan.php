<?php
include 'connect.php';
?>
<h1>Tabel Case Gangguan</h1>
<?php
$q = "select * from case_gangguan";
$parsesql = oci_parse($conn, $q);
oci_execute($parsesql);
echo "
	<table border=1>
	<tr>
		<td>No Case</td>
		<td>Tanggal</td>
		<td>ID Pelanggan</td>
		<td>ID Helpdesk</td>
		<td>Komplain</td>
		<td></td>
	</tr>
	";
while($rows=oci_fetch_object($parsesql)){
	echo "
	<tr>
		<td>".$rows->NO_CASE."</td>
		<td>".$rows->TANGGAL."</td>
		<td>".$rows->ID_PELANGGAN."</td>
		<td>".$rows->ID_HELPDESK."</td>
		<td>".$rows->KOMPLAIN."</td>
		<td><a href='edit_cg.php?id=".$rows->NO_CASE."'>Edit</a> || <a href='hapus_cg.php?id=".$rows->NO_CASE."'>Hapus</a></td>
	</tr>
	";
}
echo "
	</table>
	";
?>
<a href="add_cg.php">Tambah</a><br>
<a href="..">Kembali</a>
