<?php include 'includes/header.php';?>
<?php include 'includes/dashboard_header.php';?>
<div id="page_title">Sign In</div>

<div class="main">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="sign-in-bx">
                    <div class="signin-heading">
                        <div class="col-12 mb-3">                            
                            <h2><span class="b-btm">Sign In</span></h2>
                        </div>
                        <div class="col-12 mb-3">
                            <p class="mb-0">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Natus, accusantium.</p>
                        </div>
                    </div>                                        
                    <form action="dashboart.php" method="post" class="singin-frm">
                        <div class="col-12 mb-3">
                            <label>Email Address:*</label>
                            <input class="my-input" type="text" placeholder="Enter Email Address">
                        </div>
                        <div class="col-12 mb-3">
                            <label>Password:*</label>
                            <div class="password-input-wrp">
                                <i class="fa fa-eye show_hide_pass"></i>
                                <input class="my-input" type="password" placeholder="Enter Password">                                 
                            </div>                                                       
                        </div>
                        <div class="col-12 mb-3 text-center ">
                            <button class="theme_btn w-100">Continue</button>                           
                        </div>
                        <div class="col-12 text-center">
                            <a class="simple-btn" href="sign-up.php"><u>You don't have an account?</u></a>                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include 'includes/footer-links.php';?>