<?php
session_start();
// IE 6 FIX
header('Cache-control: private');

// Pour mettre par défaut la langue de la session
if(!isset($_SESSION['lang']))
    $_SESSION['lang'] = 'fr'; 
    
if (isSet($_GET['lang'])) {
	$lang = $_GET['lang'];

// enregister la session et les cookies
$_SESSION['lang'] = $lang;

	setcookie("lang", $lang, time() + (3600 * 24 * 30));
} else if (isSet($_SESSION['lang'])) {
	$lang = $_SESSION['lang'];
} else if (isSet($_COOKIE['lang'])) {
	$lang = $_COOKIE['lang'];
} else {
	$lang = 'fr';
}

switch ($lang) {
	case 'fr' :
		$lang_file = 'lang.fr.php';
		break;

	case 'en' :
		$lang_file = 'lang.eng.php';
		break;

	default :
		$lang_file = 'lang.fr.php';
}

include_once 'langues/' . $lang_file;
?>