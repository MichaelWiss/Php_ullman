<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Predefined Variables</title>
	<meta name="generator" content="TextMate http://macromates.com/">
	<meta name="author" content="Michael Wiss">
	<!-- Date: 2013-03-11 -->
</head>
<body>
	<!-- Script 1.5 -predefined.php -->
	
	<?php
	# Script 1.5 - predefined .php
	
	//create a shorthand version of the variable names:
	$file = $_SERVER['SCRIPT_FILENAME'];
	$user = $_SERVER['HTTP_USER_AGENT'];
	$server = $_SERVER['SERVER_SOFTWARE'];
	
	// print the name of this script:
	echo "<p>You are running the file:<br /><b>$file</b>.</p>\n";
	
	//print the user's information:
	echo "<p>You are viewing this page using:<br /><b>$user</b></p>\n";
	
	//print the server's information:
	echo "<p>This server is running: <br /><b>$server</b>.</p>\n";
	
	?>

</body>
</html>
