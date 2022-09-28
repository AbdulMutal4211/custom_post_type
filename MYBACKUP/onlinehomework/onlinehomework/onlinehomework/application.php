<?php include('logics.php');?>  
<!DOCTYPE html>
<html>
<head>
	<title>Application Form</title>
	<link rel="icon" href="webimages/logo.png" type="image/gif" sizes="16x16">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<link rel="stylesheet" type="text/css" href="owl/css/owl.carousel.css">
	<link href="https://fonts.googleapis.com/css?family=Bebas+Neue|Montserrat&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
.file_box_outer {width: 100%;padding: 10px;height: auto;overflow: hidden;}    
</style>
<body>
<div class="header">
	<div class="logo">
		<a href="homework.php"><img src="images/logo.png"></a>
	</div>
	<div class="admin_btn_box">
		<h2><?php echo $_SESSION['username']; ?></h2>
	</div>
</div>

<div class="chat_body">
    <div class="mobile_tab"><i class="fa fa-angle-left" aria-hidden="true"></i> <span>Menu</span></div>
	<div class="user-panel">
	    <div class="mobile_tab_close"><i class="fa fa-times" aria-hidden="true"></i></div>
		<div class="user_info">
	       <div class="clm">
	           <ul>
	               <li><a href="homework.php">Home Works</a></li>
	               <li><a href="assignment.php">Vication Assignments</a></li>
	               <li><a href="#">Courses</a></li>
	               <li><a href="#">Annual Calendar</a></li>
	               <li><a href="application.php" class="active">Application Form <i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
	               <li><a href="jawascript:void(0)" id="Uhome">Upload Home Work</a></li>
	               <li><a href="index.php?logout='1'" >logout</a></li>
	           </ul>
	       </div>				
		</div>
	</div>
	<div class="chat_panel">
        <h1>Application Form</h1>
        <div class="file_box_outer">
	        <form name="myForm" action="" onsubmit="return validate()" method="post">
	       	    <div class="fields">
	       	    	<input type="text" name="fname" id="name" placeholder="Student full name / Teachers name with (miss) ">
	       	    	<input type="number" name="number" id="number" placeholder="Phone no">
	       	    </div>
	       	    <textarea class="text" name="message" placeholder="Students ya teachers ko kisi kism ki pareshani ye koi shikayat he to isi jaga likhiye"></textarea><br>
                <button class="submit" name="submit">Submit</button>
           </form>
        </div>
        <div class="send-msg"><?php echo $send; ?></div>
    </div>
	</div>
</div>
<!-- Modal -->
<div id="Uhome_pop" class="modal animated fadeIn myPop" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="Uhome_close close-btn" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <form action="upload.php" onsubmit="return validateForm()" method="post">
           <input type="password" id="mypass" placeholder="Password">
           <button id="set_pass" class="ok">OK</button>
        </form>
        <div id="error"></div>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript" src="js/my.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/myQuery.js"></script>
</body>
</html>