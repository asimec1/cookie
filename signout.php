<?php
	//odjava.php
	if (isset($_COOKIE['user'])) {
		
		setcookie('user', null, -1, '/');
	}
	header("Location: index.php");
?>