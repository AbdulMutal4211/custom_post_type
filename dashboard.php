<?php 
/*template name: Booking Logs*/
get_header(); 
?>
<?php nectar_page_header($post->ID); ?>
<style>
html,div{scroll-behavior: smooth; }
input::-webkit-outer-spin-button, input::-webkit-inner-spin-button {-webkit-appearance: none; margin: 0; }
input[type=number] {-moz-appearance: textfield; }
/*****CUSTOM TOGGLE BTN CSS**********/
.line3 {transform: rotate(-45deg); bottom: 7px; }
.line1 {transform: rotate(45deg); top: 7px; }
.line_center {opacity: 0; } 
.toggle_btn div {background-color: #f7f7f7; height: 2px; width: 28px; margin: 5px 0px; transition: .4s !important; position: relative; }
.toggle_btn {float: right; top: 50%; display: none; position: absolute; transform: translate(0px, -50%); right: 20px; }
/*****CUSTOM TOGGLE BTN CSS**********/

/****DASHBOARD CSS**************************/
.sidebar_wrap {background-color: #68696e;}
.sidebar_header {padding: 30px;position:relative;}
.user_wrap {display: flex; align-items: center; }
.user_wrap .user_img {margin-right: 10px; }
.sidebar_header .user_wrap img {margin: 0px 0px 0px 0px; width: 50px !important; height: 50px; border-radius: 50%; object-fit: cover; }
.d_sidebar .sidebar_header .user_wrap .user_name p {color: #fff !important; text-transform: capitalize; }
.d_sidebar ul {margin: 0; }
.d_sidebar ul li {list-style: none; }
.d_sidebar ul li a {background-color:transparent; transition: .5s !important; color: #fff; display: inline-block; width: 100%; border-top: 1px solid; padding: 14px 30px; font-size: 15px; transition: .5s !important; position: relative; }
.d_sidebar ul li:last-child a {border-bottom: 1px solid; }
.d_sidebar ul li a.active_menu {background-color: #d20607 !important; }
.panel {padding: 0% 5% 5% 2%; display: inline-block; width: 100%; }
.panel_header {padding: 20px 0px 15px 0px; position: relative; margin-bottom: 25px; }
.panel_header:before {width: 200%; content: ""; height: 1px; background-color: #68696e; position: absolute; bottom: 0; left: -20%; z-index: 9; }
.panel_body {display: inline-block; width: 100%; }
/****DASHBOARD CSS**************************/ 

</style>
<div class="main_sec">
    <div class="dashboard_wrap">
        <div class="row">
            <div class="col span_3 sidebar_wrap">
              <?php include 'sidebar/sidebar.php';?>
            </div>
            <div class="col span_9 col_last">
                <div class="panel">
                    <div class="panel_header">
                      <p class="black">Notifications</p>
                    </div>
                    <div class="bottom_space">
                      <h1>Notifications</h1>
                    </div>
                    <div class="panel_body">
                        <div class="row box-shadow">
                            <div class="col span_6">
                                <div class="user_wrap">
                                    <div class="user_img">
                                        <i class="fa fa-commenting" aria-hidden="true"></i>
                                    </div>
                                    <div class="user_name">
                                        <p>There are many variations of passages of Lorem Ipsum available</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col span_3">
                                <div class="txt_box float-right">
                                    <p>Today 8:53 AM</p>
                                </div>
                            </div>
                            <div class="col span_3 col_last">
                                <div class="txt_box float-right">
                                    <a class="theme_btn" href="#">View</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
////////////////////////////////////////////////////////TOGGLE BUTTON JS    
jQuery('.toggle_btn').click(function(){
    jQuery('.sidebar_menu').slideToggle();
});
jQuery(document).ready(function(){
      jQuery(".toggle_btn").click(function(){
            jQuery(".toggle_btn div:eq(0)").toggleClass("line1");
            jQuery(".toggle_btn div:eq(1)").toggleClass("line_center");
            jQuery(".toggle_btn div:eq(2)").toggleClass("line3");
      });
});
////////////////////////////////////////////////////////TOGGLE BUTTON JS        
</script>

<?php get_footer(); ?>