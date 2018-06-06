<?php $title = htmlspecialchars($post['title']); ?>
<?php ob_start(); ?>

		<div class="news">
			<div>
				<h2><?= htmlspecialchars($post['title']) ?></h2>
				<div class="newsDate"><em>Publié par Jean Forteroche le <?= $post['creation_date_fr'] ?> </em></div>
				<img src="<?= $post['image_url']?>" class="imageClass" alt="" > 
			</div>
			<p class="text-justify"><?= html_entity_decode($post['content']) ?></p><hr>
		</div>
		<h2>Commentaire(s) de l'article</h2>	

		<?php 
			// COMMENTS
			if (isset($_SESSION['pseudo']))
			{
				echo ' Vous pouvez écrire, modifier ou supprimer un commentaire en tant que: "'.$_SESSION['pseudo'].'" :';
				// IP du PSEUDO
				//echo '/1/mon id PSEUDO---> '.$_SESSION['id']; 
				//echo ' <----> /2/id POST---> '.$post['id']; 
				echo '<form class="formComment" action="index.php?action=addComment&amp;id='.$post['id'].'" method="post">
						<div>
							<label for="author">Auteur</label><br />
							<input type="text" id="author" name="author" placeholder="'.$_SESSION['pseudo'].'"/>
						</div>
						<div>
							<label for="comment">Commentaire</label><br />
							<textarea id="comment" name="comment"></textarea>
						</div>
						<div>
							<input type="submit" />
						</div>
					</form><hr>'; 
			}
			else
			{
				echo '<br><a href="view/frontend/connexion.php">Connectez-vous pour laisser un commentaire </a><a href="view/frontend/inscription.php"> --- S\'inscrire</a><br><hr>';
				//mise en mémoire de la page actuelle en variable 
				$_SESSION['redirectionPage'] = $_SERVER['REQUEST_URI']; 
			}
		?>							

<div class="commentDiv">
<?php
	//display ALL COMMENTS
	foreach ($comments as $comment)
	{
		if ($comment['admin_comment'] == 1)
		{
			//echo 'session-pseudo'.$_SESSION['id'].'-----';
			//echo 'pseudo_id'.$comment['pseudo_id'];
			?>
				<br><p class="commentTitle"><u>Commentaire de: <strong><?= htmlspecialchars($comment['author']) ?></strong> - Le: <?= $comment['comment_date_fr'] ?></u></p>
			<?php
				if (isset($_SESSION['id'], $comment['pseudo_id']))
				{
					if ($_SESSION['id'] == $comment['pseudo_id'])
					{
						//echo '(<a href="index.php?action=updateComment&amp;id='.$comment['id'].'">modifier - </a>';
						echo '(<a href="index.php?action=updateCommentPage&amp;id='.$comment['id'].'">modifier - </a>';
						echo '<a href="index.php?action=eraseComment&amp;id='.$comment['id'].'">supprimer</a>)';
						//mise en mémoire de la page actuelle en variable 
						$_SESSION['redirectionPage'] = $_SERVER['REQUEST_URI']; 
					}
				}
				echo '<div class="buttonLikeDiv"><a class="" href="index.php?action=commentOpinion&amp;opinion=like&amp;id='.$comment['id'].'"><img src="public/images/assets/like.png" class="pngImages" alt="" ></a>'.$comment['likes'].'</div>';
				echo '<div class="buttonLikeDiv"><a class="" href="index.php?action=commentOpinion&amp;opinion=dislike&amp;id='.$comment['id'].'"><img src="public/images/assets/dislike.png" class="pngImages" alt="" ></a>'.$comment['dislike'].'</div>';
				echo '<div class="buttonLikeDiv"><a class="" href="index.php?action=commentOpinion&amp;opinion=redFlag&amp;id='.$comment['id'].'"><img src="public/images/assets/redflag.png" class="pngImages" alt="" ></a>'.$comment['redFlag'].'</div>';
		?>	
			<br><br><p class="commentComment"><i>"<?= nl2br(htmlspecialchars($comment['comment'])) ?>"</i></p><br>
 <?php }
		
	}?>
</div>
<?php 
	$content = ob_get_clean(); 
	require('template.php'); 
?>