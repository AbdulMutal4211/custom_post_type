<?php include 'includes/header.php';?>
<?php include 'includes/dashboard_header.php';?>
<div id="page_title">Subscription Plan add</div>
<div class="dashboard ">
    <?php include 'includes/sidebar.php';?>
    <div class="pannel">
        <div class="pannel-header">
            <p class="mb-0">Subscriptions</p>
        </div>
        <div class="pannel-body col-lg-7">
            <div class="pg_name">
                <h3 class="mb-0">Add Subscription Plan</h3>
            </div>
            <form action="javascript:;" method="post">
                <div class="field mb-4">
                    <p class="field_lable">Plan Name*:</p>
                    <input type="text" name="" placeholder="" class="input_field">
                </div>
                <div class="field mb-4">
                    <p class="field_lable">Plan Cost ($)*:</p>
                    <input type="text" name="" placeholder="" class="input_field">
                </div>
                <div class="field mb-4">
                    <p class="field_lable">Plan Details*:</p>
                    <textarea placeholder="" class="input_field txt_area"></textarea>
                </div>
                <button class="theme_btn" type="submit" id="updated">Add</button>
            </form>
        </div>
    </div>
</div>
<div class="paypopup updated text-center">
    <div class="poppup_box">
        <div class="pop_close closer">x</div>
        <div class="content">
            <img src="assets/images/check.png">
            <p class="black tc my-4">Subscription added Successfully!</p>
            <ul class="btn_set">
                <li><a href="#" class="theme_btn closer">Ok</a></li>
            </ul>
        </div>
    </div>
</div>
<?php include 'includes/footer-links.php';?>