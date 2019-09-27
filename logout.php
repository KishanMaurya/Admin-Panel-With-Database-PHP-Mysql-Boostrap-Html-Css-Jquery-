<?php
	session_start();
	
	if (isset($_SESSION['user'])) {
		header('location : login.php');
		$_SESSION['msg']="You are successfully logged";
		unset($_SESSION['user']);
	}
	session_destroy()
?>