/*
Anderson Chan
IS448 - Project

validates form submission and other things
 
*/

function displayFAQ(faqid) {
	new Ajax.Request( "faqpage2.php",
        {
          method: "POST",
          parameters: {faq:faqid},
          onSuccess: displayResult
		}
		);
}

function displayResult(ajax) {
    var response = ajax.responseText;
	$('faqtext').innerHTML = response;
}

function displayFAQ2(faqid) {
	new Ajax.Request( "faqpage2.php",
        {
          method: "POST",
          parameters: {faq:faqid},
          onSuccess: displayResult2
		}
		);
}

function displayResult2(ajax) {
    var response = ajax.responseText;
	$('faqtext2').innerHTML = response;
}

function displayFAQ3(faqid) {
	new Ajax.Request( "faqpage2.php",
        {
          method: "POST",
          parameters: {faq:faqid},
          onSuccess: displayResult3
		}
		);
}

function displayResult3(ajax) {
    var response = ajax.responseText;
	$('faqtext3').innerHTML = response;
}

function displayFAQ4(faqid) {
	new Ajax.Request( "faqpage2.php",
        {
          method: "POST",
          parameters: {faq:faqid},
          onSuccess: displayResult4
		}
		);
}

function displayResult4(ajax) {
    var response = ajax.responseText;
	$('faqtext4').innerHTML = response;
}

function displayFAQ5(faqid) {
	new Ajax.Request( "faqpage2.php",
        {
          method: "POST",
          parameters: {faq:faqid},
          onSuccess: displayResult5
		}
		);
}

function displayResult5(ajax) {
    var response = ajax.responseText;
	$('faqtext5').innerHTML = response;
}

function displayFAQ6(faqid) {
	new Ajax.Request( "faqpage2.php",
        {
          method: "POST",
          parameters: {faq:faqid},
          onSuccess: displayResult6
		}
		);
}

function displayResult6(ajax) {
    var response = ajax.responseText;
	$('faqtext6').innerHTML = response;
}
function displayFAQ7(faqid) {
	new Ajax.Request( "faqpage2.php",
        {
          method: "POST",
          parameters: {faq:faqid},
          onSuccess: displayResult7
		}
		);
}

function displayResult7(ajax) {
    var response = ajax.responseText;
	$('faqtext7').innerHTML = response;
}

function displayFAQ8(faqid) {
	new Ajax.Request( "faqpage2.php",
        {
          method: "POST",
          parameters: {faq:faqid},
          onSuccess: displayResult8
		}
		);
}

function displayResult8(ajax) {
    var response = ajax.responseText;
	$('faqtext8').innerHTML = response;
}

function displayFAQ9(faqid) {
	new Ajax.Request( "faqpage2.php",
        {
          method: "POST",
          parameters: {faq:faqid},
          onSuccess: displayResult9
		}
		);
}

function displayResult9(ajax) {
    var response = ajax.responseText;
	$('faqtext9').innerHTML = response;
}

function displayFAQ10(faqid) {
	new Ajax.Request( "faqpage2.php",
        {
          method: "POST",
          parameters: {faq:faqid},
          onSuccess: displayResult10
		}
		);
}

function displayResult10(ajax) {
    var response = ajax.responseText;
	$('faqtext10').innerHTML = response;
}

function displayFAQ11(faqid) {
	new Ajax.Request( "faqpage2.php",
        {
          method: "POST",
          parameters: {faq:faqid},
          onSuccess: displayResult11
		}
		);
}

function displayResult11(ajax) {
    var response = ajax.responseText;
	$('faqtext11').innerHTML = response;
}

function displayFAQ12(faqid) {
	new Ajax.Request( "faqpage2.php",
        {
          method: "POST",
          parameters: {faq:faqid},
          onSuccess: displayResult12
		}
		);
}

function displayResult12(ajax) {
    var response = ajax.responseText;
	$('faqtext12').innerHTML = response;
}

function displayFAQ13(faqid) {
	new Ajax.Request( "faqpage2.php",
        {
          method: "POST",
          parameters: {faq:faqid},
          onSuccess: displayResult13
		}
		);
}

function displayResult13(ajax) {
    var response = ajax.responseText;
	$('faqtext13').innerHTML = response;
}

function displayFAQ14(faqid) {
	new Ajax.Request( "faqpage2.php",
        {
          method: "POST",
          parameters: {faq:faqid},
          onSuccess: displayResult14
		}
		);
}

function displayResult14(ajax) {
    var response = ajax.responseText;
	$('faqtext14').innerHTML = response;
}

function giveAdvice(number) {
	var advText = [
	"Please write what you would like to know or any issues encountered on the website.",

	"Please provide a return address for us to contact you at.",
	
	"Mouse over the form element to read instructions."
	]
 
	var adv = document.getElementById("adviceBox");

    adv.innerHTML = advText[number];
}

function checkFields() {
	var email = document.getElementById("useremail").value;
	var emailExp = /^\w*@\w*\.[A-Za-z]{2,}$/;		
	var emailTest = emailExp.test(email);
	if (email == '') {	
		document.getElementById("useremail").focus();
		document.getElementById("useremail").select();
	} else if (!emailTest) {
		document.getElementById("useremail").focus();
		document.getElementById("useremail").select();
	}
	
	var comment = document.getElementById("commentbox").value;
	if (comment == '') {		
		document.getElementById("commentbox").focus();
		document.getElementById("commentbox").select();
	}
}

function highlight(id) {
	var x = document.getElementById(id);
	
	if (x.style.fontWeight == "bold") {
		x.style.fontWeight="normal";
	} else {
		x.style.fontWeight="bold";
	}
}

// Used to toggle the menu on small screens when clicking on the menu button
function myFunction(id) {
	var x = document.getElementById(id);
	if (x.className.indexOf("w3-show") == -1) {
		x.className += " w3-show";
	} else { 
		x.className = x.className.replace(" w3-show", "");
	}
}
