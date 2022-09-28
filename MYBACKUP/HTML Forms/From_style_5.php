<?php 
/*template name: Form*/
get_header(); 

?>
<?php nectar_page_header($post->ID); ?>
<style>
}
/********STEP FORM CSS************/
button#nextBtn {float: right;}
.form_section .step.finish:after {background-color: #3a54b4;}
.mypagination {display: flex; text-align: center; }
.step_patant {width: 100%; position: relative; }
.form_section input.invalid {background-color: #ffdddd; } .form_section .tab {display: none;margin: 50px 0;}
.form_section .step h4 {line-height: 53px;color: #000;font-family: 'Poppins';position: absolute;z-index: 9999;left: 0;right: 0;font-size: 22px;}
.form_section .active h4,.form_section .finish h4{color: #fff !important;}
.form_section .step {height: 60px;width: 60px;margin: 0 0;background-color: #eef2ff;border-radius: 50%;display: inline-block;opacity: 1;border: 5px solid #fff;}
.active:before {content: "" !important; height: 8px; width: 100%; position: absolute; background-color: #3a54b4; left: 0; top: 25px; z-index: 9999; }
.form_section .step.active,.form_section .step.finish {opacity: 1 !important;background-color: #3a54b4 !important;z-index: 9999 !important;border-color: #d8ddf0;}
.form_section .step.finish {background-color: #3a54b4 !important; /*     opacity: 0.5; */ }
span.step:after {content: ""; height: 8px; width: 100%; position: absolute; background-color: #eef2ff; left: 0; top: 25px; z-index: -1; }
#prevBtn, #nextBtn, #submit_btn {padding: 10px 30px !important; font-size: 15px; color: #fff; border: none; font-family: poppins; text-transform: uppercase !important; cursor: pointer; background: linear-gradient(to left, #3a54b4 50%, #eef2ff 50%); background-size: 212%; background-position: right bottom; transition: all .5s ease; margin: 0px 0px; width: 170px; border-radius: 7px !important; display: inline-block; font-weight:200 !important;}
#prevBtn:hover, #nextBtn:hover, #submit_btn:hover {background-position: left bottom;text-decoration: none;background-size: 210%;color: #000;}
.next_preview_btn {display: inline-block;width: 100%;margin: 0px 0px 0px 0px !important;}

.step_header {text-align: center; margin-bottom: 30px; }
.step_header .content img {width: 100% !important; height: 120px; object-fit: contain; margin: 0 !important; }
.step_header .content {position: relative; } 
.step_header .content:before {width: 150px; height: 150px; background-color: #f6f6ff; content: ""; position: absolute; border-radius: 50%; z-index: -1; left: 50%; top: 50%; transform: translate(-50%, -50%); }
.field i {position: absolute; right: 15px; top: 50%; transform: translate(0px, -50%); color: #3a54b4; }
.field {margin-bottom: 15px; position: relative; }
.step_header {display: inline-block; width: 100%; }
.step_body {display: inline-block;width: 100%;}
.map_box iframe {width: 100%; height: 500px; border-radius: 20px; }
.field input, .field select {width: 100% !important; background-color: #fff !important; box-shadow: 0px 0px 10px 0px #0000001c !important; height: 50px; border: none !important; padding: 4px 15px !important; font-size: 15px !important; font-family: 'Poppins'; color: #333333; border-radius: 3px !important; }
.select_location {display: inline-block; width: 100%; margin: 30px 0px; }
button#submit_btn {float: right; }
.step.finish ~ h6, .step.active ~ h6 {color: #3a54b4; }
.main_sec {padding: 50px 0; }

@media (max-width: 1366px){
.poppup_box {
    width: 35%;
}
}
@media (max-width: 1024px){
.poppup_box {
    width: 40%;
}
}
@media (max-width: 800px){
.poppup_box {
    width: 60%;
}
}
@media(max-width:800px){
.step3 .col,.step4 .col {
    margin: 0 !important;
}   
.poppup_box {
    width: 80%;
    padding: 3%;
}   
}
@media(max-width:480px){
.paypopup a#prevBtn {
    font-size: 15px;
    width: auto !important;
}   
.step_header .content img {
    height: 80px;
}   
.step_header .content:before {
    width: 120px;
    height: 120px;
}   
}

@media(max-width:414px){
.poppup_box {
    width: 90%;
}   
.myRadio {
    font-size: 14px;
}
#prevBtn, #nextBtn {
    padding: 8px 0px;
    font-size: 16px;
    width: 128px !important;
}   
}
/********STEP FORM CSS************/  
</style>





<div class="main_sec">
    <div class="container-wrap">
        <div class="container">
            <div class="row">
                <div class="form_section">
                    <form action="<?= home_url() . '/popup/'?>" method="post" id="regForm">             
                        <div class="mypagination"   >
                            <div class="step_patant">
                                <span class="step"><h4>1</h4></span>
                                <p class="txt">Step</p>
                            </div>
                            <div class="step_patant">
                                <span class="step"><h4>2</h4></span>
                                <p class="txt">Step</p>
                            </div>
                            <div class="step_patant">
                                <span class="step"><h4>3</h4></span>
                                <p class="txt">Step</p>
                            </div>
                            <div class="step_patant">
                                <span class="step"><h4>4</h4></span>
                                <p class="txt">Step</p>
                            </div>
                            <div class="step_patant">
                                <span class="step"><h4>5</h4></span>
                                <p class="txt">Step</p>
                            </div>
                        </div>

                        <!---------STEP 1 START--------->
                        <div class="tab">
                            <div class="step1">
                                <div class="step_header">
                                    <div class="content">
                                        <img src="<?= home_url() . '/wp-content/uploads/2021/06/1.png'?>">
                                        <h3>I Am Attending...</h3>
                                    </div>
                                </div>  
                                <div class="step_body">   
                                </div>
                            </div>                  
                        </div>  
                        <!---------STEP 1 END--------->                                             
                        <!---------STEP 2 START-------> 
                        <div class="tab">
                            <div class="step2">
                                <div class="step_header">
                                    <div class="content">
                                        <img src="<?= home_url() . '/wp-content/uploads/2021/06/2.png'?>">
                                        <h3>My Microvacation Date Will Be...</h3>
                                    </div>
                                </div>  
                                <div class="step_body">   
                                </div>       
                            </div>
                        </div>
                        <!---------STEP 2 END---------> 
                        <!---------STEP 3 START-------> 
                        <div class="tab">
                            <div class="step3">
                                <div class="step_header">
                                    <div class="content">
                                        <img src="<?= home_url() . '/wp-content/uploads/2021/06/3.png'?>">
                                        <h3>My Microvacation Will Include...</h3>
                                    </div>
                                </div>  
                                <div class="step_body">
                                    
                                </div>                                                                                          
                            </div>
                        </div>
                        <!---------STEP 3 END--------->
                        <!---------STEP 4 START-------> 
                        <div class="tab">
                            <div class="step4">
                                <div class="step_header">
                                    <div class="content">
                                        <img src="<?= home_url() . '/wp-content/uploads/2021/06/4.png'?>">
                                        <h3>My Microvacation Summary</h3>
                                    </div>
                                </div>  
                                <div class="step_body">
                                    
                                </div>  
                            </div>                              
                        </div>
                        <!---------STEP 4 END--------->
                        <!---------STEP 4 START-------> 
                        <div class="tab">
                            <div class="step5">
                                <div class="step_header">
                                    <div class="content">
                                        <img src="<?= home_url() . '/wp-content/uploads/2021/06/5.png'?>">
                                        <h3>Checkout</h3>
                                    </div>
                                </div>  
                                <div class="step_body">
                                    
                                </div>  
                            </div>                              
                        </div>
                        <!---------STEP 5 END--------->
                        <input type="hidden" name="action" value="stepFormfield">
                        <div class="next_preview_btn">
                            <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                            <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
                            <button type="submit" style="display: none;" id="submit_btn">Submit</button>
                        </div>
                    </form>                 
                </div>          
            </div>
        </div>
    </div>
</div>




<!--------------Custom js--------------->
<script type="text/javascript">
  var currentTab = 0; // Current tab is set to be the first tab (0)
  showTab(currentTab); // Display the current tab

  function showTab(n) {
    // This function will display the specified tab of the form ...
    var x = document.getElementsByClassName("tab");
    x[n].style.display = "block";
    // ... and fix the Previous/Next buttons:
    if (n == 0) {
      document.getElementById("prevBtn").style.display = "none";
    } else {
      document.getElementById("prevBtn").style.display = "inline";
            document.getElementById("nextBtn").style.display = "block"
      document.getElementById("submit_btn").style.display = "none"
    }
    if (n == (x.length - 1)) {
      document.getElementById("nextBtn").innerHTML = "Submit";
      document.getElementById("nextBtn").style.display = "none"
      document.getElementById("submit_btn").style.display = "inline"
      //document.getElementById("nextBtn").type = "submit";
    } else {
      document.getElementById("nextBtn").innerHTML = "Next";
    }
    // ... and run a function that displays the correct step indicator:
    fixStepIndicator(n)
  }

  var check_emty = false;
  function nextPrev(n) {
    // This function will figure out which tab to display
    var x = document.getElementsByClassName("tab");
    // Exit the function if any field in the current tab is invalid:
    if (n == 1 && !validateForm()) return false;
    // Hide the current tab:
    if (n == -1) {document.getElementsByClassName("step")[currentTab].classList.remove("finish");}
    x[currentTab].style.display = "none";
    // Increase or decrease the current tab by 1:
    currentTab = currentTab + n;
    // if you have reached the end of the form... :
    if (currentTab >= x.length) {
      //...the form gets submitted:
      document.getElementById("regForm").submit();
      return false;
    }
    // Otherwise, display the correct tab:
    showTab(currentTab);
  }

  function validateForm() {
    // This function deals with validation of the form fields
    var x, y, i, valid = true;
    x = document.getElementsByClassName("tab");
    y = x[currentTab].getElementsByTagName("input");
    // A loop that checks every input field in the current tab:
    for (i = 0; i < y.length; i++) {
      // If a field is empty...
      if (y[i].value == "") {
        // add an "invalid" class to the field:
        y[i].className += " invalid";
        // and set the current valid status to false:
        valid = false;
      }
    }
    // If the valid status is true, mark the step as finished and valid:
    if (valid) {
      document.getElementsByClassName("step")[currentTab].className += " finish";
    }
    return valid; // return the valid status
  }

  function fixStepIndicator(n) {
    // This function removes the "active" class of all steps...
    var i, x = document.getElementsByClassName("step");
    for (i = 0; i < x.length; i++) {
      x[i].className = x[i].className.replace(" active", "");
    }
    //... and adds the "active" class to the current step:
    x[n].className += " active";
  } 
</script>
<!--------------Custom js--------------->
<?php get_footer(); ?>