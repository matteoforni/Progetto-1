var testo = false;
var cap = false;
var data= false;
var number = false;
var length = true;
var phone = false;
var email = false;

function textValidation(id, text){
	var regex = /^[a-zA-Z àáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĆČĖĘÈÉÊËÌÍÎÏĮŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑČŠŽ]+$/;
	if(text != null && regex.test(text) && text.length <= 50){
		document.getElementById(id).style.borderColor = "green";
		testo = true;
	}else {
		document.getElementById(id).style.borderColor = "red";
		testo = false;
	}
}

function capValidation(id, text){
	var regex = /^[0-9]+$/;
	if(text != null && regex.test(text) && text.length <= 5){
		document.getElementById(id).style.borderColor = "green";
		cap = true;
	}else{
		document.getElementById(id).style.borderColor = "red";
		cap = false;
	}
}

function dateValidation(id, date){
	var today = Date.now();
	date = new Date(date);
	var millis = date.getTime();
	if(millis>today){
		document.getElementById(id).style.borderColor = "red";
		data = false;
	}else{
		document.getElementById(id).style.borderColor = "green";
		data = true;
	}
}

function civicNumberValidation(id, text){
	var regex = /^[0-9a-zA-Z]+$/;
	if(text != null && regex.test(text) && text.length <= 4){
		document.getElementById(id).style.borderColor = "green";
		number = true;
	}else{
		document.getElementById(id).style.borderColor = "red";
		number = false;
	}
}

function checkLength(id, text){
	if(text != null){
		if(text.length <= 500){
			document.getElementById(id).style.borderColor = "green";
			length = true;
		}else {
			document.getElementById(id).style.borderColor = "red";
			length = false;
		}
	}
}

function phoneValidator(id, text){
	var regex = /^[\+]?[0-9 ]{10,15}$/;
	if(regex.test(text)){
		document.getElementById(id).style.borderColor = "green";
		phone = true;
	}else{
		document.getElementById(id).style.borderColor = "red";
		phone = false;
	}
}

function emailValidator(id, text){
	var regex = /^([A-Za-z0-9._%+-])+@([A-Za-z0-9.-])+\.([A-Za-z]){2,4}/;
	if(text != null && regex.test(text) && text.length < 50){
		document.getElementById(id).style.borderColor = "green";
		email = true;
	}else{
		document.getElementById(id).style.borderColor = "red";
		email = false;
	}
}

function disableInputs(){
	if(testo && cap && email && phone && number && data && length){
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

		var clearButton = document.getElementById("cancella");
		var goButton = document.getElementById("avanti");

		clearButton.value = "correggi";
		goButton.value = "invia";
		goButton.removeEventListener("click", disableInputs);
		clearButton.addEventListener("click", enableInputs);
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

	var clearButton = document.getElementById("cancella");
	var goButton = document.getElementById("avanti");

	clearButton.value = "cancella";
	goButton.value = "avanti";
	goButton.removeEventListener("click", enableInputs);
	clearButton.addEventListener("click", disableInputs);
	console.log("::"+document.getElementById("nome").value)
}

function enableOverlay() {
  document.getElementById("overlay").style.display = "block";
}

function disableOverlay() {
	document.body.removeChild(document.getElementById("overlay"));
}

function clearForm(){
	document.getElementById("form").reset();
}
