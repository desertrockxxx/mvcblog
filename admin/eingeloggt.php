<?php 
session_start();
require_once "password.php";
require_once "functions.php";
// Wenn nicht eingeloggt dann umleiten
if(isset($_POST['login'])){
	checkFormFields($_POST);
}
if(!$_SESSION['eingeloggt']){
	weiterleiten("login.php");
}

if(isset($_POST['speichern'])){
	saveBenutzer($_POST);
}
$benutzerDaten = gibEinzelbenutzer($_SESSION['userid']);

?>
<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<title>Benutzer bearbeiten</title>
</head>
<body>
	<form action="eingeloggt.php" method="POST">
		<div>
			<input type="hidden" name="userid" value="<?php echo $benutzerDaten['userid'];  ?>">
		</div>
		<div>
			<input type="text" name="benutzername" placeholder="Benutzername" value="<?php echo $benutzerDaten['benutzername']; ?>">
		</div>
		<div>
			<input type="password" placeholder="Neues Passwort" name="passwort">
		</div>
		<div>
			<input type="password" placeholder="Neues Passwort erneut eingeben" name="passwortwdh">
		</div>
		<div>
			<input type="text" name="email" value="<?php echo $benutzerDaten['email']; ?>" placeholder="E-Mail">
		</div>
		<div>
			<input type="submit" name="speichern" value="Speichern">
		</div>
	</form>
</body>
