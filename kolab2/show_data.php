<?php

  //session_start();
  include '../koneksi.php';
  //include "../pengguna.php";
  //include "../set.php";

?><!-- File 1: show_data.php -->
<HTML>
<HEAD>
<TITLE>Dream Home Property</TITLE>
</HEAD>
<BODY>
<DIV ALIGN="center">
<B>DREAM HOME PROPERTY</B><P>
<TABLE BORDER="2" BORDERCOLOR="#666666" CELLSPACING="2" CELLPADDING="2">
<TR>
  <TH>BRANCH NO</TH>
  <TH>STREET</TH>
  <TH>CITY</TH>
  <TH>POST CODE</TH>
  <TH COLSPAN="2">&nbsp;</TH>
</TR>
<?php
require_once '../koneksi.php';

$query = "SELECT * from branch";
$hasil = mysql_query($query,$koneksi);
while($data = mysql_fetch_array($hasil))
{
  echo '<TR><td>'.$data['branchNo'].'</td>
                    <td>'.$data['street'].'</td>
                    <td>'.$data['city'].'</td>
                    <td>'.$data['postCode'].'</td>
                    <td>
       <TD><a href=\'form.php?action=edit&branchno='.$data['branchNo'].'\'>Edit</a></TD>
       <TD><a href=\'form.php?action=hapus&branchno='.$data['branchNo'].'\'>Hapus</a></TD></TR>';
}
?>
</TABLE>
<A HREF="form.php?action=tambah">TAMBAH DATA</A>
</DIV>
</BODY>
</HTML>