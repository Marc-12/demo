<?php
require_once('model/PostManager.php');
require_once('model/CommentManager.php');

class PostControler 
{
			public function listPosts()
			{
				$postManager = new PostManager(); 
				$posts = $postManager->getPosts(); 	
				require('view/frontend/listPostsView.php');
			}
			public function post()
			{
				$postManager = new PostManager();
				$commentManager = new CommentManager();
				$post = $postManager->getPost($_GET['id']);
				$comments = $commentManager->getComments($_GET['id']);
				require('view/frontend/postView.php');	$postManager = new PostManager();
			}
			public function commentOpinion()
			{
				if($_GET['opinion'] == "like")	
				{
					$commentManager = new CommentManager();
					$commentManager->opinionCommentLike($_GET['id']);	
				}
				elseif($_GET['opinion'] == "dislike")	
				{
					$commentManager = new CommentManager();
					$commentManager->opinionCommentDislike($_GET['id']);	
				}	
				elseif($_GET['opinion'] == "redFlag")	
				{
					$commentManager = new CommentManager();
					$commentManager->opinionredFlag($_GET['id']);	
				}
				$link = $_SESSION['redirectionPage']; 
				header('Location: '.$link);	
			}
}