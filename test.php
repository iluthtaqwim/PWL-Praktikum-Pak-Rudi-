<?php

$username   = $_POST['username'];
$pass       = $_POST['password'];
if($username === "muza" && $pass === "secret"){
    header("location:dashboard.php");
}else{
    header("location:index.php");
}

class Authenticator{
   

    function test(){
        echo $username;
    }
}


?>