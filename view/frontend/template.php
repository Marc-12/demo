<!DOCTYPE html>
<html>
	<?php //echo $_SERVER["DOCUMENT_ROOT"]; 
	//echo '<br/>';
	//echo dirname(__FILE__); 
	//include(dirname(__FILE__). "/head.php");
	//echo (dirname(__FILE__). "");
	//echo '<br/>'; 	
	//echo ($_SERVER["DOCUMENT_ROOT"]. "");

	include("/head.php");
	?>
    <body>
		<?php include("/header.php"); ?>
	
		<h1><a href="/P4-VERSION5/index.php">Billet simple pour l'Alaska</a></h1>
		<section>
			<div class="content col-lg-10 col-lg-offset-1 col-md-12">
				<?= $content ?>
			</div>			
		</section>
	
	<?php 	//include(dirname(__FILE__). "/footer.php");
			include("/footer.php");?>
	</body>
</html>