<?php
include 'connect.php';
?>
<h1>Tambah Case Gangguan</h1>
<form method=POST>
<table>
<tr><td>Nomor Case</td><td><input type=number name='no_case'></td></tr>
<tr><td>Tanggal</td><td><input type=date name='tanggal'></td></tr>
<tr><td>ID Pelanggan</td><td><input type=number name='id_pelanggan'></td></tr>
<tr><td>ID Helpdesk</td><td><input type=number name='id_helpdesk'></td></tr>
<tr><td>Komplain</td><td><input type=text name='komplain'></td></tr>
<tr><td rowspan='2'><input type=submit name='submit'></td></tr>
</table>
</form>
<?php
if(isset($_POST['submit'])){
	$no_case = $_POST['no_case'];
	$tanggal = $_POST['tanggal'];
	$id_pelanggan = $_POST['id_pelanggan'];
	$id_helpdesk = $_POST['id_helpdesk'];
	$komplain = $_POST['komplain'];
	$q = "insert into case_gangguan values(".$no_case.", to_date('".$tanggal."','yyyy/mm/dd'), ".$id_pelanggan.", ".$id_helpdesk.", '".$komplain."')";
	echo $q;
	$parsesql = oci_parse($conn, $q);
	oci_execute($parsesql);
}
?>
<a href="add_cg.php">Tambah</a><br>
<a href="..">Kembali</a>


