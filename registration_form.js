function validateForm(){
	var phone = document.getElementById("phone").value;
	var DoB = document.getElementById("DOB").value;

	var phonePattern = /\d{3}\-\d{3}\-\d{4}/;
	var datePattern = /\d\d\/\d\d\/\d{4}/;

	var phoneResult = phonePattern.test(phone);
	var dateResult = datePattern.test(DoB);

	var password = document.getElementById("pass").value;
	var confirmPassword = document.getElementById("confirmpass").value;

	if (password != confirmPassword){
		alert("Passwords do not match");
		return false;
	}

	var errorMsg = "";
	var flag = true;

	if(phoneResult == false){

		errorMsg += "Please enter the correct phone number format: ###-###-#### \n";
		flag = false;
	}

	if(dateResult == false){
		errorMsg += "Please enter the correct Date of Birth format: MM/DD/YYYY \n";
		flag = false;
	}

	if(flag == false){
		alert(errorMsg);
		flag = true;
		errorMsg = ""
		return false;
	}

}

function changeColor(position){
	var where = document.getElementById("changecolor");
	if (position == 'mouseover'){
		where.style.backgroundColor = 'yellow';
		where.style.color = 'black';
	}

	else{
		where.style.backgroundColor = 'lightblue';
		where.style.color = 'red';
	}
}

function checkButton1(value){

	new Ajax.Request( "validatebutton.php",
	{
		method: "post",
		parameters: {type:value},
		onSuccess: displayResult1
	});

}

function displayResult1(ajax){
	var r = ajax.responseText;
	$('button1').innerHTML = r;
}

function checkButton2(value){

	new Ajax.Request( "validatebutton.php",
	{
		method: "post",
		parameters: {type:value},
		onSuccess: displayResult2
	});

}

function displayResult2(ajax){
	var r = ajax.responseText;
	$('button2').innerHTML = r;
}

     
var adviceValues = ["You must enter at least your first and last name.",
  "You must enter your date of birth. \nYour date of birth must be in the format: MM/DD/YYYY",
  "There are no restraints for this field",
  "You must enter a phone number. \nYour phone number must be in the following format: ###-###-####",
  "There are no restraints for this field",
  "You must enter an address. Any format is accepted.",
  "You must enter a city. Any format is accepted.",
  "You must enter a zip code. Only 5 digits are accepted.",
  "There are no restraints for this field.",
  "This box provides advice on filling out\
 the form on this page. Put the mouse cursor over any \
 input field to get advice.",
  "Both of your passwords must match."]


function messages(num) {
  document.getElementById("adviceBox").value = adviceValues[num];
}
