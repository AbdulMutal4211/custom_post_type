<div class="usr_img_wrap m-auto d-table tc">
	<img src="images/user-img.png">
	<div class="img_uploader">
		<input type="file" name="" id="usr_img_file" onchange="previewFile()">
		<i class="fa fa-camera" aria-hidden="true"></i>
	</div>
</div>
<style>
.usr_img_wrap {width: 150px !important; position: relative; margin: 30px auto 30px !important; }
.usr_img_wrap img {width: 150px; height: 150px; object-fit: cover; border-radius: 50%; }
.img_uploader {position: absolute; width: 35px; height: 35px; border-radius: 50%; background-color: #3bc9d7; color: #fff; line-height: 34px; overflow: hidden; bottom: 15px; right: 0px; border: 1px solid; }
.img_uploader input#usr_img_file {position: absolute; cursor: pointer; display: inline-block; z-index: 999999999 !important; opacity: 0; left: 0; top: 0; bottom: 0; right: 0; }
</style>
<script>
function previewFile(input){
   var file = jQuery("input[type=file]").get(0).files[0];

   if(file){
       var reader = new FileReader();

       reader.onload = function(){
           jQuery(".usr_img_wrap img").attr("src", reader.result);
       }

       reader.readAsDataURL(file);
   }
}		
</script>