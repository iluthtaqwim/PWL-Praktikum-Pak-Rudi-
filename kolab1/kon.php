<?php
$server = 'localhost';
$username = 'root';
$password = '';
$database = 'kolaborasi';
$con = mysql_connect($server,$username,$password);
mysql_select_db($database) or die("Database belum
ada, silahkan import database");

if ($con) {
   echo "koneksi berhasil";
}
else {
	echo "koneksi gagal";
}
?>