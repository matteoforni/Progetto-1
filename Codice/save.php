<?php
  if($_SERVER["REQUEST_METHOD"] == "POST"){
  if(isset($_POST["nome"])
    && isset($_POST["cognome"])
    &&isset($_POST["data"])
    && isset($_POST["E-Mail"])
    &&isset($_POST["CAP"])
    &&isset($_POST["No-Civico"])
    &&isset($_POST["Citta"])
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
      $hobby = "-";
      if(isset($_POST["hobby"]) != 0){
        $hobby = $_POST["hobby"];
      }

      $professione = "-";
      if(isset($_POST["professione"]) != 0){
        $professione = $_POST["professione"];
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


      $directoryName = 'registrazioni';
      $file = "registrazioni/globale.csv";
      $daily = "registrazioni/" . date("Y-m-d") . ".csv";
      $handle = "";
      $dailyHandle = "";

      if(!is_dir($directoryName)){
        mkdir($directoryName, 0755);
      }
      if(!is_file($file)){
        $header = "nome, cognome, data, email, citta, cap, NoCivico, via, telefono, sesso, hobby, professione \n";
        $handle = fopen($file, "a") or die('Cannot open file:  ' . $file);
        fwrite($handle,  $header, strlen($header) + "\n");
      }else{
        $handle = fopen($file, "a");
      }

      if(!is_file($daily)){
        $header = "nome, cognome, data, email, citta, cap, NoCivico, via, telefono, sesso, hobby, professione \n";
        $dailyHandle = fopen($daily, "a") or die('Cannot open file:  ' . $daily);
        fwrite($dailyHandle,  $header, strlen($header) + "\n");
      }else{
        $dailyHandle = fopen($file, "a");
      }
      
        
      $result = "";
      foreach ($content as $variable) {
        $result = $result . $variable .",";
      }
      $result = $result . "\n";
      fwrite($handle, $result, strlen($result) + "\n");
      fwrite($dailyHandle, $result, strlen($result) + "\n");
      fclose($handle);
      fclose($dailyHandle);
      header("Location: final.php");
      die();
    }
  }

?>