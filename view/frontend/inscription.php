<!DOCTYPE html>
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
				<h1>Inscription à l'espace membre</h1>
				<form id="" action="inscription-post.php" method="POST" autocomplete="off">
					<input placeholder="Pseudo" id="pseudo" class="champ" type="text" value="" name="pseudo" /><img id="pseudo-checked" src="checked.png" /><br><br>
					<input placeholder="Entrez un mot de passe" id="mdp" type="password" value="" name="pass" /><img id="mdp-checked" src="checked.png" />
					<input placeholder="retapez votre mot de passe" id="confirmation" type="password" value="" name="pass2" /><img id="confirmation-checked" src="checked.png" /><br><br>
					<input placeholder="Entrez votre email" id="mail" type="text" value="" name="mail" /><img id="mail-checked" src="checked.png" /><br><br>
					<input id="btn-submit" type="submit" value="Valider" /><br><br>
					<div id="confirmation-text"></div>
				</form>						
			</div> 	
		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>			
		<?php
				class Form
				{
					public $_check =  "";										
					public $_content =  "";										
					
					  public function loader()
					  {
						  $this->getDataURL();
						  $this->checkPseudo();
						  $this->checkPasswords();
						  $this->checkPassWordLenght();
						  $this->checkMailSQL();
						  $this->checkMailREGEX();
					  }
					  public function getDataURL()
					  {
						  if (isset($_GET['check']))
						  {
								$this->_check = $_GET['check']; 							  
						  }
					  }
					  public function errorText()
					  {
								echo "<script>
									$('#confirmation-text').empty();
									$('#confirmation-text').append('".$this->_content."').css('color','red');
								</script>"; 
					  }
					  public function checkPseudo()
					  {
							if ($this->_check == 'pseudo')
							{
								$this->_content = "Désolé ! Ce pseudo existe déjà !"; 
								$this->errorText();
							}							
					  }
					  public function checkPasswords()
					  {
							if ($this->_check == 'pass')
							{
								$this->_content = "Les mots de passe ne sont pas identiques !"; 
								$this->errorText();
							}						
					  }  
					  public function checkPassWordLenght()
					  {
							if ($this->_check == 'passLenght')
							{
								$this->_content = "Mot de passe trop court. Ecrivez-en un de plus de 4 caractères."; 
								$this->errorText();
							}							
					  } 
					  public function checkMailSQL()
					  {
							if ($this->_check == 'email')
							{
								$this->_content = "Désolé ! Ce mail existe déjà !"; 
								$this->errorText();
							}						
					  } 
					  public function checkMailREGEX()
					  {
							if ($this->_check == 'regex')
							{
								$this->_content = "L'adresse mail n'est pas valide"; 
								$this->errorText();
							}
					  } 
				}		
				$form1 = new Form();
				$form1->loader();		
		?>
		<script src="inscription.js"></script>
   </body>
</html>