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
                <h3 class="mb-0">Edit Service Details</h3>
            </div>
            <form action="javascript:;" method="post">
                <div class="field mb-4">
                    <p class="field_lable">Title*:</p>
                    <input type="text" name="" placeholder="BOAT Washing Service" class="input_field">
                </div>
                <div class="field mb-4">
                    <span class="upload_img_box">
                        <i class="fa fa-cloud-upload" aria-hidden="true"></i>
                        <img src="" class="img_uploaded">
                        <input type="file" name="" class="upload_img" onchange="previewFile()">
                    </span>
                </div>
                <div class="field mb-4">
                    <p class="field_lable">Price for Subscribed User ($)*:</p>
                    <input type="text" name="" placeholder="$500 " class="input_field">
                </div>
                <div class="field mb-4">
                    <p class="field_lable">Price for Normal User ($)*:</p>
                    <input type="text" name="" placeholder="$750 " class="input_field">
                </div>
                <div class="field mb-4">
                    <p class="field_lable">Price for Normal User ($)*:</p>
                    <input type="text" name="" placeholder="$750" class="input_field">
                </div>
                <div class="field mb-4">
                    <p class="field_lable">Price for Normal User ($)*:</p>
                    <textarea placeholder="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar sic tempor. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci" class="input_field txt_area"></textarea>
                </div>
                <button class="theme_btn" type="submit" id="updated">Update</button>
            </form>
        </div>
    </div>
</div>
<div class="paypopup updated text-center">
    <div class="poppup_box">
        <div class="pop_close closer">x</div>
        <div class="content">
            <img src="assets/images/check.png">
            <p class="black tc my-4">Service Updated Successfully!</p>
            <ul class="btn_set">
                <li><a href="#" class="theme_btn closer">Ok</a></li>
            </ul>
        </div>
    </div>
</div>
<?php include 'includes/footer-links.php';?>