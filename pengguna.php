<?php
$admin 			= $_SESSION['username'];
$data_us		= mysql_query("SELECT * FROM login  WHERE username  ='$admin'");
$nama 			= mysql_fetch_object($data_us);

?>

