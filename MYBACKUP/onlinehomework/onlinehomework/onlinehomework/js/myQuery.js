jQuery(document).ready(function(){
	jQuery('.submit').click(function(){

		var name = jQuery('#name').val();
	    var number = jQuery('#number').val();
        
        if (name == '') {
        	jQuery('#name').css('border-color','red');
        	jQuery('#name').attr('placeholder','Please insert your name');
        	jQuery('#name').addClass('animated shake');
        	return false;
        }
        else if (number == '') {
        	jQuery('#number').css('border-color','red');
        	jQuery('#number').attr('placeholder','Please insert your phone-no');
        	jQuery('#number').addClass('animated shake');
        	return false;
        }
	});
});
jQuery(document).ready(function(){
	jQuery('.btn').click(function(){
	    
	    var username = jQuery('.username').val();
        var pass = jQuery('.pass').val();
        
        if (username == ''){
        	jQuery('.username').css('border-color','red');
        	jQuery('.username').attr('placeholder','Please insert your name');
        	jQuery('.username').addClass('animated shake');
        	return false;           
        }        
        else if (pass == ''){
            jQuety('.pass').css('border-color','red');
        	jQuety('.pass').attr('placeholder','Please write your password');
        	jQuery('.pass').addClass('animated shake');
        	return false;
        }
	});
});
jQuery(document).ready(function(){
	jQuery('.submit').click(function(){
	    
	    var upload = jQuery('.upload').val();
	    var blank = jQuery('#sections').val(); 
        var attch_name = jQuery('#attch_name').val();
        
        if (upload == ''){
            alert('Please choose your attachment');
        	return false;            
        }  
        else if (blank == "blank"){
            alert('Please select class name');
            return false;
        }
        else if (attch_name == ''){
            jQuety('#myBtnn').css('border-color','red');
        	jQuety('#myBtnn').attr('placeholder','Please write your attachment name');
        	jQuery('#myBtnn').addClass('animated shake');
        	return false;
        }
	});
});
// jQuery(document).ready(function(){
//   var blank = jQuery('#sections').val();    
//   jQuery('.submit').click(function(){
//     if(blank == "blank"){
//         alert('Please select class name');
//         return false;
//     }      
//   });
// });
jQuery(document).ready(function(){
  jQuery('.mobile_tab_close').click(function(){
    jQuery('.user-panel').css('left','100%');
    jQuery('.user-panel').css('width','0%');
  });
});
jQuery(document).ready(function(){
  jQuery('.mobile_tab').click(function(){
    jQuery('.user-panel').css('left','0%');
    jQuery('.user-panel').css('width','100%');
  });
});
jQuery(document).ready(function(){
  jQuery("a#Uhome").click(function(){
    jQuery("#Uhome_pop").css("display","block");
  });
  
  jQuery('.Uhome_close').click(function(){
    jQuery('div#Uhome_pop').css('display','none');
  });
});
// jQuery(document).ready(function(){
//   jQuery('.ok').click(function(){
//       var UploadPass = jQuery('#UploadPass').val();
      
//       if(UploadPass == ''){
//           jQuery('#UploadPass').css('border-color','red');
//           jQuery('#UploadPass').addClass('animated shake');
//           alert("Please enter your password");
//           return false;
//       }
      
//       if (jQuery("#UploadPass").val() == "myadmin"){
        
//           window.location.href = "https://dev58.onlinetestingserver.com/onlinehomework/upload.php";
//           alert('worked');
//       }      
//       else{
//           jQuery('#UploadPass').css('border-color','red');
//           jQuery('#UploadPass').addClass('animated shake');
//           alert("Wrong password");
//           return false; 

//       }
//   });    
// });
$(document).ready(function() {
var movementStrength = 100;
var height = movementStrength / $(window).height();
var width = movementStrength / $(window).width();
$("section").mousemove(function(e){
          var pageX = e.pageX - ($(window).width() / 2);
          var pageY = e.pageY - ($(window).height() / 2);
          var newvalueX = width * pageX * -1 - 25;
          var newvalueY = height * pageY * -1 - 50;
          $('section').css("background-position", newvalueX+"px     "+newvalueY+"px");
});
});
$(document).ready(function() {
var movementStrength = 100;
var height = movementStrength / $(window).height();
var width = movementStrength / $(window).width();
$(".parant").mousemove(function(e){
          var pageX = e.pageX - ($(window).width() / 2);
          var pageY = e.pageY - ($(window).height() / 2);
          var newvalueX = width * pageX * -1 - 25;
          var newvalueY = height * pageY * -1 - 50;
          $('.parant').css("background-position", newvalueX+"px     "+newvalueY+"px");
});
});
// var card = $(".card");

// $(document).on("mousemove",function(e) {  
//   var ax = -($(window).innerWidth()/2- e.pageX)/20;
//   var ay = ($(window).innerHeight()/2- e.pageY)/10;
//   card.attr("style", "transform: rotateY("+ax+"deg) rotateX("+ay+"deg);-webkit-transform: rotateY("+ax+"deg) rotateX("+ay+"deg);-moz-transform: rotateY("+ax+"deg) rotateX("+ay+"deg)");
// });