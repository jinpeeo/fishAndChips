<?php

//Setting the Content type. Basically telling the browser what type of content it
//is dealing with.
header('Content-type: application/json');

//Extracting the variables from the POST superglobal.
$name = $_POST['yourName'];
$email = $_POST['yourEmail'];
$comments = $_POST['yourComments'];

//Creating arrays which will hold our data.
$errors = array();
$message = array();

//Have all required fields been filled out?
if ( isset($name) && isset($email) && isset($comments)) {

	//You would normally do some processing here before entering the data
	//into the database.

	//As we are just demoing AJAX, lets pause for a litle while and then return the
	//message in json format.
	sleep(1);
	$message[] = "Thanks, your message was processed successfully, please stay tuned for a reply";

	//Output the data in JSON format.
	echo json_encode($message);

}
//Required vars not set, lets send error message back.
else {
	//Again sleep for a second.
	sleep(1);

	//Check each of the values, adding an error to the array if it is not set.
	if (!isset($name) ) {
		$errors[] = "The name field is a required field.";
	}

	if (!isset($email) ) {
		$errors[] = "The e-mail field is a required field.";
	}

	if (!isset($comments) ) {
		$errors[] = "The comments field is a required field.";
	}

	//Again output data in json format.
	echo json_encode($errors);
}

?>