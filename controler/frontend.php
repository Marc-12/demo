<?php
// Chargement des classes
require_once('model/PostManager.php');
require_once('model/CommentManager.php');

/*
class Controleur 
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
			public function addComment($postId, $author, $comment)
			{
				$pseudoId = $_SESSION['id'];
				$commentManager = new CommentManager();
				$affectedLines = $commentManager->postComment($pseudoId, $postId, $author, $comment);
				if ($affectedLines === false) 
				{
					throw new Exception('Impossible d\'ajouter le commentaire !');
				}
				else 
				{
					header('Location: index.php?action=post&id=' . $postId);
				}
			}
			public function pageLivre ()
			{
				header('Location: view/frontend/livre.php');	
			}
			public function pagePropos ()
			{				
				header('Location: view/frontend/jean-forteroche.php');	
			}
			public function admin ()
			{
				if(isset($_SESSION['user']) == "admin")	
				{
					$postManager = new PostManager(); 
					$commentManager = new CommentManager();
					//dispaly ALL POSTS
					$posts = $postManager->getPosts(); 
					//display ALL COMMENTS
					$allComments = $commentManager->getAllComments();
					require('view/frontend/admin.php');
					
					header('Location: view/frontend/admin.php');	
				}
				else
				{
					header('Location: index.php');	
				}
			}
			public function adminDeletePost ()
			{
				if(isset($_SESSION['user']) == "admin")	
				{
					$postManager = new PostManager();
					$commentManager = new CommentManager();
					$postManager->deletePost($_GET['id']); 
					$commentManager->erasePostComments($_GET['id']); 						
					admin();
				}
				else
				{
					header('Location: index.php');	
				}
			}	
			public function adminAcceptComment ()
			{
				if(isset($_SESSION['user']) == "admin")	
				{
					$commentManager = new CommentManager();
					$commentManager->acceptComment($_GET['id']); 
					admin();
				}
				else
				{
					header('Location: index.php');	
				}
			}
			public function adminRefuseComment ()
			{
				if(isset($_SESSION['user']) == "admin")	
				{
					$commentManager = new CommentManager();
					$commentManager->refuseComment($_GET['id']); 
					admin();
				}
				else
				{
					header('Location: index.php');	
				}
			}
			public function adminDeleteComment ()
			{
					if(isset($_SESSION['user']) == "admin")	
					{
						$postManager = new PostManager();
						$commentManager = new CommentManager();
						$postManager->deletePost($_GET['id']); 
						$commentManager->erasePostComments($_GET['id']); 						
						admin();
					}
					else
					{
						header('Location: index.php');	
					}
			}
			public function adminAddPost($maxFotoSize, $title,$content)
			{
				if(isset($_SESSION['user']) == "admin")	
				{
					$uniqId = md5(uniqid(rand(), true));
					function upload($image,$destination,$maxsize=FALSE,$extensions=FALSE,$uniqId)
					{
					   //Test1: fichier correctement uploadé
						 if (!isset($_FILES[$image]) OR $_FILES[$image]['error'] > 0) return FALSE;
					   //Test2: taille limite
						 if ($maxsize !== FALSE AND $_FILES[$image]['size'] > $maxsize) return FALSE;
					   //Test3: extension
						 $ext = substr(strrchr($_FILES[$image]['name'],'.'),1);
						 if ($extensions !== FALSE AND !in_array($ext,$extensions)) return FALSE;
						// créer un nom unique
						//$image_url = $destination.$GLOBALS['uniqId'].".jpeg";
						$image_url = $destination.$uniqId.".jpeg";
						 return move_uploaded_file($_FILES[$image]['tmp_name'], $image_url);
					}

					upload('image','public/images/',15485760, array('png','gif','jpg','jpeg'),$uniqId);
					
					$postManager = new PostManager(); 
					$posts = $postManager->addPost($uniqId,$title,$content); 
					admin();
				}
				else
				{
					header('Location: index.php');	
				}
			}
			public function adminUpdatePost($id)
			{
				if(isset($_SESSION['user']) == "admin")	
				{
					//$postManager = new PostManager(); 
					//
					//
					$postManager = new PostManager(); 
					//$post2 = $postManager->getPost2Update($_GET['id']);
					$post2 = $postManager->getPost2Update($id);
					require('view/frontend/postView.php');	
					//
					//
					//$updatePost = $postManager->updatePost($id, $title, $content); 
					admin();
				}
				else
				{
					header('Location: index.php');	
				}	
			}
			//
			//
			//
			//
public function updateCommentView()
{
	$id = $_GET['id'];	
	require('view/frontend/updatecommentView.php');
}
			//
			//
			//
			public function eraseComment()
			{
				$id = $_GET['id'];
				$commentManager = new CommentManager();
				$commentManager->eraseComment($id);	
				$link = $_SESSION['redirectionPage']; 
				header('Location: '.$link);	
			}
			public function updateCommentPost($comment, $id)
			{
				$commentManager = new CommentManager();
				$updateComment = $commentManager->postUpdateComment($comment, $id);	
				require('view/frontend/updatecommentView.php');
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
*/

			

					function listPosts()
					{
						$postManager = new PostManager(); 
						$posts = $postManager->getPosts(); 	
						require('view/frontend/listPostsView.php');
					}
					function post()
					{
						$postManager = new PostManager();
						$commentManager = new CommentManager();
						$post = $postManager->getPost($_GET['id']);
						$comments = $commentManager->getComments($_GET['id']);
						require('view/frontend/postView.php');	$postManager = new PostManager();
					}

					function addComment($postId, $author, $comment)
					{
						$pseudoId = $_SESSION['id'];
						$commentManager = new CommentManager();
						$affectedLines = $commentManager->postComment($pseudoId, $postId, $author, $comment);
						if ($affectedLines === false) 
						{
							throw new Exception('Impossible d\'ajouter le commentaire !');
						}
						else 
						{
							header('Location: index.php?action=post&id=' . $postId);
						}
					}
					//LOAD some PAGES
					function pageLivre ()
					{
						header('Location: view/frontend/livre.php');	
					}
					function pagePropos ()
					{
						header('Location: view/frontend/jean-forteroche.php');	
					}
					// LOAD ADMIN PAGE for administrator and load DATAS
					function admin ()
					{
						if(isset($_SESSION['user']) == "admin")	
						{
							$postManager = new PostManager(); 
							$commentManager = new CommentManager();
							//dispaly ALL POSTS
							$posts = $postManager->getPosts(); 
							//display ALL COMMENTS
							$allComments = $commentManager->getAllComments();
							require('view/frontend/admin.php');
							
							header('Location: view/frontend/admin.php');	
						}
						else
						{
							header('Location: index.php');	
						}
					}
					function adminDeletePost ()
					{
						if(isset($_SESSION['user']) == "admin")	
						{
							$postManager = new PostManager();
							$commentManager = new CommentManager();
							$postManager->deletePost($_GET['id']); 
							$commentManager->erasePostComments($_GET['id']); 						
							admin();
						}
						else
						{
							header('Location: index.php');	
						}
					}	
					function adminAcceptComment ()
					{
						if(isset($_SESSION['user']) == "admin")	
						{
							$commentManager = new CommentManager();
							$commentManager->acceptComment($_GET['id']); 
							admin();
						}
						else
						{
							header('Location: index.php');	
						}
					}
					function adminRefuseComment ()
					{
						if(isset($_SESSION['user']) == "admin")	
						{
							$commentManager = new CommentManager();
							$commentManager->refuseComment($_GET['id']); 
							admin();
						}
						else
						{
							header('Location: index.php');	
						}
					}
					function adminDeleteComment ()
					{
						if(isset($_SESSION['user']) == "admin")	
						{
							$id = $_GET['id'];
							$commentManager = new CommentManager();
							$commentManager->eraseComment($id);						
							admin();
						}
						else
						{
							header('Location: index.php');	
						}	
					}
					function adminAddPost($maxFotoSize, $title,$content)
					{
						if(isset($_SESSION['user']) == "admin")	
						{
							if(!empty($_FILES['image']['type']))
							{
								//mettre en variable le type de fichier de l'image	
								$string = $_FILES['image']['type'];	
								//pointer son extension
								$imageExtension = str_replace('image/','.',$string); 
								//un id unique pour mettre la photo dans la BDD
								$uniqId = md5(uniqid(rand(), true));
								//fonction pour gérer l'image
								function upload($image,$destination,$maxsize=FALSE,$extensions=FALSE,$uniqId,$imageExtension)
								{
								   //Test1: fichier correctement uploadé
									 if (!isset($_FILES[$image]) OR $_FILES[$image]['error'] > 0) return FALSE;
								   //Test2: taille limite
									 if ($maxsize !== FALSE AND $_FILES[$image]['size'] > $maxsize) return FALSE;
								   //Test3: extension
									 $ext = substr(strrchr($_FILES[$image]['name'],'.'),1);
									 if ($extensions !== FALSE AND !in_array($ext,$extensions)) return FALSE;
									// créer un nom unique
									 $image_url = $destination.$uniqId.$imageExtension;
									 //echo $image_url;
									 
									 return move_uploaded_file($_FILES[$image]['tmp_name'],$image_url);
								}
								// appel fonction IMAGE
								upload('image','public/images/',15485760, array('png','gif','jpg','jpeg'),$uniqId,$imageExtension);
								$postManager = new PostManager();
								$image_url = 'public/images/'.$uniqId.$imageExtension;
								$posts = $postManager->addPost($image_url,$title,$content); 
								admin();
							}
							else
							{
								$image_url = ' ';
								$postManager = new PostManager();
								$posts = $postManager->addPost($image_url,$title,$content); 
								admin();							
							}
						}
						else
						{
							header('Location: index.php');	
						}
					}
					function adminUpdatedPost($id, $maxFotoSize, $title, $content)
					{
						if(isset($_SESSION['user']) == "admin")	
						{
							$postManager = new PostManager(); 
							$UpdatedPost = $postManager->updatePost($id, $title, $content); 
							admin();
						}
						else
						{
							header('Location: index.php');	
						}
					}
					// COMMENTS 
					function updateComment()
					{
						$id = $_GET['id'];	
						require('view/frontend/updatecommentView.php');
					}
					function eraseComment()
					{
						$id = $_GET['id'];
						$commentManager = new CommentManager();
						$commentManager->eraseComment($id);	
						$link = $_SESSION['redirectionPage']; 
						header('Location: '.$link);	
					}
					// update content text of COMMENTS 
					function updateCommentPost($comment, $id)
					{
						$commentManager = new CommentManager();
						$updateComment = $commentManager->postUpdateComment($comment, $id);	
						require('view/frontend/updatecommentView.php');
					}
					function commentOpinion()
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
					
					//
					//