<?php include('logics.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Class Four Assingnment</title>
	<link rel="icon" href="webimages/logo.png" type="image/gif" sizes="16x16">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<link rel="stylesheet" type="text/css" href="owl/css/owl.carousel.css">
	<link href="https://fonts.googleapis.com/css?family=Bebas+Neue|Montserrat&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

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
	               <li><a href="assignment.php" class="active">Vication Assignments <i class="fa fa-angle-right" aria-hidden="true"></i></i></a></li>
	               <li><a href="#">Courses</a></li>
	               <li><a href="#">Annual Calendar</a></li>
	               <li><a href="application.php">Application Form</a></li>
	               <li><a href="jawascript:void(0)" id="Uhome">Upload Home Work</a></li>
	               <li><a href="index.php?logout='1'" >logout</a></li>
	           </ul>
	       </div>				
		</div>
	</div>
	<div class="chat_panel">
        <h1>Class Four</h1>
        <div class="file_box_outer">
	    <div id="content">
	        <ul>
            <?php
                while ($row = mysqli_fetch_array($AC_Four)){

                   echo "<li>";
                   // echo "<div id='img_div'>";
      	           // echo "<img src='images/".$row['image']."' ><br>";
      	           // echo "<a href="images/".$row['image_text']."'</a>";
      	              echo "<a  href='images/".$row['image']."' target='blank' >".$row['image_text']."</a>";
                   // echo "</div>";
                   echo "</li>";
                }
            ?>
            </ul>
            <form method="POST" action="" enctype="multipart/form-data">
  	            <input type="hidden" name="size" value="1000000">
  	            <div class="upload-box">
  	               <!--<input type="file" name="image">-->
            </form>
        </div>
        </div>
        </div>
       <!-- <div id="content">-->
       <!--    <form method="POST" action="" enctype="multipart/form-data">-->
  	    <!--      <input type="hidden" name="size" value="1000000">-->
  	    <!--      <div class="upload-box">-->
  	            <!--<input type="file" name="image">-->
  	    <!--        <div class="myupBtn">-->
  	    <!--           	<label class="myLabel">-->
       <!--                 <input type="file" name="image" class="upload" required/>-->
       <!--                 <span><i class="fa fa-upload" aria-hidden="true"></i>  Attach File</span>-->
       <!--             </label>-->
       <!--         </div>-->
  	    <!--        <div>-->
       <!--             <textarea id="myBtn" class="text" class="teach-text" name="image_text" placeholder="Type Subject & Class Name..." required></textarea>-->
  	    <!--        </div>-->
  	    <!--        <div>-->
  		   <!--        <button type="submit" class="submit" name="post_vications">Post</button>-->
  	    <!--        </div>-->
  	    <!--        </div>-->
  	    <!--        </form>-->
  	    <!--</div>        -->
       <!-- <div class="send-msg"><?php echo $msg; ?></div>        -->
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