<?php
	ini_set('display_errors', 0);
	ini_set('display_startup_errors', 0);
	
	error_reporting(E_ALL);
	
	if ($_POST['user'] != "") {
		include "cookie.php";
	}
?>
<!DOCTYPE html>
<html lang="hr">
  <head>
    <meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<title>Prijava korisnika</title>
  </head>
  <style>
	body { margin: 10px;}
	
  </style>
<body>
<div class="container">
	<h1>Prijava korisnika [cookie]</h1>
	<?php 
		if ($_COOKIE['user'] == "" && empty($_COOKIE['user'])) {
			print '
			 <form action="index.php" method="POST" name="signin">
				
				<div class="form-check">
					<label for="user">Korisnik:*</label>
					<input type="text" id="user" name="user" class="form-control">
				</div>
				<div class="form-check">
					<label for="pass">Lozinka:*</label>
					<input type="password" id="pass" name="pass" class="form-control">
				</div>
				<input type="submit" value="Pošalji" class="btn btn-primary">
			 </form>';
		} 
		else {
			   
			if (isset($_COOKIE['user']) && !empty($_COOKIE['user'])) {
			 echo "<p><b>Dobrodošao:</b> " . $_COOKIE['user'] ."</p>";
			 echo '<p><a href="signout.php">Odjavi se</a></p>';
			}  
	 }
	
	 ?>
</div>
</body>
</html>