<?php 
/*template name: Login*/
get_header(); 

?>
<?php nectar_page_header($post->ID); ?>

<div class="container mv5">
	<div class="row">
		<div class="w-40 col-md-w-100 m_auto d_table user_login">
			<form action="" method="post">
				<div class="user_form_title">
					<h3>Login Now</h3>
				</div>
				<div class="field_wrap">
					<div class="field">
						<p class="field_label">Enter Email or User Name</p>
						<div class="f_inner">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
							<input type="text" name="" placeholder="info@Conmpany.com">
						</div>
					</div>
					<div class="field">
						<p class="field_label">Enter Password</p>
						<div class="f_inner">
							<i class="fa fa-eye myEyeIcon" aria-hidden="true"></i>
							<input type="password" name="" placeholder="************">
                            <i class="fa fa-lock" aria-hidden="true"></i>
						</div>
					</div>
				</div>
				<div class="row back_to_web mb_20px">
					<div class="col span_6">
						<a class="simple_btn" href="<?= home_url() ?>">Back to Website</a>
					</div>
					<div class="col span_6 col_last">
						<a class="fr simple_btn" href="<?= home_url() ?>">Fogot Password?</a>
					</div>
				</div>
				<button class="theme_btn">Login</button>
			</form>
		</div>
	</div>
</div>

<?php get_footer(); ?>



<style>
/*********CUSTOM PAGE CSS*******************/
.m_auto {margin: auto !important;}
.d_table{display: table !important;}

.m_t_50px {margin-top: 50px !important;}
.m_t_40px {margin-top: 40px !important;}
.m_t_30px {margin-top: 30px !important;}
.m_t_20px {margin-top: 20px !important;}
.m_b_50px {margin-bottom: 50px !important;}
.m_b_40px {margin-bottom: 40px !important;}
.m_b_30px {margin-bottom: 30px !important;}
.m_b_20px {margin-bottom: 20px !important;}

.p_t_50px {padding-bottom: 50px !important;}
.p_t_40px {padding-bottom: 40px !important;}
.p_t_30px {padding-bottom: 30px !important;}
.p_t_20px {padding-bottom: 20px !important;}
.p_b_50px {padding-bottom: 50px !important;}
.p_b_40px {padding-bottom: 40px !important;}
.p_b_30px {padding-bottom: 30px !important;}
.p_b_20px {padding-bottom: 20px !important;}


.user_login {
    background-color: #f4f4f4;
    padding: 40px 30px;
    border: 7px solid #fff;
    box-shadow: 0px 0px 15px 0px #0000001c;
}
p.field_label {
    padding: 0;
    font-size: 14px;
    color: #000;
}
.field {
    margin-bottom: 20px !important;
}
.field input, .field select {
    background-color: #fff !important;
    border-radius: 30px !important;
    padding: 10px 15px !important;
}
.f_inner {
    position: relative;
}
.f_inner i {
    position: absolute;
    left: 15px;
    top: 15px;
    cursor: pointer;
    color: #c9c9c9;
}
.myEyeIcon {
    right: 15px !important;
    left: unset !important;
}
a.simple_btn:hover {
    color: #d20607;
}
a.simple_btn {
    font-size: 14px;
    border-bottom: 1px solid;
    color: #9c9c9c;
}
a.simple_btn i {
    font-size: 22px;
}
.user_form_title p {
    font-size: 14px;
    padding: 0 !important;
}
.user_form_title {
    margin-bottom: 20px;
}
.theme_btn {
    background-color: #d20607 !important;
    border: none;
    color: #fff;
    padding: 15px 50px;
    cursor: pointer;
}
.theme_btn:hover {
    background-color: #ccc !important;
}

@media(max-width:1600px){}
@media(max-width:1366px){
    .sidebar_wrap {width: 20%;}
    .user_login {width: 50% !important;}
    .border:before {bottom: 7px;    }
}
@media(max-width:1280px){}
@media(max-width:1024px){
    .sidebar_wrap {width: 25%;}
}
@media(max-width:800px){
    .col_md_m_t_30px {margin-top: 30px !important;}
    .col_md_m_t_20px {margin-top: 20px !important;}
    .col_md_m_t_10px {margin-top: 10px !important;}
    .col_md_p_t_30px {padding-top: 30px !important}
    .col_md_p_t_20px {padding-top: 20px !important;}
    .col_md_p_t_10px {padding-top: 10px !important;}
    .col_md_m_b_30px {margin-bottom: 30px !important;}
    .col_md_m_b_20px {margin-bottom: 20px !important;}
    .col_md_m_b_10px {margin-bottom: 10px !important;}
    .col_md_p_b_30px {padding-bottom: 30px !important;}
    .col_md_p_b_20px {padding-bottom: 20px !important;}
    .col_md_p_b_10px {padding-bottom: 10px !important;}
    .col-md-w-100 {width: 100% !important;}
    .back_to_web {display: flex;}   
    .d_flex,.toggle_btn {display: block;}
    .sidebar_wrap {width: 100% !important;margin: 0 !important;}
    .sidebar_menu {display: none;}
    .scroll {overflow-x: scroll; }
    .panel {padding: 0% 5% 5% 5%;}
}
@media(max-width:480px){
    .border:before {bottom: 4px;}
    a.theme_btn, a.theme_btn2 {padding: 7px 15px;width:100px;}
    .theme_btn {padding: 13px 40px;}
    ul.notifi_wrap li:nth-child(2) .drop_txt span {display: none;}
    ul.notifi_wrap img {margin-right: 0px;}

}
@media(max-width:414){}
/*********CUSTOM PAGE CSS*******************/	
</style>

<script>
jQuery('i.myEyeIcon').click(function(){
    var a = jQuery(this).next().attr('type');

    if(a == 'password'){
		jQuery(this,'i.myEyeIcon').css('color','#fbb03b ');
        jQuery(this).next().attr('type','text');
    }
    else{
		jQuery(this,'i.myEyeIcon').css('color','#c9c9c9');
        jQuery(this).next().attr('type','password'); 
    }
});	
</script>