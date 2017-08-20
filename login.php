<?php 
    session_start();
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Login Page 2 | Creative - Bootstrap 3 Responsive Admin Template</title>

    <!-- Bootstrap CSS -->    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <?php

include('dblog.php');
// session_start();       //<<----------------------------------------- Session

if(isset($_POST["submit"])){

// Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
//if ($conn->connect_error) {
//die("Connection failed: " . $conn->connect_error); }

$myusername = mysqli_real_escape_string($conn,$_POST['stu_email']);
$mypassword = mysqli_real_escape_string($conn,$_POST['stu_pw']); 

$sql = " SELECT fname FROM users WHERE email = '$myusername' and password = '$mypassword' " ;
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
//$active = $row['active'];
echo $count = mysqli_num_rows($result);
    
// If result matched $myusername and $mypassword, table row must be 1 row
        
if($count == 1) {
    //session_register("myusername");
    $_SESSION['login_user'] = $myusername;



         
    header("location: index.php"); // <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<< Landing page
                }
else {
echo "<br>" . "<h2>Sorry! Your Login Name or Password is invalid</h2>";
echo "<script type= 'text/javascript'>alert('Sorry! Your Login Name or Password is invalid');</script>";
}      

$conn->close();
}
?>
</head>

  <body class="login-img3-body">

    <div class="container">

      <form class="login-form" action="index.php">        
        <div class="login-wrap">
            <p class="login-img"><i class="icon_lock_alt"></i></p>
            <div class="input-group">
            <!--jgjgjjj-->
              <input class="form-control" type="email" name="stu_email" id="email" required="required" placeholder="Username" autofocus>
            </div>
            <div class="input-group">
                <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                <input class="form-control"  type="password" name="stu_pw" id="password" required="required" placeholder="Password">
            </div>
            <label class="checkbox">
                <input type="checkbox" value="remember-me"> Remember me
                <span class="pull-right"> <a href="#"> Forgot Password?</a></span>
            </label>
            <button class="btn btn-primary btn-lg btn-block"  type="submit" value="Login" name="submit">Login</button>
        </div>
      </form>
    <div class="text-right">
            <div class="credits">
                <!-- 
                    All the links in the footer should remain intact. 
                    You can delete the links only if you purchased the pro version.
                    Licensing information: https://bootstrapmade.com/license/
                    Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
                -->
                <a href="https://bootstrapmade.com/free-business-bootstrap-themes-website-templates/">Business Bootstrap Themes</a> by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
    </div>

    


  </body>
</html>


