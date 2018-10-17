<!DOCTYPE html>
<html>
<head>
  	<title>Register</title>
  	<meta charset="utf-8">
	<meta name="author" content="Matteo Forni">
	<meta name="date" content="14.09.2018">
	<meta name="description" content="Primo progetto mod.306">
	<meta name="keywords" content="306, Progetto-1">
  	<link rel="stylesheet" type="text/css" href="css/register.css">
  	<link rel="stylesheet" type="text/css" href="css/animate.css-master/animate.min.css">

  	
</head>
<body>
	<div id="mainForm">
		<h1 class="animated slideInDown">Registrati</h1>
		<form method="POST" action="<?php htmlspecialchars($_SERVER["PHP_SELF"])?>">
			<table id="mainTable">
				<tr>
					<td><h5>Nome *</h5></td>
					<td><input type="text" name="nome" title="nome" id="nome" 
					required="true" onblur="textValidation(this.id, this.value)"></td>
				</tr>
				<tr>
					<td><h5>Cognome *</h5></td>
					<td><input type="text" name="cognome" title="cognome" id="cognome" required="true" onblur="textValidation(this.id, this.value)"></td>
				</tr>
				<tr>
					<td><h5>Data di nascita *</h5></td>
					<td><input type="date" name="data" id="data" required="true" 
						onblur="dateValidation(this.id, this.value)"></td>
				</tr>
				<tr>
					<td><h5>E-Mail *</h5></td>
					<td><input type="text" name="E-Mail" title="E-Mail" id="E-Mail" required="true" onblur="emailValidator(this.id, this.value)"></td>
				</tr>
				<tr>
					<td><h5>CAP *</h5></td>
					<td><input type="text" name="CAP" title="CAP" id="CAP" required="true" 
					onblur="capValidation(this.id, this.value)"></td>
				</tr>
				<tr>
					<td><h5>Num. Civico *</h5></td>
					<td><input type="text" name="No-Civico" title="No-Civico" id="No-Civico" required="true" onblur="civicNumberValidation(this.id, this.value)"></td>
				</tr>
				<tr>
					<td><h5>Via *</h5></td>
					<td><input type="text" name="via" title="via" id="via" required="true" onblur="textValidation(this.id, this.value)"></td>
				</tr>	
				<tr>
					<td><h5>Telefono *</h5></td>
					<td><input type="text" name="telefono" title="telefono" id="telefono" required="true" onblur="phoneValidator(this.id, this.value)"></td>
				</tr>	
				<tr>
					<td><h5>Sesso *</h5></td>
					<td><input type="radio" name="sesso" value="uomo" checked="true" onblur="enableButton()">Uomo
					<input type="radio" name="sesso" value="donna">donna
					<input type="radio" name="sesso" value="altro">Altro</td>
				</tr>	
				<tr>
					<td><h5>Hobby</h5></td>
					<td><input type="text" name="hobby" title="hobby" id="hobby" onblur="checkLength(this.id, this.value)"></td>
				</tr>
				<tr>
					<td><h5>Professione</h5></td>
					<td><input type="text" name="professione" title="professione" id="	professione"onblur="checkLength(this.id, this.value)"></td>
				</tr>
				<tr>
					<td><a href="register.php"><input type="button" name="cancella" id="cancella" value="Cancella"></a></td>
					<td><input type="button" name="avanti" value="Avanti" id="avanti" onclick="disableInputs()"></td>
					
				</tr>	
			</table>
		</form>
	</div>
	<?php
		if($_SERVER["REQUEST_METHOD"] == "POST"){
			if(isset($_POST["nome"]) && isset($_POST["cognome"]) && isset($_POST["data"]) && isset($_POST["E-Mail"])){
				
			}
		}
	?>
	<script type="text/javascript" src="js/register.js"></script>
</body>
</html>