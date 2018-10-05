function textControl(input, text){
	if(/[^A-Za-züèöéàä]/.test(text)){
		document.getElement(input).style.borderColor = "red";
	}
}