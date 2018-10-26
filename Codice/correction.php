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
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $directoryName = 'csv';
    $fileName = "csv/globale.csv";
    if(!is_dir($directoryName)){
        mkdir($directoryName, 0755);
    }
    if(!is_file($fileName)){
        $file = fopen($fileName, 'w');
    }
}
if(isset($_POST["nome"])&&isset($_POST["cognome"])&&isset($_POST["data"])&&isset($_POST["E-Mail"])&&isset($_POST["CAP"])&&isset($_POST["No-Civico"])&&isset($_POST["via"])&&isset($_POST["telefono"])&&isset($_POST["sesso"])){
  echo "<div id='maindiv'><table id='maintable'>
  <tr>
    <th>Nome</th>";
    echo "<td>".$_POST["nome"]."</td>";
  echo "</tr>
  <tr>
    <th>Cognome</th>";
    echo "<td>".$_POST["cognome"]."</td>";
  echo "</tr>
  <tr>
    <th>Data</th>";
     echo "<td>".$_POST["data"]."</td>";
  echo "</tr>
  <tr>
    <th>Email</th>";
    echo "<td>".$_POST["E-Mail"]."</td>";
  echo "</tr>
  <tr>
    <th>CAP</th>";
    echo "<td>".$_POST["CAP"]."</td>";
  echo "</tr>
  <tr>
    <th>No-Civico</th>";
    echo "<td>".$_POST["No-Civico"]."</td>";
  echo "</tr>
  <tr>
    <th>Via</th>";
    echo "<td>".$_POST["via"]."</td>";
  echo "</tr>
  <tr>
    <th>Telefono</th>";
    echo "<td>".$_POST["telefono"]."</td>";
  echo "</tr>
  <tr>
    <th>Sesso</th>";
    echo "<td>".$_POST["sesso"]."</td>";
  echo "</tr>
  <tr>
    <th>Hobby</th>";
    echo "<td>".$_POST["hobby"]."</td>";
  echo "</tr>
  <tr>
    <th>Professione</th>";
    echo "<td>".$_POST["professione"]."</td>";
  echo "<tr><td><input type='submit' name='correggi' value='Correggi' onclick='backToForm()'></td>";
  echo "<td><input type='submit' name='invia' value='Invia'></td></tr>";
}
?>
</body>
</html>
