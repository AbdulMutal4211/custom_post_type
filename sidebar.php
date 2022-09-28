<?php
$user = wp_get_current_user();
 $roles = $user->roles[0];
function check_url_ticket_page($slug){
	$directoryURI = $_SERVER['REQUEST_URI'];
		if (strpos($directoryURI, $slug) !== false) {
	    return 'active_menu';
	}
}
?>

<div class="d_sidebar">
	<div class="sidebar_header">
		<div class="user_wrap">
			<div class="user_img">
				<img src="<?= home_url() . '/wp-content/uploads/2021/04/s3.png' ?>">
			</div>
			<div class="user_name">
				<p>Hi! Angelena</p>
			</div>
		</div>
		<div class="toggle_btn">
			<div class=""></div>
			<div class=""></div>
			<div class=""></div>
		</div>
	</div>
	<div class="sidebar_menu">
		<ul>
			<li><a href="<?= home_url() . '/#/' ?>" class="<?= check_url_ticket_page('#') ?>"><span>Dashboard</span></a></li>
			<li><a href="<?= home_url() . '/#/' ?>" class="<?= check_url_ticket_page('#') ?>"><span>My Bookings</span></a></li>
			<li><a href="<?= home_url() . '/#/' ?>" class="<?= check_url_ticket_page('#') ?>"><span>My Subsscriptions</span></a></li>
		</ul>
	</div>
</div>