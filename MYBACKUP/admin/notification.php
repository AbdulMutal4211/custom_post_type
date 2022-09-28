<?php include 'includes/header.php';?>
<?php include 'includes/dashboard_header.php';?>
<div id="page_title">Notification</div>
<div class="dashboard ">
    <?php include 'includes/sidebar.php';?>
    <div class="pannel">
        <div class="pannel-header">
            <p class="mb-0">Notification</p>
        </div>
        <div class="pannel-body">
        	<div class="pg_name">
        		<h3 class="mb-0">Notification</h3>
        	</div>
        	<div class="notification_wrap mb-4">
                <div class="user-wrap mb-4 mb-lg-0">
                    <div class="usr-img">
                        <i class="fa fa-commenting" aria-hidden="true"></i>
                    </div>
                    <div class="usr-name">
                        <p class="mb-0 noti_txt">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit</p>
                    </div>
                </div>
                <div class="notify_time mb-4 mb-lg-0">
                    <p class="mb-0">Today 8:53 AM</p>
                </div> 
                <div class="noti_view">
                    <a href="notification_view.php" class="theme_btn">View</a>
                </div>
            </div>
            <div class="notification_wrap mb-4">
                <div class="user-wrap mb-4 mb-lg-0">
                    <div class="usr-img">
                        <i class="fa fa-commenting" aria-hidden="true"></i>
                    </div>
                    <div class="usr-name">
                        <p class="mb-0 noti_txt">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit</p>
                    </div>
                </div>
                <div class="notify_time mb-4 mb-lg-0">
                    <p class="mb-0">Today 8:53 AM</p>
                </div> 
                <div class="noti_view">
                    <a href="notification_view.php" class="theme_btn">View</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="paypopup status_select text-center">
    <div class="poppup_box">
        <div class="pop_close closer">x</div>
        <div class="content">
            <img src="assets/images/warning.png">
            <p class="black tc my-4">Are you sure you want to In-Active ABC Notification?</p>
            <ul class="btn_set">
                <li><a href="#" class="theme_btn closer">Yes</a></li>
                <li><a href="javascript:;" class="theme_btn closer" id="in-active_no">No</a></li>
            </ul>
        </div>
    </div>
</div>
<?php include 'includes/footer-links.php';?>