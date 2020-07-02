<?php
include 'connect.php';
?>
<h1></h1>
<form method=POST>
<h3>Hapus ID Helpdesk <?php echo $_GET['id'];?> ?</h3>
<input type='submit' name='submit'> <a href='helpdesk.php'>Kembali</a>
</form>
<?php
if(isset($_POST['submit'])){
	$q = "delete from helpdesk where id_helpdesk ='".$_GET['id']."'";
	$parsesql = oci_parse($conn, $q);
	oci_execute($parsesql);
	header('Location: helpdesk.php');
}
?>

