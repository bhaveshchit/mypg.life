<?php
//if the user is logged in ,delete the session and log them out
session_start();
if (isset($_SESSION['user_id'])) {
	//delete the session vars by clearing the &_SESSION varchars
	$_SESSION =  array();


	//deleete the session cokie by setting its expiration an hour ago
	if (isset($_COOKIE[session_name()])) {
		setcookie(session_name(), '', time() - 3600);
	}


	//destroy the session
	session_destroy();
}

//delete the username and user id cookies by setting their expiration hour ago

setcookie('user_id', '', time() - 3600);
setcookie('id', '', time() - 3600);

//redirect to home page

header('Location: index.php');

