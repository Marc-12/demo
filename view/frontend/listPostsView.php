<?php 
$title = 'Mon blog'; 
ob_start(); 
?>
<h1><a href="index.php">Billet simple pour l'Alaska</a></h1>
		<div class="news">
			<?php	
			foreach ($posts as $data)
				{
					?>
					<a href="index.php?action=post&amp;id=<?= $data['id']?> ">
						<img src="<?= $data['image_url']?>" class="imageClass" alt="" > 
						<h2><?= html_entity_decode(htmlspecialchars($data['title'])) ?></h2>
						<div class="newsDate"><em>le <?= $data['creation_date_fr'] ?></em></div>
						<p>
							<br/><?php include_once "model/textManager.php";
								$datas = (htmlspecialchars($data['content'])); 
								$textManager1 = new textManager();
								$textManager1->initSummary($datas);?>
							<em><a href="index.php?action=post&amp;id=<?= $data['id']?> "> En savoir plus...</a></em>
						</p>
				
					</a>
					<?php
				}
			?>
			<div class="shadowImageBoxLeft"></div>
						<div class="shadowImageBoxRight"></div>
		</div>
<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>