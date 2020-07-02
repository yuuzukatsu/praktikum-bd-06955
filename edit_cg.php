<?php
include 'connect.php';
$q = "select * from case_gangguan where no_case='".$_GET['id']."'";
//echo $q;
$parsesql = oci_parse($conn, $q);
oci_execute($parsesql);
$rows=oci_fetch_object($parsesql);
?>
<h1>Edit Case Gangguan</h1>
<form method=POST>
<table>
<tr><td>Nomor Case</td><td><input type=number name='no_case' value='<?php echo $rows->NO_CASE; ?>'></td></tr>
<tr><td>Tanggal</td><td><input type=date name='tanggal' value='<?php echo date('Y-m-d',strtotime($rows->TANGGAL)); ?>'></td></tr>
<tr><td>ID Pelanggan</td><td><input type=number name='id_pelanggan'  value='<?php echo $rows->ID_PELANGGAN; ?>'></td></tr>
<tr><td>ID Helpdesk</td><td><input type=number name='id_helpdesk' value='<?php echo $rows->ID_HELPDESK; ?>'></td></tr>
<tr><td>Komplain</td><td><input type=text name='komplain' value='<?php echo $rows->KOMPLAIN; ?>'></td></tr>
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
	$q = "update case_gangguan set no_case='".$no_case."',tanggal=to_date('".$tanggal."','yyyy/mm/dd'),id_pelanggan='".$id_pelanggan."',id_helpdesk='".$id_helpdesk."',komplain='".$komplain."' where no_case = '".$_GET['id']."'";
	//echo $q;
	$parsesql = oci_parse($conn, $q);
	oci_execute($parsesql);
}
?>
<a href="case_gangguan.php">Kembali</a>


