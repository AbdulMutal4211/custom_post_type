// function myFunction() {
// 	document.getElementById('test').innerHTML='Tamam students apna home word 1 din k ander ander download (save) kar len 1 din k bad data auto matically delete ho jayega is k bad hamari koi zimedari nahi hogi Barah-e-karam waqt ka khaas khayal rakhen or home work ghar say complete kar k layen<br><br><b>Shukria!</b>';
// 	var close = document.getElementById('close');
// 	var mypop = document.getElementById('mypop');

// 	close.onclick = function(){
//       mypop.style.display = 'none';
// 	}
// }
// function myFunction() {
//     var Uhome_pop = document.getElementById('Uhome_pop');
//       Uhome_pop.style.display = 'block'; 
// }

// var modal = document.getElementById("myModal");
// var btn = document.getElementById("myBtn");
// var span = document.getElementsByClassName("close")[0];
// btn.onclick = function() {
//   modal.style.display = "block";
// }
// span.onclick = function() {
//   modal.style.display = "none";
// }
function validateForm() {

    // alert("Name must be filled out");
    // return false;
    
    var pass = document.getElementById("mypass").value;
    
    if(pass == ""){
        document.getElementById("error").innerHTML = "Please fill the password";
        return false;
    }
    else if (pass == "myadmin"){}
    
    else{
        document.getElementById("error").innerHTML = "Wrong password";
        return false;
    }

}