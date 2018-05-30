<?php
require_once('model/CommentManager.php');

class UserControler 
{			public function __construct ()
			{
				// if(!isset($_SESSION['user']) == "admin")	
				if(!isset($_SESSION['id']))	
				{
					header('Location: index.php');	
				}
			}
			public function addComment($ArrayParameters)
			{				
				$pseudoId = $_SESSION['id'];
				$commentManager = new CommentManager();
				$affectedLines = $commentManager->postComment($pseudoId, $ArrayParameters['id'], $ArrayParameters['author'], $ArrayParameters['comment']);
				if ($affectedLines === false) 
				{
					throw new Exception('Impossible d\'ajouter le commentaire !');
				}
				else 
				{
					header('Location: index.php?action=post&id=' . $postId);
				}
			}
			public function eraseComment()
			{
				$id = $_GET['id'];
				$commentManager = new CommentManager();
				$commentManager->eraseComment($id);	
				$link = $_SESSION['redirectionPage']; 
				header('Location: '.$link);	
			}
			public function updateCommentPage()
			{
				// echo $_GET['id'];
				require('view/frontend/updatecommentView.php');
			}
			public function getCommentToModify()
			{
				$commentManager = new CommentManager();
				$commentManager->getComments2($_GET['id']);
			}
			public function updateCommentContent($ArrayParameters)
			{
				$commentManager = new CommentManager();
				$updateComment = $commentManager->postUpdateComment($ArrayParameters['id'], $ArrayParameters['author'], $ArrayParameters['comment']);	
				$link = $_SESSION['redirectionPage']; 
				header('Location: '.$link);	
			}
}