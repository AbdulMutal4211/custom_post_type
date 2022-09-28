<?php include 'includes/header.php';?>
<?php include 'includes/dashboard_header.php';?>
<div id="page_title">View Subscription Plan</div>
<div class="dashboard ">
    <?php include 'includes/sidebar.php';?>
    <div class="pannel">
        <div class="pannel-header">
            <p class="mb-0">Subscriptions</p>
        </div>
        <div class="pannel-body">
        	<div class="pg_name">
        		<h3 class="mb-0">View Subscription Plan</h3>
        	</div>
        	<div class="row">
                <div class="col-lg-6">
                    <ul class="user_detail_list">
                        <li>
                            Plan Name:
                            <span>Monthly Plan</span>
                        </li>
                        <li>
                            Plan Cost ($):
                            <span>$25</span>
                        </li>
                        <li>
                            Plan Details:
                            <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar sic tempor. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, </span>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 text-end">
                    <a href="subscription_plans_edit.php" class="theme_btn">Edit</a>
                    <a href="javascript:;" class="theme_btn_2 active_inactive_txt" id="accept">Inactive</a>
                </div>   
            </div>
        </div>
    </div>
</div>

<div class="paypopup accept text-center">
    <div class="poppup_box">
        <div class="pop_close closer">x</div>
        <div class="content">
            <img src="assets/images/warning.png">
            <p class="black tc my-4">Are you sure you want to <span class="Active">Active</span> ABC Subscription?</p>
            <ul class="btn_set">
                <li><a href="javascript:;" class="theme_btn closer" id="yes_active">Yes</a></li>
                <li><a href="javascript:;" class="theme_btn closer">No</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="paypopup Inactivated_yes text-center">
    <div class="poppup_box">
        <div class="pop_close closer">x</div>
        <div class="content">
            <img src="assets/images/check.png">
            <p class="black tc my-4">Subscription Inactivated Successfully!</p>
            <ul class="btn_set">
                <li><a href="javascript:;" class="theme_btn closer">Ok</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="paypopup Activated_yes text-center">
    <div class="poppup_box">
        <div class="pop_close closer">x</div>
        <div class="content">
            <img src="assets/images/check.png">
            <p class="black tc my-4">Subscription Activated Successfully!</p>
            <ul class="btn_set">
                <li><a href="javascript:;" class="theme_btn closer">Ok</a></li>
            </ul>
        </div>
    </div>
</div>
<?php include 'includes/footer-links.php';?>