<?php
session_start();
require('controler/AutoLoader.php');
include ('controler/router.php');

//AUTOLOADER -> charge les CLASS  /!\ bien écrire le nom des classes et de ficheir (à l'identique)



if (isset($_GET['action']))
{
	//rassembler variables POST & GET 
	$ArrayParameters = array_merge($_GET, $_POST);
	//print_r ($ArrayParameters);
	//selectionner uniquement l'action
	$route = $ArrayParameters['action'];

	//ROUTER --> charge la bonne CLASSE en fonction du nom de l'ACTION)
	$router = initRouteur();
	$MyClass = ($router["".$route.""]["controler"]);

	//enlever le parametre ACTION du tableau
	unset($ArrayParameters['action']);

	try 
	{
		 //autoloader
		 Autoloader::register();
		 $Controleur1 = new $MyClass();
		 $Controleur1->$route($ArrayParameters);
	} 
	catch (Exception $e) 
	{
		//traiter exception
	}
}
else
{
	//autoloader
	Autoloader::register();
	$Controleur1 = new PostControler();
	$Controleur1->listPosts();
}
