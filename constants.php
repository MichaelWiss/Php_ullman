<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Constants</title>
	<meta name="generator" content="TextMate http://macromates.com/">
	<meta name="author" content="Michael Wiss">
	<!-- Date: 2013-03-11 -->
</head>
<body>
	<!-- Script 1.9 -constants.php -->
	
	<?php
	# Script 1.9 - constants .php
	
    //Set today's date as a constant:
    define ('TODAY', 'March 12, 2013');
    
    // Print a message, using predefined constants and the TODAY constant:
    echo '<p>Today is ' . TODAY . '.<br />
    This server is running version <b>' .
    PHP_VERSION . '</b> of PHP on the <b>' .
    PHP_OS . '</b> operating system.</p>';
	
	
	?>

</body>
</html>
