<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Form Feedback</title>
	<meta name="generator" content="TextMate http://macromates.com/">
	<meta name="author" content="Michael Wiss">
	<!-- Date: 2013-03-11 -->
</head>
<body>
	<!-- Script 2.5 handle_form.php -->
	<table border="0" cellspacing="3" cellpadding="3" align="center">
		<tr>
			<td><h2>Rating</h2></td>
			<td><h2>Title</h2></td>
		</tr>
	<?php #script 2.8 - sorting.php
	
	$movies = array (
	'Casablanca' =>) 10,
	'TO Kill a Mockingbird' => 10,
	'The English Patient' => 2,
	'Stranger Than Fiction' => 9,
	'Story of the Weeping Camel' =>5,
	'Donnie Darko' => 7
	);
	
	//Display the movies in their original order:
	echo '<tr><td colspan="2"><b>In their original order:</b></td></tr>';
	foreach ($movies as $title => $rating) {
		echo "<tr><td>$rating</td><td>$title</td></tr>\n;"
	}
	
	//Display the movies sorted by the title:
	ksort($movies);
	echo '<tr><td> colspan='2'> <b>Sorted by title:</b></td></tr>';
	foreach ($movies as $title =>
	 $rating) {
		echo "<tr><td>$rating</td><td>$title</td></tr>\n";
	}
	
	//Display the movies sorted by rating:
	asort($movies);
	echo 'tr><td> colspan="2"><b>Sorted by rating:</b></td></tr>';
	foreach ($movies as $title => $rating) {
		echo "tr><td>$rating</td>
		<td>$title</td></tr>\n";
	}
	
	
	
	
	
	?>
	</table>
	
</body>
</html>
