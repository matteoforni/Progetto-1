<!DOCTYPE html>
<html>
<head>
 <title>Correction</title>
 <meta charset="utf-8">
 <meta name="author" content="Matteo Forni">
 <meta name="date" content="14.09.2018">
 <meta name="description" content="Primo progetto mod.306">
 <meta name="keywords" content="306, Progetto-1">
 <link rel="stylesheet" type="text/css" href="css/correction.css">
</head>
<body>
<script type="text/javascript" src="js/correction.js"></script>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
  if(isset($_POST["nome"])
    && isset($_POST["cognome"])
    &&isset($_POST["data"])
    && isset($_POST["E-Mail"])
    &&isset($_POST["CAP"])
    &&isset($_POST["No-Civico"])
    &&isset($_POST["via"])
    &&isset($_POST["telefono"])
    &&isset($_POST["sesso"])){
      $nome = $_POST["nome"];
      $cognome = $_POST["cognome"];
      $data = $_POST["data"];
      $email = $_POST["E-Mail"];
      $citta = $_POST["Citta"];
      $cap = $_POST["CAP"];
      $nocivico = $_POST["No-Civico"];
      $via = $_POST["via"];
      $telefono = $_POST["telefono"];
      $sesso = $_POST["sesso"];
      if(strlen($_POST["hobby"]) != 0){
        $hobby = $_POST["hobby"];
      }else{
        $hobby = "-";
      }
      if(strlen($_POST["professione"]) != 0){
        $professione = $_POST["professione"];
      }else{
        $professione = "-";
      }
      $content = array(
        "nome" => $nome,
        "cognome" => $cognome,
        "data" => $data,
        "email" => $email,
        "citta" => $citta,
        "cap" => $cap,
        "nocivico" => $nocivico,
        "via" => $via,
        "telefono" => $telefono,
        "sesso" => $sesso,
        "hobby" => $hobby,
        "professione" => $professione
      );
      $table = "<form id='maindiv' method='POST' action='save.php'>
      <table id='maintable'>
        <tr>
          <th>Nome</th>
          <td><input type='text' name='nome' value='".$nome."'></td>
        </tr>
        <tr>
          <th>Cognome</th>
          <td><input type='text' name='cognome' value='".$cognome."'></td>
        </tr>
        <tr>
          <th>Data</th>
           <td><input type='text' name='data' value='".$data."'><td>
        </tr>
        <tr>
          <th>Email</th>
          <td><input type='text' name='E-Mail' value='".$email."'></td>
        </tr>
        <tr>
          <th>Città</th>
          <td><input type='text' name='Citta' value='".$citta."'></td>
        </tr>
        <tr>
          <th>CAP</th>
          <td><input type='text' name='CAP' value='".$cap."'></td>
        </tr>
        <tr>
          <th>No-Civico</th>
          <td><input type='text' name='No-Civico' value='".$nocivico."'></td>
        </tr>
        <tr>
          <th>Via</th>
          <td><input type='text' name='via' value='".$via."'></td>
        </tr>
        <tr>
          <th>Telefono</th>
          <td><input type='text' name='telefono' value='".$telefono."'></td>
        </tr>
        <tr>
          <th>Sesso</th>
          <td><input type='text' name='sesso' value='".$sesso."'></td>
        </tr>
        <tr>
          <th>Hobby</th>
          <td><input type='text' name='hobby' value='".$hobby."'></td>
        </tr>
        <tr>
          <th>Professione</th>
          <td><input type='text' name='professione' value='".$professione."'></td>
        <tr>
          <td><input type='button' name='correggi'value='Correggi'onclick='backToForm()'></td>
          <td><input type='submit' name='registra' value='Registra' id='registra'></td>
        </tr>
      </table>
    </form>";
    echo $table;
    /*table*/
  }
}  
?>
</body>
</html>