<?php 
session_start();
require_once "functions.php";
?>
<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<title>Login</title>
</head>
<body>
<h1>Melden Sie sich am System an!</h1>
<form action="eingeloggt.php" method="POST">
	<div>
		<input type="text" name="benutzername" placeholder="Benutzername">
	</div>
	<div>
		<input type="password" name="passwort">
	</div>
	<div>
		<input type="submit" name="login" value="Einloggen">
	</div>
</form>
</body>
