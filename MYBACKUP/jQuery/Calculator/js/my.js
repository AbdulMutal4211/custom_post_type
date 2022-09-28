function insert(num){
	$(".screen").val($(".screen").val() + num);
}

function eql(){
	$(".screen").val(eval($(".screen").val()));
}

function clr(){
	$(".screen").val('');
}

function del() {
	value = $('.screen').val();
	$('.screen').val(value.substring(0, value.length - 1));
}