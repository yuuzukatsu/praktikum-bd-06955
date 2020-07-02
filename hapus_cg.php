<?php
include 'connect.php';
?>
<h1></h1>
<form method=POST>
<h3>Hapus No Case <?php echo $_GET['id'];?> ?</h3>
<input type='submit' name='submit'> <a href='case_gangguan.php'>Kembali</a>
</form>
<?php
if(isset($_POST['submit'])){
	$q = "delete from case_gangguan where no_case ='".$_GET['id']."'";
	$parsesql = oci_parse($conn, $q);
	oci_execute($parsesql);
	header('Location: case_gangguan.php');
}
?>

