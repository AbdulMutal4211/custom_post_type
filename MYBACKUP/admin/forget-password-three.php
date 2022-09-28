<?php include 'includes/header.php';?>
<?php include 'includes/dashboard_header.php';?>
<div id="page_title">Forgot Password</div>


<div class="main">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="sign-in-bx">
                    <div class="signin-heading">
                        <div class="col-12 mb-3">
                            <h2><span class="b-btm">Forget Password</span></h2>
                        </div>
                        <div class="col-12 mb-3">
                            <p class="mb-0">Kindly enter the new password.</p>
                        </div>
                    </div>
                    <form action="" method="post" class="singin-frm">
                        <div class="col-12 mb-3">
                            <label>New Password:*</label>
                            <div class="password-input-wrp">
                                <i class="fa fa-eye show_hide_pass"></i>
                                <input class="my-input" type="password" placeholder="Enter Password">
                            </div>
                        </div>
                        <div class="col-12 mb-3">
                            <label>Confirm Password:*</label>
                            <div class="password-input-wrp">
                                <i class="fa fa-eye show_hide_pass"></i>
                                <input class="my-input" type="password" placeholder="Confirm Password">
                            </div>
                        </div>
                        <div class="col-12 mb-3 text-center ">
                            <button class="theme_btn w-100">Continue</button>
                        </div>
                        <div class="col-12 text-center">
                            <a class="simple-btn" href="sign-in.php"><u>Back To Login</u></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include 'includes/footer-links.php';?>