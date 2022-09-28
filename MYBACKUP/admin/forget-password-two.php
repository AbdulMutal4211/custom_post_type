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
                            <p class="mb-0">Kindly enter your verification code to change the password.</p>
                        </div>
                    </div>                                        
                    <form action="" method="post" class="singin-frm">
                        <div class="col-12 mb-3">
                            <label>Verification Code:*</label>
                            <input class="my-input" type="text" placeholder="Enter Verification Code">
                        </div>
                        <div class="col-12 mb-3 text-center ">
                            <button class="theme_btn w-100">Continue</button>                           
                        </div>
                        <div class="col-12 text-center pb-2">
                            <a class="simple-btn green" href="#_"><u>Resend Code</u></a>                            
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