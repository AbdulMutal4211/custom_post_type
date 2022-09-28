jQuery('.t_btn').click(function(){
    jQuery('.inner_kids').toggleClass('closing');
});	

jQuery('.t_btn').click(function(){
    jQuery('.t_btn .line:eq(0)').toggleClass('line_1');
    jQuery('.t_btn .line:eq(1)').toggleClass('line_2');
});
jQuery('.t_btn').click(function(){
    jQuery('.slide_menu,.menuSVG1').toggleClass('opened_menu');
});

jQuery('.sidebar ul li').click(function(){
   var bg = jQuery(this,'.sidebar ul li').attr('bg');
    jQuery('#full_body').css('background-color',bg);
});
jQuery('.sidebar ul li').click(function(){
   var waveBG = jQuery(this,'.sidebar ul li').attr('waveBG');
    jQuery('.screen svg path').attr('fill',waveBG);
});

jQuery('.sidebar ul li').click(function(){
    jQuery('.welcome').removeClass('active_section');
});

jQuery('li#educator').click(function(){
    setTimeout(function() { 
       jQuery('.educator').addClass('active_section');   
    }, 1000);
});
jQuery('li#puptils').click(function(){
    setTimeout(function() { 
       jQuery('.puptils').addClass('active_section');
    }, 1000); 
});
jQuery('li#chef').click(function(){
    setTimeout(function() { 
       jQuery('.chef').addClass('active_section');
    }, 1000);  
});


var myWave_1 = $('#mySvg_1').wavify({
  height: 550,
  bones: 10,
  amplitude: 100,
  color: '#fbc58a',
  speed: .25
});	
var myWave_2 = $('#mySvg_2').wavify({
  height: 550,
  bones: 10,
  amplitude: 100,
  color: '#fbc58a',
  speed: .30
});



var menu_SVG1 = $('#menu_SVG1').wavify({
  height: 400,
  bones: 10,
  amplitude: 100,
  color: '#000',
  speed: .30
});	
var menu_SVG2 = $('#menu_SVG2').wavify({
  height: 550,
  bones: 10,
  amplitude: 100,
  color: '#ff0000',
  speed: .30
});	