<!-- File 2: form.php -->
<HTML>
<HEAD>
<TITLE>Dream Home Property</TITLE>
</HEAD>
<BODY>
<DIV ALIGN="center">
<?php
require_once '../koneksi.php';

if($_GET['action']=="edit")
{
  $query = "SELECT branchno,street,city,postcode FROM branch WHERE branchno= '".$_GET['branchno']."'";
  $hasil = mysql_query($query,$koneksi);
  $data = mysql_fetch_array($hasil);
  $branchno = $data[0];
  $street   = $data[1];
  $city     = $data[2];
  $postcode = $data[3];
  $judul="FORM EDIT DATA";
  echo $judul;
 
}
else if($_GET['action']=="tambah")
{
  $branchno = "";
  $street   = "";
  $city     = "";
  $postcode = "";
  $judul="FORM TAMBAH DATA";
  echo $judul;
 
}else if($_GET['action']=="hapus")
{
	$query = "SELECT branchno,street,city,postcode FROM branch WHERE branchno= '".$_GET['branchno']."'";
  $hasil = mysql_query($query,$koneksi);
  while($data = mysql_fetch_array($hasil)){
  $branchno = $data['branchno'];
  $street   = $data['street'];
  $city     = $data['city'];
  $postcode = $data['postcode'];
  }
  $judul="FORM Hapus Data DATA";
  echo $judul;
}
	
?>
<FORM action="proses.php" method="post">
<TABLE>
<TR>
  <TD>Branch No</TD>
  <TD>: <INPUT TYPE="text" Name="new_branchno" VALUE="<?php echo "$_GET[branchno]";?>"></TD>
</TR>
<TR>
  <TD>Street</TD>
  <TD>: <INPUT TYPE="text" Name="new_street" VALUE="<?php echo "$_GET[street]";?>"></TD>
</TR>
<TR>
  <TD>City</TD>
  <TD>: <INPUT TYPE="text" Name="new_city" VALUE="<?php echo "$_GET[city]";?>"></TD>
<TR>
  <TD>Post Code</TD>
  <TD>: <INPUT TYPE="text" Name="new_postcode" VALUE="<?php echo "$_GET[postcode]";?>"></TD>
</TR>
<TR>
  <TD COLSPAN="2" ALIGN="center">
    <INPUT TYPE="hidden" NAME="branchno" VALUE="<?php echo "$_GET[branchno]";?>">
    <INPUT TYPE="hidden" NAME="action" VALUE="<?php echo "$_GET[action]";?>"><p>
    <INPUT TYPE="submit" VALUE="PROSES">
  </TD>
</TR>
</TABLE>
</FORM>
</DIV>
</BODY>
</HTML>