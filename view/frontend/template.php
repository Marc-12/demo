<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>blog</title>
        <link href="public/css/styles.css" rel="stylesheet" /> 
			<script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=pg2rdp7vsj4dapk1pbucvx8sgzaqt0nq4g56d71zya5l479c"></script>
	</head>
    <body>
		<div class="contentDiv">
			<div class="adminZone">
				<div class="adminZoneLeft">
						<?php
							//$pseudo = 'Marc';
							//$_SESSION['pseudo'] = $pseudo;
							//$_SESSION['user'] = "admin";
							//echo '/1/mon id PSEUDO---> '.$_SESSION['id']; 
							if (isset($_SESSION['user']) == "admin")
							{
								echo '<button id="buttonAdminZone">+</button> ';
							}
							if (isset($_SESSION['pseudo']))
							{
								echo ' Vous êtes connecté-e en tant que: "'.$_SESSION['pseudo'].'" <button id="deconnectSession">Déconnexion</button>';
							}
							else
							{
								echo ' Vous n\'êtes pas connecté-e ! <button id="connectSession">Se connecter</button>';
								//mise en mémoire de la page actuelle en variable 
								$_SESSION['redirectionPage'] = $_SERVER['REQUEST_URI']; 
							}
						?>
				</div>
				<div class="adminZoneRight">Jean Forteroche --- Le Blog ! --- 
				<a class="chapitres" href="index.php">ACCUEIL - </a><a href="index.php?action=pageLivre">LE LIVRE - </a><a href="index.php?action=pagePropos"> A PROPOS</a>
				</div>
			</div>	

			
			<div class="adminInfos"></div>
			<div class="content">

				<?= $content ?>
			</div>			
		</div>
		<footer class="footer">Site Web réalisé par: Marc</footer>
		<script src="https://code.jquery.com/jquery-3.3.1.min.js"integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="crossorigin="anonymous"></script>
		<script type="text/javascript" src="public/js/script.js"></script>		
	</body>
</html>