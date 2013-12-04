<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Numbers</title>
	<meta name="generator" content="TextMate http://macromates.com/">
	<meta name="author" content="Michael Wiss">
	<!-- Date: 2013-03-11 -->
</head>
<body>
	<!-- Script 1.8 -numbers.php -->
	
	<?php
	# Script 1.5 - numbers .php
	
	//set the variables:
	$price = 119.95;
	$taxrate = .05; // 5% sales tax.
	$quantity = 30; // Buying 30 widgets
	
	//calculate the total:
	$total = $quantity * $price;
	$total = $total + ($total * $taxrate);
	//calculate and add the tax.
	
	//format the total:
		$total = number_format ($total, 2);
		
	//print the results using double quotation marks:
	echo "<h3> Using double quotation marks:</h3>";
	echo "<p>You are purchasing <b> .
	$quantity</b> widget(s) at a cost of <b>\$$price</b> each. With tax, the total comes to <b>$ .
	$total . <b>\$$total</b>.</p>\n";
	
	
	?>

</body>
</html>
