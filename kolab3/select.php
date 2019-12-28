<?php

  //session_start()
require_once '../koneksi.php';
  //include "../pengguna.php";
  //include "../set.php";

?>
<table>
  <a href="insert.php" style="color: #466BF3">Tambah Data</a>
</table>
</br>
<TABLE BORDER="2" BORDERCOLOR="#666666" CELLSPACING="2" CELLPADDING="2">
<TR>
  <TH>NPM</TH>
  <TH>Nama</TH>
  <TH>Tanggal Lahir</TH>
  <TH>Tempat Lahir</TH>
  <TH>Jenis Kelamin</TH>
  <TH>Tentang Saya</TH>
  
    <TH COLSPAN="2">Aksi</TH>
</TR>
<?php
$koneksi = mysqli_connect("localhost","root","");
mysqli_select_db($koneksi,"kolaborasi");

$query = "SELECT * from mahasiswa";
$hasil = mysqli_query($koneksi,$query);
while($data = mysqli_fetch_array($hasil))
{
  echo '<TR><td>'.$data['npm'].'</td>
                    <td>'.$data['nama'].'</td>
                    <td>'.$data['tanggal_lahir'].'</td>
                    <td>'.$data['tempat_lahir'].'</td>
					<td>'.$data['jenis_kelamin'].'</td>
					<td>'.$data['tentang_saya'].'</td>
                    <td>
          
       <TD><a href=\'update.php?action=edit&npm='.$data['npm'].'\'>Edit</a></TD>
       <TD><a href=\'delete.php?action=hapus&npm='.$data['npm'].'\'>Hapus</a></TD></TR>';
}
?>
</TABLE>
