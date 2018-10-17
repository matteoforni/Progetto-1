var control = false;
function textValidation(id, text){
	var regex = /^[a-zA-Z àáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĆČĖĘÈÉÊËÌÍÎÏĮŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑČŠŽ]+$/;
	if(regex.test(text) && text.length <= 50){
		document.getElementById(id).style.borderColor = "green";
		control = true;	
		removeErrorMessage(id);
		return true;
	}else {
		control = false;	
		document.getElementById(id).style.borderColor = "red";
		createErrorMessage(id);
		return false;
	}
}

function capValidation(id, text){
	var regex = /^[0-9]+$/;
	if(regex.test(text) && text.length <= 5){
		document.getElementById(id).style.borderColor = "green";
		control = true;	
		removeErrorMessage(id);
		return true;
	}else{
		document.getElementById(id).style.borderColor = "red";
		control = false;
		createErrorMessage(id);
		return false;
	}
}

function dateValidation(id, date){
	var today = Date.now();
	date = new Date(date);
	var millis = date.getTime();
	if(millis>today){
		document.getElementById(id).style.borderColor = "red";
		control = false;
		createErrorMessage(id);
		return false;
	}else{
		document.getElementById(id).style.borderColor = "green";
		control = true;	
		removeErrorMessage(id);
		return true;
	}
}

function civicNumberValidation(id, text){
	var regex = /^[0-9a-zA-Z]+$/;
	if(regex.test(text) && text.length <= 4){
		document.getElementById(id).style.borderColor = "green";
		control = true;	
		removeErrorMessage(id);
		return true;
	}else{
		document.getElementById(id).style.borderColor = "red";
		control = false;
		createErrorMessage(id);
		return false;
	}
}

function checkLength(id, text){
	if(text.length <= 500){
		document.getElementById(id).style.borderColor = "green";
		control = true;	
		removeErrorMessage(id);
		return true;
	}else {
		document.getElementById(id).style.borderColor = "red";
		control = false;
		createErrorMessage(id);
		return false;
	}
}

function phoneValidator(id, text){
	var regex = /^[0-9 +-]+$/;
	if(regex.test(text) && text.length < 30 && text.length >= 10){
		document.getElementById(id).style.borderColor = "green";
		control = true;	
		removeErrorMessage(id);
		return true;
	}else{
		document.getElementById(id).style.borderColor = "red";
		control = false;
		createErrorMessage(id);
		return false;
	}

}

function emailValidator(id, text){
	var regex = /^([A-Za-z0-9._%+-])+@([A-Za-z0-9.-])+\.([A-Za-z]){2,4}/;
	if(regex.test(text) && text.length < 50){
		document.getElementById(id).style.borderColor = "green";
		control = true;	
		removeErrorMessage(id);
		return true;
	}else{
		document.getElementById(id).style.borderColor = "red";
		control = false;
		createErrorMessage(id);
		return false;
	}

}

function createErrorMessage(id){
	var div = document.createElement("div");
	div.style.background = "white";
	div.id = "error-" + id;
	div.style.borderRadius = "10px";
	div.style.width = "12%";
	div.style.height = "12%";
	div.style.zIndex = "2";	
	var t = document.createTextNode("Il campo " + id + " è sbagliato");
    div.appendChild(t);
    document.body.insertBefore(div, document.body.firstChild);
}

function removeErrorMessage(id){
	if(error){
		var error = "error-" + id;
		var text = document.getElementById(error);
    	document.getElementById("mainForm").removeChild(text);
	}	
}

function enableButton(){
	if(textValidation() && capValidation() && emailValidator() && phoneValidator() && civicNumberValidation() && dateValidation()){
		var button = document.getElementById("avanti");
		button.style.disabled = "false";
		button.addEventListener("click", disableInputs()); 
	}
}

function disableInputs(){
	if(textValidation() && capValidation() && emailValidator() && phoneValidator() && civicNumberValidation() && dateValidation()){
		document.getElementById("nome").disabled = true;
		document.getElementById("cognome").disabled = true;
		document.getElementById("data").disabled = true;
		document.getElementById("E-Mail").disabled = true;
		document.getElementById("CAP").disabled = true;
		document.getElementById("No-Civico").disabled = true;
		document.getElementById("via").disabled = true;
		document.getElementById("telefono").disabled = true;
		document.getElementById("hobby").disabled = true;
		document.getElementById("professione").disabled = true;

		var button = document.getElementById("cancella");
		button.value = "correggi";
		button.addEventListener("click", enableInputs()); 
	}else{
		enableOverlay();
	}
}

function enableInputs(){
	document.getElementById("nome").disabled = false;
	document.getElementById("cognome").disabled = false;
	document.getElementById("data").disabled = false;
	document.getElementById("E-Mail").disabled = false;
	document.getElementById("CAP").disabled = false;
	document.getElementById("No-Civico").disabled = false;
	document.getElementById("via").disabled = false;
	document.getElementById("telefono").disabled = false;
	document.getElementById("hobby").disabled = false;
	document.getElementById("professione").disabled = false;

	var button = document.getElementById("cancella");
	button.value = "cancella";
	button.addEventListener("click", disableInputs()); 
}

function enableOverlay() {
    document.getElementById("overlay").style.display = "block";
}

function disableOverlay() {
    document.getElementById("overlay").style.display = "none";
}