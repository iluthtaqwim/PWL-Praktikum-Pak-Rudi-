<?php
$koneksi = mysql_connect("localhost", "root", "");
if (!$koneksi) {
    die('Koneksi gagal: ' . mysql_error());
}

mysql_select_db("kolaborasi", $koneksi);

?>
