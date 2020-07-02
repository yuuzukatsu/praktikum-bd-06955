<?php
include 'connect.php';
?>
<h1>Tabel Helpdesk</h1>
<?php
$q = "select * from helpdesk";
$parsesql = oci_parse($conn, $q);
oci_execute($parsesql);
echo "
	<table border=1>
	<tr>
		<td>ID Helpdesk</td>
		<td>Nama Helpdesk</td>
		<td>Kontak Helpdesk</td>
		<td></td>
	</tr>
	";
while($rows=oci_fetch_object($parsesql)){
	echo "
	<tr>
		<td>".$rows->ID_HELPDESK."</td>
		<td>".$rows->NAMA_HELPDESK."</td>
		<td>".$rows->KONTAK_HELPDESK."</td>
		<td><a href='edit_hd.php?id=".$rows->ID_HELPDESK."'>Edit</a> || <a href='hapus_hd.php?id=".$rows->ID_HELPDESK."'>Hapus</a></td>
	</tr>
	";
}
echo "
	</table>
	";
?>

<a href="add_hd.php">Tambah</a><br>
