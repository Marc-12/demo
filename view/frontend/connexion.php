<?php ob_start(); ?>

<div id="form">
	<h1>Connexion à l'espace membre</h1>
	<form action="/P4-VERSION5/index.php?action=connexionPage" method="POST" autocomplete="off"><br>
		<label><input placeholder="Pseudo" type="text" value="" name="pseudo" /></label><br><br>
		<label><input placeholder="Mot de passe" type="password" value="" name="pass" /></label><br><br>
		<label>Pas encore membre ? <a href="inscription.php">Cliquez ici !</a></label><br><br>
		<label><input type="submit" value="Se connecter" /></label><br><br>
	</form>
</div>	

<?php $contentConnexion = ob_get_clean(); ?>
<?php require('templateConnexion.php'); ?>