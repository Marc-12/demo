<!DOCTYPE html>
<?php session_start();?>
<html>
    <head>
        <title>Blog - Td</title>
        <meta charset="utf-8" />
        <link href="../../public/css/styles.css" rel="stylesheet" /> 
    </head>
    <body>
		<div id="page">
		
		<style>
		
		
		
		</style>
			<div id="form">
				<h1>Connexion à l'espace membre</h1>
				<form action="connexion-post.php" method="POST" autocomplete="off"><br>
						<label><input placeholder="Pseudo" type="text" value="" name="pseudo" /></label><br><br>
						<label><input placeholder="Mot de passe" type="password" value="" name="pass" /></label><br><br>
						<label>Pas encore membre ? <a href="inscription.php">Cliquez ici !</a></label><br><br>
						<label><input type="submit" value="Se connecter" /></label><br><br>
				</form>
			</div>	
		</div> 									
    </body>
</html>