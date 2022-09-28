<?php
  session_start(); 
// if(!isset($_POST['login_user'])){
//   echo "<script>window.location='index.php?Login=error'</script>";
// }

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: index.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php?logout=ture");
  }

    $db = mysqli_connect("dev58.onlinetestingserver.com", "dev58onlinetesti", "d(hi?G=~!jLX", "online-home-work");

    $msg = "";

    if (isset($_POST['upload'])) {

  	   $image = $_FILES['image']['name'];
	   $image_text = mysqli_real_escape_string($db, $_POST['image_text']);
  	   $target = "images/".basename($image);
  	   $section = $_POST['section'];
  	   $sql = "INSERT INTO $section (image, image_text) VALUES ('$image', '$image_text')";

  	   mysqli_query($db, $sql);

  	   if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		  $msg = "<p style='color:green;font-size:18px;'>File uploaded successfully</p>";
  	   }
  	   else{
  		   $msg = "<p style='color:red;font-size:18px;'>Failed to upload image<p>";
  	   }
    }
    //HOME WORK CLASSES
    $home_work = mysqli_query($db, "SELECT * FROM images");
    $h_class_one = mysqli_query($db, "SELECT * FROM H_Class_One");
    $HC_Two = mysqli_query($db, "SELECT * FROM HC_Two");
    $HC_Three = mysqli_query($db, "SELECT * FROM HC_Three");
    $HC_Four = mysqli_query($db, "SELECT * FROM HC_Four");
    $HC_five = mysqli_query($db, "SELECT * FROM HC_five");
    $HC_Six = mysqli_query($db, "SELECT * FROM HC_Six");
    $HC_Seven = mysqli_query($db, "SELECT * FROM HC_Seven");
    $HC_Eight = mysqli_query($db, "SELECT * FROM HC_Eight");
    $HC_Nine = mysqli_query($db, "SELECT * FROM HC_Nine");
    $HC_Ten = mysqli_query($db, "SELECT * FROM HC_Ten");
    
    //ASSEGNMENT CLASSES
    $AC_One = mysqli_query($db, "SELECT * FROM AC_One");
    $AC_Two = mysqli_query($db, "SELECT * FROM AC_Two");
    $AC_Three = mysqli_query($db, "SELECT * FROM AC_Three");
    $AC_Four = mysqli_query($db, "SELECT * FROM AC_Four");
    $AC_Five = mysqli_query($db, "SELECT * FROM AC_Five");
    $AC_Six = mysqli_query($db, "SELECT * FROM AC_Six");
    $AC_Seven = mysqli_query($db, "SELECT * FROM AC_Seven");
    $AC_Eight = mysqli_query($db, "SELECT * FROM AC_Eight");
    $AC_Nine = mysqli_query($db, "SELECT * FROM AC_Nine");
    $AC_Ten = mysqli_query($db, "SELECT * FROM AC_Ten");
    
    
if (isset($_POST['announce'])) {

  	   $image = $_FILES['image']['name'];
	   $anounce_txt = mysqli_real_escape_string($db, $_POST['anounce_txt']);
  	   $target = "images/".basename($image);
  	   $name = $_POST["name"];
  	   $sql = "INSERT INTO chat (image, text, name) VALUES ('$image', '$anounce_txt' , '$name')";  

  	   mysqli_query($db, $sql);

  	   if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		  $msg = "<p style='color:green;font-size:18px;'>File uploaded successfully</p>";
  	   }
  	   else{
  		   $msg = "<p style='color:red;font-size:18px;'>Failed to upload image<p>";
  	   }
    }
    $chat = mysqli_query($db, "SELECT * FROM chat");

    if(isset($_POST['submit'])){
        $to = "abdul.mutal@salsoft.net";
	    $fname = $_POST['fname'];
	    $number = $_POST['number'];
	    $message = $_POST['message'];
	    if(mail($to,$fname,$message,$number)){
           $send = "<p style='color:green;font-size:18px;'>Your message has been sent!</p>";
        }
        else{
         $send = "<p style='color:red;font-size:18px;'>Please try again latter</p>";
        }
    }     
?>