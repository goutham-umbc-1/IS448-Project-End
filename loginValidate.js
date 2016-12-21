function validateUsername(incomingValue){
  new Ajax.Request("login.php", 
  { 
    method: "post", 
    parameters: {password1:incomingValue},
    onSuccess: displayResult
  } );
}
function displayResult(ajax){
	var r = ajax.responseText;
	$('response').innerHTML = r;
}