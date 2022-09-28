<?php 
include('server.php')
?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration</title>
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
  <form method="post" action="register.php">
    <div class="header">
       <h2>Register</h2>
    </div>
  	<?php include('errors.php'); ?>
  	<div class="input-group animated bounceInLeft">
      <i class="fa fa-user"></i>
  	  <input type="text" name="username" value="<?php echo $username; ?>" placeholder="Student or Techer Name width Father Name">
  	</div>
  	<div class="input-group animated bounceInRight">
      <i class="fa fa-puzzle-piece" aria-hidden="true"></i>
  	  <!-- <input type="email" name="email" value="<?php echo $email; ?>" placeholder="Email"> -->
      <select class="select-classs" name="email" value="<?php echo $email; ?>">
            <option value="---">Student or Teacher select class</option>
            <option value="nursary">nursary</option>
            <option value="montisary">montisary</option>
            <option value="kg 1">kg 1</option>
            <option value="kg 2">kg 2</option>
            <option value="class 1">class 1</option>
            <option value="class 2">class 2</option>
            <option value="class 3">class 3</option>
            <option value="class 4">class 4</option>
            <option value="class 5">class 5</option>
            <option value="class 6">class 6</option>
            <option value="class 7">class 7</option>
            <option value="class 8">class 8</option>
            <option value="class 9">class 9</option>
            <option value="class 10">class 10</option>
            <option value="Teacher">teacher</option>
      </select>      
  	</div>
  	<div class="input-group animated bounceInLeft">
  	  <i class="fa fa-lock"></i>
  	  <input type="password" name="password_1" placeholder="password">
  	</div>
  	<div class="input-group animated bounceInRight">
  	  <i class="fa fa-lock"></i>
  	  <input type="password" name="password_2" placeholder="Confirm password">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="index.php">Sign in</a>
  	</p>
  </form> 
</div>  
</div>
<script src="js/jquery.js"></script>
<script src="js/myQuery.js"></script> 
</body>
</html>