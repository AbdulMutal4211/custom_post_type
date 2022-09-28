<?php include 'includes/header.php';?>
<?php include 'includes/dashboard_header.php';?>
<div id="page_title">Services</div>
<div class="dashboard ">
    <?php include 'includes/sidebar.php';?>
    <div class="pannel">
        <div class="pannel-header">
            <p class="mb-0">Services</p>
        </div>
        <div class="pannel-body col-lg-7">
        	<div class="pg_name">
        		<h3 class="mb-0">Service Details</h3>
        		<a href="service_edit.php" class="theme_btn">Edit</a>
        	</div>
        	<div class="ship_wrap">
        		<ul class="user_detail_list">
        			<li>
        				Title:
        				<span>BOAT Washing Service</span>
        			</li>
        		</ul>
        		<img src="assets/images/ship.png">
        		<div class="price_for">
        			<ul class="user_detail_list">
        				<li>
	        				Price for Subscribed User:
	        				<span class="theme_color">$500</span>
	        			</li>
        			</ul>
        			<ul class="user_detail_list">
        				<li>
	        				Price for Normal User:
	        				<span class="theme_color">$750</span>
	        			</li>
        			</ul>
        		</div>
        		<p class="label">Description:</p>
        		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar sic tempor. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus pronin sapien nunc accuan eget.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar sic tempor. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus pronin sapien nunc accuan eget.</p>
        	</div>
        </div>
    </div>
</div>
<div class="paypopup status_select text-center">
    <div class="poppup_box">
        <div class="pop_close closer">x</div>
        <div class="content">
            <img src="assets/images/warning.png">
            <p class="black tc my-4">Are you sure you want to In-Active ABC Service?</p>
            <ul class="btn_set">
                <li><a href="#" class="theme_btn closer">Yes</a></li>
                <li><a href="javascript:;" class="theme_btn closer" id="in-active_no">No</a></li>
            </ul>
        </div>
    </div>
</div>
<?php include 'includes/footer-links.php';?>