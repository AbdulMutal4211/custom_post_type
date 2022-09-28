jQuery(document).ready(function() {

	$('.dash-header .user-clm ul li .user-wrap').click(function(){
	    $(this).next().toggleClass('open_myDrop');
	});

    var pg_title = $('div#page_title').text();
    $('title').text(pg_title);

    var a = $('.pannel-header p').text();
	$("#sidebar_menu li a span").each(function(){
     	var bg_active = $(this).text();
     	if (a == bg_active) {
     		$(this).parent().addClass('sidebar_active')
     	}
     });

	$('ul.myDrop li a').each(function(){
		var drop_txt = $(this).text();
		if (a == drop_txt) {
			$(this).addClass('actvie_myDrop');
		}
	});

	jQuery('.show_hide_pass').click(function() {
	    $(this, '.show_hide_pass').toggleClass('show_pass');
	    var a = jQuery(this).next().attr('type');
	    if (a == 'password') {
	        $(this).next().attr('type', 'text');
	    } else {
	        $(this).next().attr('type', 'password');
	    }
	});

	jQuery('.toggle-btn').click(function(){
	    jQuery('.sidebar ul').slideToggle();
	});

	jQuery('.colpse-btn').click(function(){
	    jQuery('.sidebar').toggleClass('colpse-sidebar'); 
	});

	jQuery(document).ready(function() {
	    jQuery('#example').DataTable();
	});

	jQuery('#bkng_yes').click(function(){
    	$('.status').removeClass('rejected');
    	$('.status').addClass('pending');
    	$('.status b').text('Accepted');
    	$('.my_booking_status ul').remove();
	});

	jQuery('#rjct_submit').click(function(){
		var rjct_reson = $('.rjct_reson').val();
		if (rjct_reson == '') {
			$('.empty_error').show();
			return false
		}
		else{
			$('.empty_error').hide();
			$('.my_booking_status').html('<ul class="user_detail_list"><li id="reson_li">Rejection Reason :<span>'+ rjct_reson +'</span></li><ul/>');

			jQuery('.paypopup').css('opacity','0');
		    jQuery('.paypopup').css('z-index','-1');
		    jQuery('.poppup_box').css('transform','scale(0)');
		    jQuery('.poppup_box').css('opacity','0');
		}
    	$('.status').removeClass('pending');
    	$('.status').addClass('rejected');
    	$('.status b').text('Rejected');
	});

	jQuery('.closer').click(function(){
	    jQuery('.paypopup').css('opacity','0');
	    jQuery('.paypopup').css('z-index','-1');
	    jQuery('.poppup_box').css('transform','scale(0)');
	    jQuery('.poppup_box').css('opacity','0');
	});

	////////////////////////////////////////////////////////////////POPUP JS  
	jQuery('#logout_pop').click(function(){
	    jQuery('.logout_pop').css('opacity','1');
	    jQuery('.logout_pop').css('z-index','99999');
	    jQuery('.logout_pop .poppup_box').css('transform','scale(1)');
	    jQuery('.logout_pop .poppup_box').css('opacity','1');
	});

	jQuery('#status_select').change(function(){
	    var statuss = $('#status_select').val();
	    if (statuss == 'in-active') {
	    	jQuery('.status_select').css('opacity','1');
		    jQuery('.status_select').css('z-index','99999');
		    jQuery('.status_select .poppup_box').css('transform','scale(1)');
		    jQuery('.status_select .poppup_box').css('opacity','1');
	    }
	});
	jQuery('#in-active_no').click(function(){
		$('#status_select').val('active')
	});

	jQuery('#updated').click(function(){
	    jQuery('.updated').css('opacity','1');
	    jQuery('.updated').css('z-index','99999');
	    jQuery('.updated .poppup_box').css('transform','scale(1)');
	    jQuery('.updated .poppup_box').css('opacity','1');
	});

	jQuery('#accept').click(function(){
		var act_inact =  $(this).text();
		if (act_inact == 'Inactive') {
			$('span.Active').text('Active');
		}
		else{
			$('span.Active').text('Inactive');
		}
	    jQuery('.accept').css('opacity','1');
	    jQuery('.accept').css('z-index','99999');
	    jQuery('.accept .poppup_box').css('transform','scale(1)');
	    jQuery('.accept .poppup_box').css('opacity','1');
	});

	jQuery('#reject').click(function(){
	    jQuery('.reject').css('opacity','1');
	    jQuery('.reject').css('z-index','99999');
	    jQuery('.reject .poppup_box').css('transform','scale(1)');
	    jQuery('.reject .poppup_box').css('opacity','1');
	});

	jQuery('#change_pass').click(function(){
	    jQuery('.change_pass').css('opacity','1');
	    jQuery('.change_pass').css('z-index','99999');
	    jQuery('.change_pass .poppup_box').css('transform','scale(1)');
	    jQuery('.change_pass .poppup_box').css('opacity','1');
	});

	$('#yes_active').click(function(){
    var x = $('.active_inactive_txt').text();
    if(x == 'Inactive'){
        $('.active_inactive_txt').text('Active');
        $('.Activated_yes').css('opacity','1');
        $('.Activated_yes').css('z-index','99999');
        $('.Activated_yes .poppup_box').css('transform','scale(1)');
        $('.Activated_yes .poppup_box').css('opacity','1');
    }
    else{
        $('.active_inactive_txt').text('Inactive');
        $('.Inactivated_yes').css('opacity','1');
        $('.Inactivated_yes').css('z-index','99999');
        $('.Inactivated_yes .poppup_box').css('transform','scale(1)');
        $('.Inactivated_yes .poppup_box').css('opacity','1');
    }
}); 
	////////////////////////////////////////////////////////////////POPUP JS
});


function previewFile(input){
   var file = jQuery("input[type=file]").get(0).files[0];

   if(file){
       var reader = new FileReader();

       reader.onload = function(){
           jQuery(".upload_img_box img").attr("src", reader.result);
       }

       reader.readAsDataURL(file);
   }
}	
function Profile_prev(input){
   var user_img_prev = jQuery("input[type=file]").get(0).files[0];

   if(user_img_prev){
       var reader_img = new FileReader();

       reader_img.onload = function(){
           jQuery(".usr_img_wrap img").attr("src", reader_img.result);
       }

       reader_img.readAsDataURL(user_img_prev);
   }
}		