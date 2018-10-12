function textValidation(id, text){
	var regex = /^[a-zA-Z àáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĆČĖĘÈÉÊËÌÍÎÏĮŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑČŠŽ]+$/;
	if(regex.test(text) && text.length <= 50){
		document.getElementById("avanti").disabled = true;
		document.getElementById(id).style.borderColor = "rgb(180,180,180)";
	}else {
		document.getElementById("avanti").disabled = false;
		document.getElementById(id).style.borderColor = "red";
	}
}

function capValidation(id, text){
	var regex = /^[0-9]+$/;
	if(regex.test(text && text.length <= 5)){
		document.getElementById("avanti").disabled = false;
		document.getElementById(id).style.borderColor = "rgb(180,180,180)";
	}else{
		document.getElementById("avanti").disabled = true;
		document.getElementById(id).style.borderColor = "red";
	}
}

function dateValidation(id, date){
	var today = Date.now();
	date = new Date(date);
	var millis = date.getTime();
	if(millis>today){
		document.getElementById("avanti").disabled = true;
		document.getElementById(id).style.borderColor = "red";
	}else{
		document.getElementById("avanti").disabled = false;
		document.getElementById(id).style.borderColor = "rgb(180,180,180)";
	}
}

function civicNumberValidation(id, text){
	var regex = /^[0-9a-zA-Z]+$/;
	if(regex.test(text && text.length <= 4)){
		document.getElementById("avanti").disabled = false;
		document.getElementById(id).style.borderColor = "rgb(180,180,180)";
	}else{
		document.getElementById("avanti").disabled = true;
		document.getElementById(id).style.borderColor = "red";
	}
}

function checkLength(id, text){
	if(text.length <= 500){
		document.getElementById("avanti").disabled = true;
		document.getElementById(id).style.borderColor = "rgb(180,180,180)";
	}else {
		document.getElementById("avanti").disabled = false;
		document.getElementById(id).style.borderColor = "red";
	}
}

function phoneValidator(id, text){
	var regex = /^[0-9 +-]+$/;
	if(regex.test(text && text.length < 30 && text.length >= 10)){
		document.getElementById("avanti").disabled = false;
		document.getElementById(id).style.borderColor = "rgb(180,180,180)";
	}else{
		document.getElementById("avanti").disabled = true;
		document.getElementById(id).style.borderColor = "red";
	}

}

function disableInputs(){
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
}