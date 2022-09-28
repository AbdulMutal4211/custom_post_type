<?php include 'includes/header.php';?>
<?php include 'includes/dashboard_header.php';?>
<div id="page_title">Subscription Plan</div>
<div class="dashboard ">
    <?php include 'includes/sidebar.php';?>
    <div class="pannel">
        <div class="pannel-header">
            <p class="mb-0">Subscriptions</p>
        </div>
        <div class="pannel-body">
        	<div class="pg_name">
        		<h3 class="mb-0">Subscription Plans</h3>
        		<a href="subscription_plans_add.php" class="theme_btn">Add</a>
        	</div>
        	<div class="row text-center light">
        		<div class="col-lg-4 mb-4 mb-lg-0">
        			<div class="plan_clm ">
        				<h3 class="m-0 fw_400">Montly  Plan</h3>
                        <span class="Montly">Billed Monthly</span>
                        <h1 class="main_price">50.00</h1>
                        <ul class="pricing_list">
                            <li><a href="#">Lorem ipsum is dummy content</a></li>
                            <li><a href="#">Lorem ipsum is dummy content</a></li>
                            <li><a href="#">Lorem ipsum is dummy content</a></li>
                            <li><a href="#">Lorem ipsum is dummy content</a></li>
                            <li><a href="#">Lorem ipsum is dummy content</a></li>
                        </ul>
                        <a href="subscription_plans_view.php" class="theme_btn_2 w-100">View Details</a>
                        <a href="#" class="theme_btn w-100">Inactive</a>
        			</div>
        		</div>
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <div class="plan_clm active_pkg">
                        <h3 class="m-0 fw_400">Quarterly Plan</h3>
                        <span class="Montly">Billed 6 Month</span>
                        <h1 class="main_price">150.00</h1>
                        <ul class="pricing_list">
                            <li><a href="#">Lorem ipsum is dummy content</a></li>
                            <li><a href="#">Lorem ipsum is dummy content</a></li>
                            <li><a href="#">Lorem ipsum is dummy content</a></li>
                            <li><a href="#">Lorem ipsum is dummy content</a></li>
                            <li><a href="#">Lorem ipsum is dummy content</a></li>
                        </ul>
                        <a href="subscription_plans_view.php" class="theme_btn_2 w-100">View Details</a>
                        <a href="#" class="theme_btn w-100">active</a>
                    </div>
                </div>
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <div class="plan_clm">
                        <h3 class="m-0 fw_400">Yearly Plan</h3>
                        <span class="Montly">Billed Annually</span>
                        <h1 class="main_price">250.00</h1>
                        <ul class="pricing_list">
                            <li><a href="#">Lorem ipsum is dummy content</a></li>
                            <li><a href="#">Lorem ipsum is dummy content</a></li>
                            <li><a href="#">Lorem ipsum is dummy content</a></li>
                            <li><a href="#">Lorem ipsum is dummy content</a></li>
                            <li><a href="#">Lorem ipsum is dummy content</a></li>
                        </ul>
                        <a href="subscription_plans_view.php" class="theme_btn_2 w-100">View Details</a>
                        <a href="#" class="theme_btn w-100">Inactive</a>
                    </div>
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
            <p class="black tc my-4">Are you sure you want to In-Active ABC User?</p>
            <ul class="btn_set">
                <li><a href="#" class="theme_btn closer">Yes</a></li>
                <li><a href="javascript:;" class="theme_btn closer" id="in-active_no">No</a></li>
            </ul>
        </div>
    </div>
</div>
<?php include 'includes/footer-links.php';?>