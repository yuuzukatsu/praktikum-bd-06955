<?php
include 'connect.php';
?>
<h1>Join</h1>
<?php
$q = "select no_case, pelanggan.id_pelanggan, (select nama_pelanggan from pelanggan where case_gangguan.id_pelanggan = pelanggan.id_pelanggan) as nama_pelanggan, helpdesk.nama_helpdesk from pelanggan
left join case_gangguan on case_gangguan.id_pelanggan = pelanggan.id_pelanggan
left join helpdesk on helpdesk.id_helpdesk = case_gangguan.id_helpdesk where case_gangguan.no_case > 0
";
$parsesql = oci_parse($conn, $q);
oci_execute($parsesql);
echo "
	<table border=1>
	<tr>
		<td>No Case</td>
		<td>ID Pelanggan</td>
		<td>Nama Pelanggan</td>
		<td>Nama Helpdesk</td>
	</tr>
	";
while($rows=oci_fetch_object($parsesql)){
	echo "
	<tr>
		<td>".$rows->NO_CASE."</td>
		<td>".$rows->ID_PELANGGAN."</td>
		<td>".$rows->NAMA_PELANGGAN."</td>
		<td>".$rows->NAMA_HELPDESK."</td>
	</tr>
	";
}
echo "
	</table>
	";
?>

<h1>VIEW</h1>
<?php
$q = "select * from soal2_1";
$parsesql = oci_parse($conn, $q);
oci_execute($parsesql);
echo "
	<table border=1>
	<tr>
		<td>No Case</td>
		<td>ID Pelanggan</td>
		<td>ID Helpdesk</td>
	</tr>
	";
while($rows=oci_fetch_object($parsesql)){
	echo "
	<tr>
		<td>".$rows->NO_CASE."</td>
		<td>".$rows->ID_PELANGGAN."</td>
		<td>".$rows->ID_HELPDESK."</td>
	</tr>
	";
}
echo "
	</table>
	";
?>
