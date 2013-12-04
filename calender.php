<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Calender</title>
	<meta name="generator" content="TextMate http://macromates.com/">
	<meta name="author" content="Michael Wiss">
	<!-- Date: 2013-03-11 -->
</head>
<body>
	<!-- Script 2.6 calender.php -->
	

	
	<form action="calender.php"
	method="post">
	<?php # Script 2.6 - calender.php
	
	//This script makes three pull-down menus 
	//for an html form: monthes, days, years.
	
	//Make the monthes array:
	$months = array (1 => 'January', 'February',
	 'March', 'April', 'March', 'April', 'May', 'June', 'July', 'August', 
	'September', 'October', 'November', 'Devember');
	
	//Make the days and years arrays:
	$days = range (1, 31);
	$years = range (2011, 2021);
	
	//Make the months pull-down menu:
	echo '<select name="month">';
	foreach ($months as $key =>
	$value) {
		echo "<option value=\"$key\">
		$value</option>\n";
	}
	echo '</select>';
	
	//Make the days pull-down menu:
	echo '<select name="day">';
	foreach ($days as $value) {
		echo "<option value=\"$value\">
		$value</option>\n";
	}
	echo '</select>';
	
	//Make the years pull-down menu:
	echo '<select name="year">';
	foreach ( $years as $value) {
		echo "<option value=\"$value\">
		$value</option>\n";
	}
	echo '</select>';
	
	?>
	</form>

</body>
</html>
