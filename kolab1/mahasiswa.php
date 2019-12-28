<?php
require_once '../koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
<style type="text/css">
<!--
.style1 {color: #FFFFFF}
-->
</style>
</head>
<body>
<h3>TABEL MAHASISWA</h3>
<table cellpadding="0" cellspacing="0" border="1px"
class="table">
<thead>
<tr bgcolor="#000033">
<th><CENTER style="">
<span class="style1">Nim </span></th>
<th><CENTER style="">
<span class="style1">Nama</span></th>
<th><CENTER style="">
<span class="style1">Kelas</span></th>
</tr>
</thead>
<tbody>
<?php
$query = mysql_query("SELECT * FROM tb_mahasiswa");
while ($record = mysql_fetch_array($query)) {
?>
<tr class="active">
<td> <CENTER style=""><?php echo
$record['nim']; ?></td>
<td> <?php echo $record['nama'];
?></td>
<td> <?php echo $record['kelas']; ?></td>
</tr>
<?php } ?>
</tbody>
</table>
</body>
</html>