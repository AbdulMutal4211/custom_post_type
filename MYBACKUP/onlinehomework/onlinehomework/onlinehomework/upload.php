<?php include('logics.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Upload Home Work</title>
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
	               <li><a href="upload.php" class="active">Upload Home Work <i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
	               <li><a href="vicationassign.php">Upload Assignments</a></li>
	               <li><a href="announcement.php">Announcements</a></li>
	               <li><a href="index.php?logout='1'" >logout</a></li>
	           </ul>
	       </div>				
		</div>
	</div>
	<div class="chat_panel">
        <h1>Upload Home Work</h1>
        <div class="file_box_outer">
	    <div id="content">
	        <h3>Class 1</h3>
	        <ul>
            <?php
               while ($row = mysqli_fetch_array($h_class_one)) {
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
            <h3>Class 2</h3>
	        <ul>
            <?php
               while ($row = mysqli_fetch_array($HC_Two)) {
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
            <h3>Class 3</h3>
	        <ul>
            <?php
               while ($row = mysqli_fetch_array($HC_Three)) {
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
            <h3>Class 4</h3>
	        <ul>
            <?php
               while ($row = mysqli_fetch_array($HC_Four)) {
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
            <h3>Class 5</h3>
	        <ul>
            <?php
               while ($row = mysqli_fetch_array($HC_five)) {
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
            <h3>Class 6</h3>
	        <ul>
            <?php
               while ($row = mysqli_fetch_array($HC_Six)) {
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
            <h3>Class 7</h3>
	        <ul>
            <?php
               while ($row = mysqli_fetch_array($HC_Seven)) {
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
            <h3>Class 8</h3>
	        <ul>
            <?php
               while ($row = mysqli_fetch_array($HC_Eight)) {
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
            <h3>Class 9</h3>
	        <ul>
            <?php
               while ($row = mysqli_fetch_array($HC_Nine)) {
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
            <h3>Class 10</h3>
	        <ul>
            <?php
               while ($row = mysqli_fetch_array($HC_Ten)) {
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
            
            
        </div>
        </div>
        <div id="content">
               <form method="POST" action="" enctype="multipart/form-data">
  	            <input type="hidden" name="size" value="1000000">
  	            <div class="upload-box">
  	               <!--<input type="file" name="image">-->
  	                <div class="myupBtn">
  	               	    <label class="myLabel">
                           <input type="file" name="image" class="upload" required/>
                           <span><i class="fa fa-upload" aria-hidden="true"></i>  Attach File</span>
                        </label>
                    </div>
                    <div class="section_select">
                        <select name="section" id="sections">
                            <option value="blank">Please Select Class</option>
                            <!--<option value="images">Home Work</option>-->
                            <!--<option value="vications">Assignments</option>-->
                            <option value="H_Class_One">Class 1</option>
                            <option value="HC_Two">Class 2</option>
                            <option value="HC_Three">Class 3</option>
                            <option value="HC_Four">Class 4</option>
                            <option value="HC_five">Class 5</option>
                            <option value="HC_Six">Class 6</option>
                            <option value="HC_Seven">Class 7</option>
                            <option value="HC_Eight">Class 8</option>
                            <option value="HC_Nine">Class 9</option>
                            <option value="HC_Ten">Class 10</option>
                        </select>
                    </div>
  	               <div>
                        <textarea id="attch_name" class="text" class="teach-text" name="image_text" placeholder="Type Subject & Class Name..." required></textarea>
  	               </div>
  	               <div>
  		               <button type="submit" class="submit" name="upload">Post</button>
  	               </div>
  	            </div>
            </form>
        </div>
        <div class="send-msg"><?php echo $msg; ?></div>         
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