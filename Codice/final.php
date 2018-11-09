<!DOCTYPE html>
<html>
<head>
	<title>Finale</title>
	<meta charset="utf-8">
 	<meta name="author" content="Matteo Forni">
 	<meta name="date" content="14.09.2018">
	<meta name="description" content="Primo progetto mod.306">
	<meta name="keywords" content="306, Progetto-1">
	<link rel="stylesheet" type="text/css" href="css/final.css">
</head>
<body>

<?php 
	$daily = "Registrazioni/Registrazione_" . date("Y-m-d") . ".csv";
	$handle = fopen($daily, "r") or die('Cannot open file:  ' . $daily);	
	$open = "";
	$close = "";
	$table = "<table>";
	$row = 0;

	while(!feof($handle))
  	{
  		if($row == 0){
  			$open = "<th>";
  			$close = "</th>";
  		}else{
  			$open = "<td>";
  			$close = "</td>";
  		}
  		$array = fgetcsv($handle, ";");
  		if($array[0] != null){
  			$table .= "<tr>";
  			for($i = 0; $i < count($array); $i++){
  				$table .= $open."".$array[$i]."".$close;
  			}
  			$table .= "</tr>";
  		}
  		$row = 1;
  	}
  	fclose($handle);
  	$table .= "</table><div id='backToStart'><a href='welcomePage.html'><input type='button' name='buttonNext' id='buttonNext' value='Ritorna all inizio'></a></div>";
  	echo $table;
?>
</body>
</html>