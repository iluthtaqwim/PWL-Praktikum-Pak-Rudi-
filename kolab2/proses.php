<!-- File 3: proses.php -->
<HTML>
<HEAD>
<TITLE>Dream Home Property</TITLE>
</HEAD>
<BODY>
<?php
$new_branchno=$_POST['new_branchno'];
$new_street=$_POST['new_street'];
$new_city=$_POST['new_city'];
$new_postcode = $_POST['new_postcode'];
$branchno = $_POST['branchno'];  
require_once '../koneksi.php';

if($_POST['action']=="tambah")
{
  $query = "INSERT INTO branch (branchno,street,city,postcode) VALUES('$new_branchno','$new_street','$new_city','$new_postcode')";
  $pesan = "DATA TELAH DITAMBAH";
}
else if($_POST['action']=="edit")
{
  $query = "UPDATE branch SET branchno='$new_branchno',street='$new_street',city='$new_city',postcode='$new_postcode' WHERE branchno='$branchno'";
  $pesan = "DATA TELAH DIEDIT";
}
else if($_POST['action']=="hapus")
{
  $query = "DELETE from branch WHERE branchno='$_POST[branchno]'";
  $pesan = "DATA TELAH DIHAPUS";
}

$hasil = mysql_query($query,$koneksi);
if($hasil)
{
	echo $pesan;
}
else { echo "gagal"; }
?>
<P ALIGN="center"><A HREF=show_data.php>LIHAT DATA</A>
</BODY>
</HTML>