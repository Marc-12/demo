<?php
session_start();
require('controler/frontend.php');
try 
{
		//mettre les variables GET & POST dans un ARRAY
		$ArrayParameters = array_merge($_GET,$_POST);
					
		if (isset($ArrayParameters['action'])) 
		{	    
			if (isset($_GET,$_POST))
			{
				//nouveau nom au ARRAY
					$NewNameArray = $ArrayParameters;
				//supprimer le paramètre ACTION du ARRAY
					unset($ArrayParameters['action']);
				// afficher contenu ARRAY
				//print_r ($ArrayParameters);
				//appler la fonction demandée avec les bons paramètres
				call_user_func_array($NewNameArray['action'], $ArrayParameters);
				
				
				// POO
				//$Controleur1 = new Controleur();
				//$Controleur1->$NewNameArray['action'];
				//call_user_func_array(array($Controleur1, $ArrayParameters);
			}
			else
			{
				call_user_func($ArrayParameters['action']);		
			}
		}
		else 
		{
			//$Controleur1 = new Controleur();
			//$Controleur1->listPosts();
			listPosts();
		}
}
catch(Exception $e) 
{
    echo 'Erreur : ' . $e->getMessage();
}