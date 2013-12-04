<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">

<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Multidimensional Arrays</title>
	<meta name="generator" content="TextMate http://macromates.com/">
	<meta name="author" content="Michael Wiss">
	<!-- Date: 2013-03-14 -->
</head>
<body>
	<p>Some North American States,
		Provinces, and Territories:</p>
		<?php # Script 2.7 - multi.php
	//Create an array:
	$mexico = array(
		'YU' => 'Yucatan',
		'BC' => 'Baja California',
		'OA' => 'Oaxaca'
	);
	
	//Create another array:
	$us = array (
	'MD' => 'Maryland',
	'IL' => 'Illinois',
	'PA' => 'Pennsylvania',
	'IA' => 'Iowa'
	);
	
	//Create a third array:
	$canada = array (
	'QC' => 'Quebec',
	'AB' => 'Alberta',
	'NT' => 'Northwest Territories',
	'YT' => 'Yukon',
	'PE' => 'Prince Edward Island'
	);
	
	//Combine the arrays:
	$n_america = array(
	'Mexico' => $mexico,
	'United States' => $us,
	'Canada' => $canada
	);
	
	//Loop through the countries
	
	foreach ($n_america as $country => $list) {
		
		// Print a heading:
		echo "<h2>$country</h2><ul>";
		
		// Print each state, province, or territory:
		foreach ($list as $k => $v) {
			echo "<li>$k - $v</li>\n";
		}
		//close the list:
		echo '</ul>';
	}
	//end of main foreach.
		
		
		
		
		
		
		
		
		
		
		
		?>

</body>
</html>
