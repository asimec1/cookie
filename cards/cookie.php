<?php
	
	setcookie('name', $_POST['name'], time() + (86400), "/"); // 86400 = 1 day
	setcookie('card', $_POST['card'], time() + (86400), "/"); // 86400 = 1 day
	header("Location: index.php");
	   
?> 
