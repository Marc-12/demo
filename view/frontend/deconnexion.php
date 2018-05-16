<!DOCTYPE html>
<html>
    <head>
        <title>Blog - Td</title>
        <meta charset="utf-8" />
    </head>
    <body>
		<div id="page">
		
		<style>
		#form
		{
		margin-left: auto; 	
		margin-right: auto;
		padding: 25px 25px 25px 25px;
		width: 180px;
		height: 350px; 
		background-color: #e5e5e5; 
		}
		</style>
				<?php 
				session_start();

				// Suppression des variables de session et de la session
				$_SESSION = array();
				session_destroy();

				// Suppression des cookies de connexion automatique
				setcookie('login', '');
				setcookie('pass_hache', '');
				?>
		</div>
    </body>
</html>




