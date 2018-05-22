<?php
session_start();
require('controler/frontend.php');

	
			if (isset($_GET['action']))
			{
				//rassembler variables POST & GET 
				$ArrayParameters = array_merge($_GET, $_POST);
		print_r ($ArrayParameters);

				//selectionner uniquement l'action
				$route = $ArrayParameters['action'];	
				//enlever le parametre ACTION du tableau
				unset($ArrayParameters['action']);
		
				
				//push data in news Array 
				$Tableau = array();		
				foreach($ArrayParameters as $valeur)
				{	
					array_push($Tableau, $valeur);
				}
				//echo '<br/>TABLEAU--->';
				//print_r($Tableau);		

				//convert ARRAY to STRING & seperate KEYS with COMA
				$space = "  ";
				$strImplode = implode('"  ,  "',$Tableau);
				//echo '<br/>implode--->';
				//echo $strImplode;
				//delete last COMA
				$strTrimmed = rtrim($strImplode, " ,");
				//echo '<br/>TRIM SANS GUILLETMETS--->';	
				//echo $strImplode;
				$last = '( "'.$strTrimmed.'  ")';
				echo '<br/>TRIM AVEC GUILLETMETS--->';	
				echo $last;
							
				try 
				{
					$Controleur1 = new Controleur();
					//OK fonctionne
					$Controleur1->$route("553","10408576","nada","hahahahaha","france");
					//ne fonctionne pas 
					// $Controleur1->$route($last);
				} 
				catch (Exception $e) 
				{
					//traiter exception
				}
			}
			else
			{
				$Controleur1 = new Controleur();
				$Controleur1->listPosts();
			}
