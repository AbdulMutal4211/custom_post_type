jQuery('.addField').click(function(){
    jQuery('.add_More_fields').append('<div class="field col span_12"><div class="f_inner"><input type="text" name="" class="myInput" required><input type="file" name="" class="choose_flie" accept=".xlsx,.xls,image/*,.doc, .docx,.ppt, .pptx,.txt,.pdf" required><i class="fa fa-minus removeField applyCSS" aria-hidden="true"></i></div></div>');
	var a = jQuery('.add_More_fields .field').size();
	jQuery('.add_More_fields .field:last-child input.choose_flie').attr('name','file_'+a);
	jQuery('.add_More_fields .field:last-child input.myInput').attr('name','file_text_'+a);
});
setInterval(function () {
	jQuery('.removeField').on('click', function () {
		jQuery(this).parent().parent('.field').remove();
	});
}, 500)
jQuery('input.choose_flie').change(function(){
    jQuery('input.choose_flie').each(function(){
        var filename = jQuery(this).val().split('\\').pop();
        jQuery(this).prev().val(filename);
    });
});
jQuery('.addField').click(function(){
    jQuery('input.choose_flie').each(function(){
        jQuery('input.choose_flie').change(function(){
            var filename = jQuery(this,'input.choose_flie').val().split('\\').pop();
            jQuery(this).prev().val(filename);
        });
    });
});