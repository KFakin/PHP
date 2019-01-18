<?php
	# Stop Hacking attempt
	define('__APP__', TRUE);
	
	# Start session
    session_start();
	
	# Database connection
	include ("dbconn.php");

	#show errors
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	
	# Variables MUST BE INTEGERS
    if(isset($_GET['menu'])) { $menu   = (int)$_GET['menu']; }
	if(isset($_GET['action'])) { $action   = (int)$_GET['action']; }
	
	# Variables MUST BE STRINGS A-Z
    if(!isset($_POST['_action_']))  { $_POST['_action_'] = FALSE;  }
	
	if (!isset($menu)) { $menu = 1; }
	
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Naslov</title>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="author" content="Kristijan Fakin">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="Style.css"/>
	</head>
	<body>

	<div class="banner"></div>
	
	<?php include ("nav.php");
	print '<main>';
	if (!isset($menu) || $menu == 1) {
		print '
		<h1>Početna stranica</h1>';
		include ("pocetna.php");
	}
	else if ($menu == 2) {
		print '
		<h1>Novosti</h1>';
		include ("novosti.php");
		
	}
	else if ($menu == 3) {
		print '
		<h1>Kontakt</h1>';
		include ("kontakt.php");
	}
		else if ($menu == 4) {
		print '
		<h1>O Nama</h1>
		<h2> Internet preglednici</h2>';
		include ("onama.php");
			
	}
		else if ($menu == 5) {
		print '
		<h1>Galerija</h1>';
		include ("galerija.php");
		
	}
	else if ($menu == 6) {
		print '
		<h1>Registration</h1>';
		include ("registration.php");
	}
	else if ($menu == 7) {
		print '
		<h1>Sign In</h1>';
		include ("signin.php");
	}
	print '
	</main>';
	include ("footer.php");?>
	
	</body>
</html>