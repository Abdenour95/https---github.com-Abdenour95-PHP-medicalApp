<?php 

session_start();

	if (!$_SESSION['login_user']) {
		header("location: index.php");
	}
?>