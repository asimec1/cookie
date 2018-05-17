<?php
	error_reporting(E_ALL);
	ini_set("display_errors", 0);
	
	if ($_POST['card'] != "") {
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
	<title>Broj kartice</title>
  </head>
  <style>
	body { margin: 10px;}
	
  </style>
<body>
<div class="container">
	<h1>Broj kartice [cookie]</h1>
	<?php 
		if ($_COOKIE['card'] != "" && !empty($_COOKIE['card'])) {
			print '
			<div class="alert alert-success" role="alert">
				Hvala što ste upisali svoje podatke!
			</div>';
		}
			print '
			 <form action="index.php" method="POST" name="signin">
				<input type="hidden" id="control" name="control" value="true">
				<div class="form-check">
					<label for="name">Ime i prezime:*</label>
					<input type="text" id="user" name="user" class="form-control" required>
				</div>
				<hr>
				<div class="form-check">
					<label for="card">Broj kartice:*</label>
					<input type="text" id="card" name="card" class="form-control" required>
				</div>
				<hr>
				<input type="submit" value="Pošalji" class="btn btn-primary">
			 </form>';
	 ?>
</div>
</body>
</html>