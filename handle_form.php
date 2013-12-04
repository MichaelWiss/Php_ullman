<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Form Feedback</title>
	<meta name="generator" content="TextMate http://macromates.com/">
	<meta name="author" content="Michael Wiss">
	<!-- Date: 2013-03-14 -->
	<style type="text/css" title="text/css" media="all">
	.error {
		font-weight: bold;
		color:#C00;
	}
	</style>
</head>
<body>
	<?php # Script 2.4 - handle_form.php #3
	
	//validate the name:
	if (!empty($_REQUEST['name'])) {
		$name = $_REQUEST['name'];
	} else {
		$name = NULL;
		echo '<p class="error">You forgot to enter your name!</p>';
	}
	//Validate the email:
	if (!empty($_REQUEST['email'])) {
	$email = $_REQUEST['email'];
	} else {
	 $email = NULL;
	echo '<p class="error">You forgot to enter your email address!</p>';
}
	//validate the comments:
	if (!empty($_REQUEST['comments'])) {
		$comments = $_REQUEST['comments'];
	} else {
		$comments = NULL;
		echo '<p class="error"> You forgot to enter your comments!</p>';
	}
	//validate the gender:
	if (isset($_REQUEST['gender'])) {
		
		$gender = $_REQUEST['gender'];
		
		if ($gender == 'M') {
			echo '<p><b>Good day, Sir!</b></p>';
		} elseif ($gender == 'F') {
			echo '<p><b>Good day, Madam!</b></p>';
		} else {// Unacceptable value.
			$gender = NULL;
			echo '<p class="error>Gender should be either "M" or "F"!</P>';
		}
	} else { // $_REQUEST['gender'] is not set.
		$gender = NULL;
		echo '<p class="error">You forgot to select your gender!</p>';
		}
		
		//validate age:
	//if (isset($_REQUEST['age'])) {
		
	//	$age = $_REQUEST['age'];
		
	//if ($age == '0-29') {
	//	echo '<p><b>You are 0-29!</b></p>';
//	} elseif ($age == '30-60') {
	//	echo '<p><b>You are 30-60!</b></p>';
//	} else ($age == '60+') {
	//	echo  '<p><b>You are 60+!</b></p>';
	//}
	
	
	
		//IF everything is OK, print the message:
	if($name && $email && $gender && $comments && $age) {
		
		echo "<p>Thank you, <b>$name</b>, for the following comments:<br />
		<tt>$comments</tt></p>
		<p>We will reply to you at <i>$email</i>.</p>\n";
		
	} else { //Missing form value.
		echo '<p class="error"> Please go back and fill out the form again.</p>';
		}
	?>
	
</body>
</html>
