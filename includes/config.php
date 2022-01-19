<?php
ob_start();
session_start();

//set timezone
date_default_timezone_set('Europe/Germany');

//database credentials
define('DBHOST','localhost');
define('DBUSER','shah');
define('DBPASS','archie');
define('DBNAME','test');

//application address
define('DIR','http://localhost:8000/'); //May need modification
define('SITEEMAIL','samdon97@gmail.com');
define('GENHASHKEY','!my!enc!hswithllaah!key%%$');
try {

	//create PDO connection
	$db = new PDO("mysql:host=".DBHOST.";dbname=".DBNAME, DBUSER, DBPASS);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e) {
	//show error
    echo '<p class="bg-danger">'.$e->getMessage().'</p>';
    exit;
}

//include the user class, pass in the database connection
include('classes/user.php');
include('classes/phpmailer/mail.php');
$user = new User($db);
$genpass= new Password();
?>


