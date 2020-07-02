<?php
include 'connect.php';
?>
<h1>Tambah Helpdesk</h1>
<form method=POST>
<table>
<tr><td>ID Helpdesk</td><td><input type=number name='id_helpdesk'></td></tr>
<tr><td>Nama Helpdesk</td><td><input type=text name='nama_helpdesk'></td></tr>
<tr><td>Kontak Helpdesk</td><td><input type=text name='kontak_helpdesk'></td></tr>
<tr><td rowspan='2'><input type=submit name='submit'></td></tr>
</table>
</form>
<?php
if(isset($_POST['submit'])){

	$id_helpdesk = $_POST['id_helpdesk'];
	$nama_helpdesk = $_POST['nama_helpdesk'];
	$kontak_helpdesk = $_POST['kontak_helpdesk'];
	$q = "insert into helpdesk values(".$id_helpdesk.",'".$nama_helpdesk."','".$kontak_helpdesk."')";
	echo $q;
	$parsesql = oci_parse($conn, $q);
	oci_execute($parsesql);
}
?>
<a href="helpdesk.php">Kembali</a>


