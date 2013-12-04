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
	
	<?php
	# Script 2.5 - handle_form.php
	
	//Print the submitted information
	if ( !empty($_POST['name']) && !empty($_POST['comments']) && !empty($_POST['email']) ) {
		echo "<p>Thank you, <b>{$_POST['name']}</b>, for the following comments:<br /> 
		<tt>{$_POST['comments']}</tt></p>
	<p>We Will reply to you at <i>{$_POST['email']}</i>.</p>\n";
	} else {//missing form value.
		echo '<p>Please go back and fill out the form again.</p>';
		}
	
	
	
	?>

</body>
</html>
