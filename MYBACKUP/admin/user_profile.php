<?php include 'includes/header.php';?>
<?php include 'includes/dashboard_header.php';?>
<div id="page_title">Profile</div>
<div class="dashboard ">
    <?php include 'includes/sidebar.php';?>
    <div class="pannel">
        <div class="pannel-header">
            <p class="mb-0">Profile</p>
        </div>
        <div class="pannel-body col-lg-7">
        	<div class="pg_name">
        		<h3 class="mb-0">Profile</h3>
        	</div>
            <div class="usr_img_wrap text-center">
                <img src="assets/images/user_img.png">
                <!-- <div class="img_uploader">
                    <input type="file" name="" id="usr_img_file" onchange="Profile_prev()">
                    <i class="fa fa-camera" aria-hidden="true"></i>
                </div> -->
                <a href="user_profile_edit.php" class="simple_btn  mt-4">Edit Profile</a>
            </div>
        	<ul class="user_detail_list">
                <li>
                    Name:
                    <span>Jogn Max</span>
                </li>
                <li>
                    Email:
                    <span>mark@email.com</span>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="paypopup status_select text-center">
    <div class="poppup_box">
        <div class="pop_close closer">x</div>
        <div class="content">
            <img src="assets/images/warning.png">
            <p class="black tc my-4">Are you sure you want to In-Active ABC Profile?</p>
            <ul class="btn_set">
                <li><a href="#" class="theme_btn closer">Yes</a></li>
                <li><a href="javascript:;" class="theme_btn closer" id="in-active_no">No</a></li>
            </ul>
        </div>
    </div>
</div>
<?php include 'includes/footer-links.php';?>