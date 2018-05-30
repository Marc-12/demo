<?php 
$title = 'Mon blog'; 
ob_start(); 
?>
<div class="news">
<?php	
	foreach ($posts as $data)
		{
			?>
				<div class="newsPost">
					<a href="index.php?action=post&amp;id=<?= $data['id']?> ">
						<img src="<?= $data['image_url']?>" class="imageClass" alt="" > 
						<h2><?= html_entity_decode(htmlspecialchars($data['title'])) ?></h2>
						<div class="newsDate"><em>le <?= $data['creation_date_fr'] ?></em></div>
						<p><br/>
							<?php include_once "model/textManager.php";
							$datas = (htmlspecialchars($data['content'])); 
							$textManager1 = new textManager();
							$textManager1->initSummary($datas);?>
						</p><br/>
						<p class="readMore text-center"><em><a href="index.php?action=post&amp;id=<?= $data['id']?> "> - en savoir plus - </a></em></p>
					</a>
				</div>
			<?php
		}
?>
</div>
<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>

				
				