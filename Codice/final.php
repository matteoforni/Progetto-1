<!DOCTYPE html>
<html>
<head>
	<title>Finale</title>
	<meta charset="utf-8">
 	<meta name="author" content="Matteo Forni">
 	<meta name="date" content="14.09.2018">
	<meta name="description" content="Primo progetto mod.306">
	<meta name="keywords" content="306, Progetto-1">
	<link rel="stylesheet" type="text/css" href="css/correction.css">
</head>
<body>

</body>
</html>
<?php 
	$daily = "registrazioni/" . date("Y-m-d") . ".csv";
	$handle = fopen($daily, "r") or die('Cannot open file:  ' . $daily);	
	$content = "";

	while(! feof($file))
  	{
  		$content = fgets($handle) . "\n";
  	}
	var_dump($content);
?>