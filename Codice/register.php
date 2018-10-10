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

  	<script type="text/javascript" src="js/register.js"></script>
</head>
<body>
	<h1 class="animated slideInDown	">Registrati</h1>
	<table id="mainForm">
		<tr class="animated slideInRight">
			<td><h5>Nome</h5></td>
			<td><input type="text" name="nome" title="nome" id="cognome" onblur="textControl(this.id, this.content)"></td>
		</tr>
		<tr class="animated slideInLeft">
			<td><h5>Cognome</h5></td>
			<td><input type="text" name="cognome" title="cognome" id="cognome"></td>
		</tr>
		<tr class="animated slideInRight">
			<td><h5>Data di nascita</h5></td>
			<td><input type="date" name="data" id="data"></td>
		</tr>
		<tr class="animated slideInLeft">
			<td><h5>E-Mail</h5></td>
			<td><input type="text" name="E-Mail" title="E-Mail" id="E-Mail"></td>
		</tr>
		<tr class="animated slideInRight">
			<td><h5>CAP</h5></td>
			<td><input type="text" name="CAP" title="CAP" id="CAP"></td>
		</tr>
		<tr class="animated slideInLeft">
			<td><h5>Num. Civico</h5></td>
			<td><input type="text" name="telefono" title="telefono" id="telefono"></td>
		</tr>
		<tr class="animated slideInRight">
			<td><h5>Via</h5></td>
			<td><input type="text" name="via" title="via" id="via"></td>
		</tr>	
		<tr class="animated slideInLeft">
			<td><h5>Telefono</h5></td>
			<td><input type="text" name="telefono" title="telefono" id="telefono"></td>
		</tr>	
		<tr class="animated slideInRight">
			<td><h5>Sesso</h5></td>
			<td><input type="radio" name="sesso" value="uomo">Uomo
			<input type="radio" name="sesso" value="donna">Donna</td>
		</tr>	
		<tr class="animated slideInLeft">
			<td><h5>Hobby</h5></td>
			<td><input type="text" name="hobby" title="hobby" id="hobby"></td>
		</tr>
		<tr class="animated slideInRight">
			<td><h5>Professione</h5></td>
			<td><input type="text" name="professione" title="professione" id="professione"></td>
		</tr>
		<tr>
			<td class="animated slideInLeft"><input type="button" name="avanti" value="Avanti" id="avanti"></td>
			<td class="animated slideInRight"><input type="button" name="correggi" value="Cancella"></td>
		</tr>	
	</table>
	<?php

	?>
</body>
</html>