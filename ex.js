/*works with onclick on submit button */
function validate(x){




	new Ajax.Request("zip.php",
	{
		method:"get",
		parameters:{zip:x},
		onSuccess: displayResult,
	}
		);
}
function displayResult(ajax){
	$("msg").innerHTML = ajax.responseText;
}






