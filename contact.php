<?php

// Let's see if anything was posted to us - this is a second preventative step on top of the initial JS method.
$has				= 0;
$hasAll 			= true;
$expectedAttributes = ["name", "email", "emailMessage"];

foreach ($expectedAttributes as &$value) {
	if (!isset($_POST[$value]) || $_POST[$value] == "") {
		$hasAll 	= false;
	} else {
		$has++;
	}
}

if ($hasAll) {
	
	$message = "New message sent from {$_SERVER['REMOTE_ADDR']}
	Name: {$_POST['name']}
	Return Address: {$_POST['email']}
	
	Message: {$_POST['emailMessage']}";
	
	mail("brianlaclair@gmail.com", "New Portfolio Message", $message);
	echo "Thanks for your message! I'll respond to you as soon as possible.";
	
} else {
	
	if ($has > 0 && !$hasAll) {
		echo "<br><h5>make sure all fields are filled out so I can respond!</h5>";
	}
	
	echo file_get_contents("includes/contactform.html");

}

?>