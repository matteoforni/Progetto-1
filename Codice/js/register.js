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
	enableButton();
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
	enableButton();
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
	enableButton();
}

function civicNumberValidation(id, text){
	var regex = /^[0-9]+[a-zA-Z]{0,1}$/;
	if(text != null && regex.test(text) && text.length <= 4){
		document.getElementById(id).style.borderColor = "green";
		number = true;
	}else{
		document.getElementById(id).style.borderColor = "red";
		number = false;
	}
	enableButton();
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
	enableButton();
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
	enableButton();
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
	enableButton();
}

function enableOverlay() {
	if(testo && cap && phone && length && data && number && email){
		document.getElementById("overlay").style.display = "block";
	}	
}

function disableOverlay() {
	document.body.removeChild(document.getElementById("overlay"));
}

function clearForm(){
	document.getElementById("form").reset();
}

function enableButton(){
	console.log(testo)
	console.log(cap)
	console.log(phone)
	console.log(length)
	console.log(data)
	console.log(number)
	console.log(email)
	if(testo && cap && phone && length && data && number && email){
		document.getElementById("avanti").disabled = false;
	}else{
		document.getElementById("avanti").disabled = true;		
	}
}
