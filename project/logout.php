<?php
	session_start();
	$_SESSION = [];
	session_unset();
	session_destroy();
	
	setcookie('login', '', time()-60);
	header("location: index.php");
?>
