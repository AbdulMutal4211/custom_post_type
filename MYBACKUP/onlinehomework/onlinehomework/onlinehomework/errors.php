<?php  if (count($errors) > 0) : ?>
  <div class="error">
    <?php foreach ($errors as $error) : ?>
      <p><?php echo $error ?></p>
    <?php endforeach ?>
  </div>
<?php  endif ?>
<?php
if(isset($_GET['create'])){
  if($_GET['create'] == 'success'){
      echo "<p style='color:green;font-size:18px;'>Account Created Sucessful</p>";
  } 
  else{
      echo "<p style='red:red;font-size:18px;'>Please try again & fill out the all fields</p>";
  }
}
?>