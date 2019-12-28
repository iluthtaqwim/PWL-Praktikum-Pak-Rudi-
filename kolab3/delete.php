<?php

require_once '../koneksi.php';

if($_GET['action']=="hapus")
{
  $query = "DELETE from mahasiswa WHERE npm='".$_GET['npm']."'";
  $hasil = mysqli_query($koneksi,$query);
  if($hasil)
  {
	header("Location: select.php");
  }
  
}
?>
