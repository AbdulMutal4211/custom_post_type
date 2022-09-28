<?php include 'includes/header.php';?>
<?php include 'includes/dashboard_header.php';?>
<div id="page_title">Booking Details</div>
<div class="dashboard ">
    <?php include 'includes/sidebar.php';?>
    <div class="pannel">
        <div class="pannel-header">
            <p class="mb-0">Bookings</p>
        </div>
        <div class="pannel-body">
        	<div class="pg_name">
        		<h3 class="mb-0">Booking Details</h3>
        	</div>
        	<div class="row">
                <div class="col-lg-6">
                    <ul class="user_detail_list">
                        <li>
                            Name:
                            <span>Jogn Max</span>
                        </li>
                        <li>
                            Request ID:
                            <span>0001</span>
                        </li>
                        <li>
                            Email:
                            <span>mark@email.com</span>
                        </li>
                        <li>
                            Hotel:
                            <span>ABCD</span>
                        </li>
                        <li>
                            Room Type:
                            <span>Suite</span>
                        </li>
                        <li>
                            Commission ($):
                            <span>$10</span>
                        </li>
                        <li>
                            Hotel:
                            <span>ABCD</span>
                        </li>
                        <li>
                            Room Type:
                            <span>Suite</span>
                        </li>
                        <li>
                            Commission ($):
                            <span>$10</span>
                        </li>
                        <li>
                            Amount ($):
                            <span>$500</span>
                        </li>
                        <li>
                            Contact No.:
                            <span>12243546</span>
                        </li>
                        <li>
                            No. of Guests:
                            <span>1</span>
                        </li>
                        <li>
                            Guests Info :
                            <table cellpadding="10" class="guests_info">
                                <tr>
                                    <td>Name</td>
                                    <td>ABCD</td>
                                </tr>
                                <tr>
                                    <td>Country</td>
                                    <td>ABC Country</td>
                                </tr>
                                <tr>
                                    <td>Message</td>
                                    <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</td>
                                </tr>
                            </table>
                        </li>
                    </ul>
                    <div class="my_booking_status"></div>
                </div>
                <div class="col-lg-6">
                    <ul class="user_detail_list float-end">
                        <li>
                            Status:
                            <span class="pending status"><b>Pending</b></span>
                        </li>
                    </ul>
                </div>   
            </div>
    		<div class="row">
                <ul class="btn_set">
                    <li>
                        <a href="javascript:;" class="theme_btn" id="accept">Accept</a>
                        <a href="javascript:;" class="theme_btn" id="reject">Reject</a>
                    </li>
                </ul>      
            </div>
        </div>
    </div>
</div>
<div class="paypopup accept text-center">
    <div class="poppup_box">
        <div class="pop_close closer">x</div>
        <div class="content">
            <img src="assets/images/warning.png">
            <p class="black tc my-4">Are you sure you want to Accept this application?</p>
            <ul class="btn_set">
                <li><a href="javascript:;" class="theme_btn closer" id="bkng_yes">Yes</a></li>
                <li><a href="javascript:;" class="theme_btn closer">No</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="paypopup reject text-center">
    <div class="poppup_box">
        <div class="pop_close closer">x</div>
        <form class="content" action="javascript:;">
            <h3 class="mb-0">Rejection</h3>
            <p class="black tc mb-0 mt-2">Are you sure you want to reject ?</p>
            <p class="black tc mb-3">If yes then kindly add a reason.</p>
            <div class="field mb-3">
                <p class="field_lable empty_error rejected">Please Enter The Reson.</p>
                <textarea class="input_field rjct_reson"></textarea>
            </div>
            <ul class="btn_set">
                <li><button class="theme_btn" id="rjct_submit">Submit</button></li>
                <li><a href="javascript:;" class="theme_btn closer">Cancel</a></li>
            </ul>
        </form>
    </div>
</div>
<?php include 'includes/footer-links.php';?>