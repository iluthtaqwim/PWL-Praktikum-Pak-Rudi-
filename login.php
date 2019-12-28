
    <?php
   

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }

        session_start();
        require_once 'koneksi.php';

        $username   = $_POST['username'];
        $pass       = $_POST['password'];
 
        $query = mysqli_query($koneksi,"select * from login where username='$username' and password='$pass'");
        $chek = mysqli_fetch_array($query);
        if($chek)
        {
           
            $_SESSION['username']   = $chek['username'];
            $_SESSION['password']   = $chek['password'];
            // if($_SERVER["REQUEST_METHOD"]== "POST"){
            //     $usernameErr = $passErr ="";

            //     if(empty($username)){
            //         $usernameErr = "Username harus di isi";
                    
            //     }else{
            //         $username = test_input($_POST['username']);
                    
            //     }
        
            //     if (empty($pass)) {
            //         $passErr = "Password harus di isi";
            //     } else {
            //         $pass = test_input($_POST['password']);
            //     }
        
            //     // if (!empty($username && $pass) && $chek) {
            //     //     header("location:dashboard.php");
            //     // } else {
            //     //     header("location:index.php");
            //     // }
                
            // }
            header("location:dashboard.php");
        } 
        else{
            header("location:index.php");
        }


    ?>