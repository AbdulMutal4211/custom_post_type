<?php include 'includes/header.php';?>
<?php include 'includes/dashboard_header.php';?>
<div id="page_title">Edit Profile</div>
<div class="dashboard ">
    <?php include 'includes/sidebar.php';?>
    <div class="pannel">
        <div class="pannel-header">
            <p class="mb-0">Edit Profile</p>
        </div>
        <div class="pannel-body col-lg-5">
        	<div class="pg_name">
        		<h3 class="mb-0">Edit Profile</h3>
        	</div>
            <div class="usr_img_wrap text-center">
                <img src="assets/images/user_img.png">
                <div class="img_uploader">
                    <input type="file" name="" id="usr_img_file" onchange="Profile_prev()">
                    <i class="fa fa-camera" aria-hidden="true"></i>
                </div>
                <a href="javascript:;" class="simple_btn  mt-4" id="change_pass">Change Password</a>
            </div>
        	<form action="javascript:;" method="post">
                <ul class="user_detail_list">
                    <li>
                        Name:
                        <input type="text" name="" placeholder="Mark Jhon" class="input_field">
                    </li>
                    <li>
                        Email:
                        <input type="text" name="" placeholder="mark@email.com" class="input_field">
                    </li>
                </ul> 
                <button class="theme_btn" id="updated">Update</button>
            </form>
        </div>
    </div>
</div>
<div class="paypopup change_pass">
    <div class="poppup_box">
        <div class="pop_close closer">x</div>
        <div class="content">
            <h3 class="text-center">Change Password</h3>
            <form action="" method="post">
                <div class="field mb-4">
                    <p class="field_lable">Current Password*:</p>
                    <input type="password" name="" placeholder="Enter Password" class="input_field">
                </div>
                <div class="field mb-4">
                    <p class="field_lable">New Password*:</p>
                    <input type="password" name="" placeholder="Enter Password" class="input_field">
                </div>
                <div class="field mb-4">
                    <p class="field_lable">Confirm Password*:</p>
                    <input type="password" name="" placeholder="Enter Password" class="input_field">
                </div>
                <button class="theme_btn m-auto d-table">Update</button>
            </form>
        </div>
    </div>
</div>
<div class="paypopup updated text-center" >
    <div class="poppup_box">
        <div class="pop_close closer">x</div>
        <div class="content">
            <img src="assets/images/check.png">
            <p class="black tc my-3">Profile Updated Successfully!</p>
            <ul class="btn_set">
                <li><a href="#" class="theme_btn closer">Ok</a></li>
            </ul>
        </div>
    </div>
</div>
<?php include 'includes/footer-links.php';?>