<?php

session_start();
require_once 'koneksi.php';

if ($_SESSION['username']=='') 
{
	header("location:login.php");
}

echo "selamat datang ".$_SESSION['username'];


?>
<style type="text/css">
  a.button {
    -webkit-appearance: button;
    -moz-appearance: button;
    appearance: button;

    text-decoration: none;
    color: lightblue;
}
</style>
<table>
<TR>
<th><a href="./kolab1/join.php" class="button">Sistem 1</a></th>
<th><a href="./kolab2/index.php" class="button">Sistem 2</a></th>
<th><a href="./kolab3/index.php" class="button">Sistem 3</a></th>
</TR>
</table>

</br>
<a href="./logout.php">logout</a>
