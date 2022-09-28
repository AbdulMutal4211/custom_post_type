<?php 
include('server.php') 
?>
<!DOCTYPE html>
<html>
<head>
  <title>Login to webapplication</title>
  <link rel="icon" href="webimages/logo.png" type="image/gif" sizes="16x16">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" type="text/css" href="css/login.css">
  <link rel="stylesheet" type="text/css" href="css/animate.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="parant"> 
   <div class="upload-box card">
        <form method="post" action="index.php">
            <div class="header">
              <h2>Login</h2>
            </div>    
  	        <?php include('errors.php'); ?>
      	    <div class="input-group animated bounceInRight">
  	     	    <i class="fa fa-user"></i>
  		        <input type="text" name="username" class="username" placeholder="Student or Techer Name" >
  	        </div>
  	        <div class="input-group animated bounceInLeft">
  	     	    <i class="fa fa-lock"></i>
  		        <input type="password" name="password" class="pass" placeholder="Password">
  	        </div>
  	        <div class="input-group">
  	     	    <button type="submit" class="btn" name="login_user">Login</button>
  	        </div>
  	        <p>Not yet a member? <a href="register.php">Sign up</a></p>
       </form>
    </div>
</div>
<script src="js/jquery.js"></script>
<script src="js/myQuery.js"></script>
</body>
</html>