<?php 

function weiterleiten($url){
	header("Location: $url");
}

//Funktion zum einlesen der einzelnen Benutzer aus .txt-File
function gibBenutzer(){
	return unserialize(file_get_contents("benutzer.txt"));
}

//Funktion zum überprüfen der Eingabefelder aus Formular - Wenn User gefunden dann Passwort Prüfen
function checkFormFields($eingabe){
	$benutzer = gibBenutzer();
	foreach($benutzer as $key => $einzelbenutzer){
		//Falls Passwort und User identisch dann $_SESSION['eingeloggt'] auf true setzen und Seiteninhalt von eingeloggt.php anzeigen
		if($einzelbenutzer['benutzername'] === $eingabe['benutzername'] && password_verify($eingabe['passwort'], $einzelbenutzer['passwort'])){
			$_SESSION['userid'] = $key;
			$_SESSION['eingeloggt'] = true;
			return true;
		}
	}
}

//Funktion zum Auslesen eines einzelnen Benutzers
function gibEinzelbenutzer($einzelbenutzerId){
	//Einzelbenutzer ID übergeben und im Array danach suchen bzw darauf zugreifen
	$benutzer = gibBenutzer();
	//Felder des Benutzers in neuem Array zurückgeben (nicht alle Felder)
	foreach($benutzer as $key => $einzelbenutzer){
		if($key === $einzelbenutzerId){
			$benutzerDaten['benutzername'] = $einzelbenutzer['benutzername'];
			$benutzerDaten['email'] = $einzelbenutzer['email'];
			$benutzerDaten['userid'] = $key;
			return $benutzerDaten;
		}
	}
}
/* 1.Aufgabe
Funktion zum Schreiben in vorhandene Datensätze (benutzer.txt)
*/ 

function gibEinzelbenutzerUeberId($id){
	$benutzer = gibBenutzer();
	foreach ($benutzer as $key => $einzelbenutzer){
		if($key == $id){
			return $einzelbenutzer;
		}
	}
}

function saveBenutzer($eingabe){
	$userid = intval($eingabe['userid']);
	$benutzerNeu = gibBenutzer();
	$benutzerNeu[$userid]['benutzername'] = $eingabe['benutzername'];
	$benutzerNeu[$userid]['email'] = $eingabe['email'];
	file_put_contents("benutzer.txt", serialize($benutzerNeu));
}

/*
Wenn keine Änderungen vorgenommen, dann brauch auch nicht in das Array geschrieben zu werden

Geändert werden kann nur E-Mail und Benutzername im Array (Struktur der Arrays bleibt erhalten)


2.Aufgabe 
Umschreiben der Funktion(en) damit UserId in Session gespeichert wird und somit jederzeit verfügbar ist und abgefragt werden kann

3. Aufgabe
	Logoutbutton anlegen und Session löschen (session_destroy)

*/


?>