<?php

	$file = fopen("ips.txt","a+");
	fwrite($file, Date("Y.m.d H:i:s") . " |=>> " . $_SERVER['REMOTE_ADDR'] . "\n");
	fclose($file);
	
?>
	
<html>
<head>
	<title>404 - Not Found</title>
	<meta charset="UTF-8" />
	<link rel="stylesheet" href="style.css" />
</head>
<body>
	<h1><b><code>404</code></b></h1>
	<h3>Oops! The Page you requested was not found!</h3>
	<br>
	<a href="http://www.google.com"><u>You can go to google by clicking this link</u></a>
</body>
</html>
