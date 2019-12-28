<?php
require_once '../koneksi.php';
?>

<FORM action="#" method="post">
<TABLE>
<TR>
  <TD>NPM</TD>
  <TD>: <INPUT TYPE="text" Name="npm"></TD>
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
  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
	
		$NPM 		= $_POST['npm'];
		$nama 		= $_POST['nama'];
		$tanggal 	= $_POST['tanggal_lahir'];
		$tempat		= $_POST['tempat_lahir'];
		$jk 		= $_POST['jenis_kelamin'];
    $ts 		= $_POST['tentang_saya'];
    

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

      if (empty($_POST["npm"])) {
        $nameErr = "NPM is required";
      } else {
        $name = test_input($_POST["name"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^(\(?\+?[0-9]*\)?)?[0-9_\- \(\)]*$/",$name)) {
          $nameErr = "Only letters and white space allowed";
        }

      if (empty($_POST["nama"])) {
        $nameErr = "Name is required";
      } else {
        $name = test_input($_POST["nama"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
          $nameErr = "Only letters and white space allowed";
        }
      }
    
      }

      

		
		$query = "INSERT INTO mahasiswa (npm,nama,tanggal_lahir,tempat_lahir,jenis_kelamin,tentang_saya) VALUES('$NPM','$nama','$tanggal','$tempat','$jk','$ts')";
		$pesan = "DATA TELAH DITAMBAH";
		$hasil = mysqli_query($koneksi,$query);
		if($hasil)
  {
	header("Location: select.php");
  }
}
}

?>
