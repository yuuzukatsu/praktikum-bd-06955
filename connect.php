<?php
$username = "dimasf_06955"; 
$password = "dimasf"; 
$host = "localhost"; 
$port = "1521"; 
$db = "(DESCRIPTION=(ADDRESS = (PROTOCOL = TCP)(HOST = ".$host.")(PORT = ".$port."))(CONNECT_DATA=(SID=xe)))"; 
$conn = oci_connect($username, $password, $db); 
if(!$conn){
	echo "gagal";
}
?>