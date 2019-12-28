<?php

require_once '../koneksi.php';

if($_GET['action']=="edit")
{
  $query = "SELECT npm,nama,tanggal_lahir,tempat_lahir,jenis_kelamin,tentang_saya FROM mahasiswa WHERE npm= '".$_GET['npm']."'";
  $hasil             = mysqli_query($koneksi,$query);
  $data              = mysqli_fetch_array($hasil);
  $NPM 				       = $data[0];
  $nama   			     = $data[1];
  $tanggal_lahir     = $data[2];
  $tempat_lahir 	   = $data[3];
  $jk				         = $data[4];
  $ts				         = $data[5];
  $judul="FORM EDIT DATA";
  echo $judul;
 
}

?>

<FORM action="#" method="post">
<TABLE>
<TR>
  <TD>NPM</TD>
  <TD>: <INPUT TYPE="text" Name="npm" value="<?php echo "$NPM";?>"></TD>
</TR>
<TR>
  <TD>Nama</TD>
  <TD>: <INPUT TYPE="text" Name="nama"></TD>
</TR>
<TR>
  <TD>Tanggal Lahir</TD>
  <TD>: <INPUT TYPE="date" Name="tanggal_lahir"></TD>
<TR>
  <TD>Tempat Lahir</TD>
  <TD>: <INPUT TYPE="text" Name="tempat_lahir"></TD>
</TR>
<TR>
  <TD>Jenis Kelamin</TD>
  <TD>: <select name="jenis_kelamin">
        <option value="men">laki - Laki</option>
        <option value="woman">Perempuan</option>
      </select></TD>
</TR>
<TR>
  <TD>Tentang Saya</TD>
  <TD>: <INPUT TYPE="text" Name="tentang_saya"></TD>
</TR>
<TR>
  <TD COLSPAN="2" ALIGN="center">
    <input type="submit" value="Submit" name="submit"> <input type="reset" value="Reset" name="reset">
  </TD>
</TR>
</TABLE>
</FORM>

<?php
if(isset($_POST['submit'])){
	
	
		$NPM 		= $_POST['npm'];
		$nama 		= $_POST['nama'];
		$tanggal 	= $_POST['tanggal_lahir'];
		$tempat		= $_POST['tempat_lahir'];
		$jk 		= $_POST['jenis_kelamin'];
		$ts 		= $_POST['tentang_saya'];
		
		$query = "UPDATE mahasiswa SET npm='$NPM',nama='$nama',tanggal_lahir='$tanggal',tempat_lahir='$tempat',jenis_kelamin='$jk',tentang_saya='$ts' WHERE npm='$NPM'";
		$pesan = "DATA TELAH DIUBAH";
		$hasil = mysqli_query($koneksi,$query);
		if($hasil)
  {
	header("Location: select.php");
  }else {
    echo "Error updating record: ".mysqli_error();
}
			
	}

?>
