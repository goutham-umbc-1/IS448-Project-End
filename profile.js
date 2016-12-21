/*
Author: Alvin Blesson
File: profile.js
Description: Specifies Javascript functions Changing user profile
*/


function ChangeRed(where) {

  var dom=document.getElementById("repub");
  if(where=='mouseover'){
          dom.style.color='red';
         dom.style.font='italic 16pt Times';
        }
       else{
        dom.style.color='black';
        dom.style.font='normal 12pt Times';  
       }


}

function ChangeBlue(where) {

  var dom=document.getElementById("dem");
  if(where=='mouseover'){
          dom.style.color='blue';
         dom.style.font='italic 16pt Times';
        }
       else{
        dom.style.color='black';
        dom.style.font='normal 12pt Times';  
       }


}

function CheckState(value1) {

  new Ajax.Request("state.php", 
  { 
    method: "get", 
    parameters: {state:value1},
    onSuccess: displayResult,
    
  } 
  );

}

function displayResult(ajax){
  $("msgbox").innerHTML = ajax.responseText;
}

function Validate(){
  var valid=true;
  var errormessage="";

  var name = document.getElementById("fname").value;
  if (name == ""){ 
      errormessage = errormessage + "First Name is empty! Fill it in! \n";
    valid = false;
  }

  var lname = document.getElementById("lname").value;
  if (lname == ""){ 
      errormessage = errormessage + "Last Name is empty! Fill it in! \n";
    valid = false;
  }

  var street = document.getElementById("address").value;
  if (street == ""){ 
      errormessage = errormessage + "Street is empty! Fill it in! \n";
    valid = false;
  }

  var city = document.getElementById("city").value;
  if (city == ""){ 
      errormessage = errormessage + "City is empty! Fill it in! \n";
    valid = false;
  }

  var state = document.getElementById("state").value;
  if (state == ""){ 
      errormessage = errormessage + "State is empty! Fill it in! \n";
    valid = false;
  }

  state = state.toUpperCase();
  var pattern4 = /^[A-Z]{2}$/;
  var result4 = pattern4.test(state);
  if (result4 == false ){ 
      errormessage = errormessage + "Please Enter a Valid US State Abbreviation! \n";
    valid = false;
  }

  var zip = document.getElementById("zip").value;
  if (zip == ""){ 
      errormessage = errormessage + "Zip Code is empty! Fill it in! \n";
    valid = false;
  }

  var county = document.getElementById("county").value;
  if (county == ""){ 
      errormessage = errormessage + "County is empty! Fill it in! \n";
    valid = false;
  }

  var email = document.getElementById("email").value;
  if (email == ""){ 
      errormessage = errormessage + "Email is empty! Fill it in! \n";
    valid = false;
  }

  /* Very Specific Pattern: one or more alphanumeric including underscores, @, one or more letters, followed only by .com, used i b/c Upper/lower does not matter */
  var pattern1 = /^\w+@[a-z]+\.[a-z]+$/i;
  var result1 = pattern1.test(email);
  if (result1 == false ){ 
      errormessage = errormessage + "Please Enter a Valid Email Address! \n";
    valid = false;
  }

  var phone = document.getElementById("phone").value;
  if (phone == ""){ 
      errormessage = errormessage + "Phone is empty! Fill it in! \n";
    valid = false;
  }
  
  var pattern2 = /^\d{3}-\d{3}-\d{4}$/;
  var result2 = pattern2.test(phone);
  if (result2 == false ){ 
      errormessage = errormessage + "Phone Number is invalid! Please follow this format: ddd-ddd-dddd \n";
    valid = false;
  }

  var dob = document.getElementById("birthday").value;
  var pattern3 = /^\d{4}-\d{2}-\d{2}$/;
  var result3 = pattern3.test(dob);
  if (result3 == false ){ 
      errormessage = errormessage + "Date format is invalid! Please follow this format: YYYY-MM-DD \n";
    valid = false;
  }


  /* Final Condition that displays Concatenated Alert message if Valid is False! */
  if(valid == false){
    alert(errormessage);
    return false;
  }else{
    return true;
  }
}
  
