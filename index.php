<?php 
require_once("inc/dbconfig.php");
require_once("inc/functions.php");

//Abfrage welcher View geladen werden soll
$view = isset($_GET['aktion']) ? $_GET['aktion'] : null;
switch($view) {
	case 'single':
		//Einzelansicht eines Beitrags
		$results = findSinglePost($db, $_GET['pid']);
	break;	
	
	case 'add':
		//Hinzufügen eines Beitrags
		$results = findAllAuthors($db);
		if(!empty($_POST['titel']) && isset($_GET['save'])){
			addPost($db, $_POST);
		}
	break;
	
	case 'delete':
		//Löschen eines Beitrags
	break;
	
	case 'edit':
		//Update eines Beitrags
	break;
	default:
		//Standardansicht wird geladen
		$results = findAllPosts($db);
		//Query an DB für auslesen aller Blogbeiträge
		
		$view = "index";
	break;
}

require_once("views/" . $view . ".tpl.php" );

?>