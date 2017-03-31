<?php 
require_once "password.php";

$benutzer = array(
	array(
		'benutzername' => 'User1',
		'passwort' => '$2y$10$becmUP8tFnms.zCx3ieojeMl3TTk0RxPwqwrTZCeVfUEc7bhxqbmm0',
		'vorname' => 'Hans',
		'nachname' => 'Müller',
		'email' => 'hans@mueller.de',
	),
	array(
		'benutzername' => 'User2',
		'passwort' => '$2y$10$p7PoprRZvjzMZppMHNhBXehKRDupJxCTaMDCX9heWxkY0CNbW0uuS',
		'vorname' => 'Petra',
		'nachname' => 'Kamps',
		'email' => 'petra@kamps.de',
	),
	array(
		'benutzername' => 'User3',
		'passwort' => '$2y$10$23SUUh51wo.YC3c6YF2V/ulxTPAUB3.lwAz4grhrfhxlGfE3xw5lK',
		'vorname' => 'Jochen',
		'nachname' => 'Klumps',
		'email' => 'jochen@klumps.de',
	),
);

//echo password_hash("geheim", PASSWORD_DEFAULT);


foreach($benutzer as $key => $einzeln){
	if($einzeln['benutzername'] == "User1"){
		echo $key;
	}
}

//file_put_contents("benutzer.txt", serialize($benutzer));

?>