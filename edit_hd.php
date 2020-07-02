<?php
include 'connect.php';
$q = "select * from helpdesk where id_helpdesk='".$_GET['id']."'";
echo $q;
$parsesql = oci_parse($conn, $q);
oci_execute($parsesql);
$rows=oci_fetch_object($parsesql);
?>
<h1>Edit Helpdesk</h1>
<form method=POST>
<table>
<tr><td>ID Helpdesk</td><td><input type=number name='id_helpdesk' value='<?php echo $rows->ID_HELPDESK; ?>'></td></tr>
<tr><td>Nama Helpdesk</td><td><input type=text name='nama_helpdesk' value='<?php echo $rows->NAMA_HELPDESK; ?>'></td></tr>
<tr><td>Kontak Helpdesk</td><td><input type=text name='kontak_helpdesk' value='<?php echo $rows->KONTAK_HELPDESK; ?>'></td></tr>
<tr><td rowspan='2'><input type=submit name='submit'></td></tr>
</table>
</form>
<?php
if(isset($_POST['submit'])){
	$id_helpdesk = $_POST['id_helpdesk'];
	$nama_helpdesk = $_POST['nama_helpdesk'];
	$kontak_helpdesk = $_POST['kontak_helpdesk'];
	$q = "update helpdesk set id_helpdesk='".$id_helpdesk."',nama_helpdesk='".$nama_helpdesk."', kontak_helpdesk='".$kontak_helpdesk."' where id_helpdesk = '".$_GET['id']."'";
	//echo $q;
	$parsesql = oci_parse($conn, $q);
	oci_execute($parsesql);
}
?>
<a href="helpdesk.php">Kembali</a>


