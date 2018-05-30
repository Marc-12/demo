<header>
	<div class="contentDiv">
		<div class="adminZone col-lg-10 col-lg-offset-1 col-md-12">
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
			
		</div>	
		<div class="adminInfos"></div>
	</div>
</header>