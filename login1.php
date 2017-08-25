<?php 

 require('dblog.php'); 
     session_start();
   
    $errors = array();
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){


    if(preg_match("/\S+/", $_POST['username']) === 0){
        $errors['name'] = "* Name is required.";
    }
    if(preg_match("/\S+/", $_POST['password']) === 0){
        $errors['password'] = "* Password is required.";
    }
    
    if(count($errors) === 0){
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        

        $search_query = mysqli_query($conn, "SELECT user_name,password FROM login WHERE user_name = '$username' LIMIT 1");
        $num_row = mysqli_num_rows($search_query);
        $abc = mysqli_fetch_array($search_query);
        if($num_row < 1){
            $errors['username'] = "Invalid User.";
        }
        elseif($password !== $abc['password']){
            $errors['password'] = "Invalid Password. ";
        }else{
            header('Location: index.php');

        }
    }
}
            
            $_POST['username'] = '';
            $_POST['password'] = '';
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

    <title>Login Page</title>

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
</head>

  <body class="login-img3-body">

    <div class="container">

      <form class="login-form" action="login1.php" method="post">        
        <div class="login-wrap">
            <p class="login-img"><i class="icon_lock_alt"></i></p>
            <p class=""></p>
            <div class="input-group">
              <span class="input-group-addon"><i class="icon_profile"></i></span>
              <input type="text" name="username" class="form-control" placeholder="Username" autofocus>
            </div>
            <div class="input-group">
                <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                <input type="password" name="password" class="form-control" placeholder="Password">
            </div>
            <label class="checkbox">
                <span class="pull-right"> <a href="#"> Forgot Password?</a></span>
            </label>
            <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
        </div>
      </form>
    
    </div>


  </body>
</html>
