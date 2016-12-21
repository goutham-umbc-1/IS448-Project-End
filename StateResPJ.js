// Gregory Y. Rigby
function IDcheck() {
  
var yourID = document.getElementById("state_id");

var pos = yourID.value.search(/^[A-Z]-\d{3}-\d{3}-\d{3}-\d{3}$/);

if (pos != 0) { 

alert("The MVA ID Card number you entered is not in the correct form. \n The correct form is: X-ddd-ddd-ddd-ddd \n Please go back and fix your MVA ID Card number.");

return false;
}
else 
return true;
}
 
function LicenCheck() {

var yourID = document.getElementById("licen_num");

var pos = yourID.value.search(/^[a-z]-\d{3}-\d{3}-\d{3}-\d{3}$/);

if (pos != 0) {

alert("The Driver's License number you entered is not in the correct form. \n The correct form is: x-ddd-ddd-ddd-ddd \n Please go back and fix your Driver's License number.");

return false;
}
else   
return true;
}
 
function SecNumCheck() {

var yourID = document.getElementById("soc_num");

var pos = yourID.value.search(/^\d\d\d\d$/);

if (pos != 0) {

alert("The Social Security number you entered is not in the correct form. \n The correct form is: dddd \n Please go back and fix your Social Security number.");

return false;
}
else 
return true;
} 
 
function mouseOver() { 
    document.getElementById("idcolor").style.color = "red";
    document.getElementById("licolor").style.color = "blue";
    document.getElementById("socolor").style.color = "green";
}

function mouseOut() {
    document.getElementById("idcolor").style.color = "black";
    document.getElementById("licolor").style.color = "black";
    document.getElementById("socolor").style.color = "black";
}

var helpers = ["Your MVA ID Card number must be in the form: \n \
 X-ddd-ddd-ddd-ddd",
  "Your Driver's License number must be in the form: \n \
 x-ddd-ddd-ddd-ddd",
  "Your Social Security number must be in the form: \n \
 dddd",
  "This box provides tips on filling out\
 the form on this page. Put the mouse cursor over any \
 input field to get tips."]



function messages(tipNumber) {
  document.getElementById("tipBox").value = helpers[tipNumber];
}


function checkResults(incomingValue){
  new Ajax.Request( "StateResP.php", 
  { 
    method: "post", 
    parameters: {state_id:incomingValue, licen_num:incomingValue, soc_num:incomingValue},
    onSuccess: displayResult
  } );
}

function displayResult(ajax){
	var r = ajax.responseText;
	$('results').innerHTML = r; }



function changeColor(where)
      {
        var dom=document.getElementById("changeText");
        if(where=='mouseover'){
          dom.style.color='white';
         dom.style.font='italic 20pt Times';
        }
       else{
        dom.style.color='black';
        dom.style.font='normal 20pt sans-serif';  
       }
}
