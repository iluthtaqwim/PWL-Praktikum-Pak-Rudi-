
<!DOCTYPE html>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="style.css" />
<!------ Include the above in your HEAD tag ---------->

<body>
<?php
     $usernameErr = $passErr = "";


            if($_SERVER["REQUEST_METHOD"] == "POST"){
 
                if(empty($_POST['username'])){
                    $usernameErr = "Username harus di isi";
                    
                }else{
                    $username = test_input($_POST['username']);
                    
                }
        
                if (empty($_POST['password'])) {
                    $passErr = "Password harus di isi";
                } else {
                    $pass = test_input($_POST['password']);
                }
                
                  
            }
            if (empty($_POST['username']) || empty($_POST['password'])) {
                        } else {
                header("location:dashboard.php");
            }
            
            function test_input($data) {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;

            }
?>
    <div id="login">
        <h3 class="text-center text-white pt-5">Login form</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
                            <h3 class="text-center text-info">Login</h3>
                            <div class="form-group">
                                <label for="username" class="text-info">Username:</label><br>
                                <input type="text" name="username" id="username" class="form-control">
                                <span style="color:#ff0000"> <?php echo $usernameErr;?></span>
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="password" name="password" id="password" class="form-control">
                                <span style="color:#ff0000"><?php echo $passErr; ?></span>
                            </div>
                            <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<?php
   

  
          


   ?>