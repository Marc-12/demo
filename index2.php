<?php
session_start();
require('controler/frontend.php');
		try 
		{
			
				if (isset($_GET['action'])) 
				{
					call_user_func($_GET['action'], $_GET['id']);
				}
				else 
				{
					listPosts();
				}
		}
				catch(Exception $e) 
				{
					echo 'Erreur : ' . $e->getMessage();
				}


	/*
    if (isset($_GET['action'])) 
	{
        if ($_GET['action'] == 'listPosts') 
		{
            listPosts();
        }
        elseif ($_GET['action'] == 'post') 
		{
            if (isset($_GET['id']) && $_GET['id'] > 0) 
			{
                post();
            }
            else 
			{
                throw new Exception('Aucun identifiant de billet envoyé');
            }
        }
        elseif ($_GET['action'] == 'addComment') 
		{
            if (isset($_GET['id']) && $_GET['id'] > 0) 
			{
                if (!empty($_POST['author']) && !empty($_POST['comment'])) 
				{
                    addComment($_SESSION['id'],$_GET['id'], $_POST['author'], $_POST['comment']);
                }
                else 
				{
                    throw new Exception('Tous les champs ne sont pas remplis !');
                }
            }
            else 
			{
                throw new Exception('Aucun identifiant de billet envoyé');
            }					
        }
		
		
		
		//COMMENTS
				elseif ($_GET['action'] == 'updateComment') 
				{
					updateCommentView($_GET['id']);	
				}
		elseif ($_GET['action'] == 'eraseComment') 
		{
			eraseComment($_GET['id']);	
		}			
				elseif ($_GET['action'] == 'updateCommentContent') 
				{
					updateCommentPost($_POST['comment'], $_GET['id']);	
				}
		
				elseif ($_GET['action'] == 'commentLike') 
				{
					commentLike($_GET['id']);	
				}
				elseif ($_GET['action'] == 'commentOpinion') 
				{
					//echo $_GET['opinion'].'<br>';
					//echo $_GET['id'];
					commentOpinion($_GET['opinion'], $_GET['id']);	
				}
				elseif ($_GET['action'] == 'adminAcceptComment') 
				{
					//echo 'ADMIN --ACCEPT-- COMMENT ---> '.($_GET['id']);	
					adminAcceptComment($_GET['id']);
				}
		elseif ($_GET['action'] == 'adminRefuseComment') 
		{
			//echo 'ADMIN --DELETE-- COMMENT ---> '.($_GET['id']);
			adminRefuseComment($_GET['id']);			
		}
				elseif ($_GET['action'] == 'pageLivre') 
				{
					pageLivre ();			
				}
				elseif ($_GET['action'] == 'pagePropos') 
				{
					pagePropos ();			
				}
					//ZONE ADMIN
					elseif ($_GET['action'] == 'admin') 
					{
						admin();	
					}
					elseif ($_GET['action'] == 'adminDeletePost') 
					{ 
						adminDeletePost();
					}	
			elseif ($_GET['action'] == 'adminUpdatePost') 
			{ 
				adminUpdatePost($_GET['id'], $_POST['title'], $_POST['content']);	
			}	
			elseif ($_GET['action'] == 'adminAddPost') 
			{ 							

			
				// ID image unique 
				$uniqId = md5(uniqid(rand(), true));

				function upload($image,$destination,$maxsize=FALSE,$extensions=FALSE)
				{
				   //Test1: fichier correctement uploadé
					 if (!isset($_FILES[$image]) OR $_FILES[$image]['error'] > 0) return FALSE;
				   //Test2: taille limite
					 if ($maxsize !== FALSE AND $_FILES[$image]['size'] > $maxsize) return FALSE;
				   //Test3: extension
					 $ext = substr(strrchr($_FILES[$image]['name'],'.'),1);
					 if ($extensions !== FALSE AND !in_array($ext,$extensions)) return FALSE;
					// créer un nom unique
					$image_url = $destination.$GLOBALS['uniqId'].".jpeg";
				   //Déplacement
					 return move_uploaded_file($_FILES[$image]['tmp_name'], $image_url);
				}
				//EXEMPLES
				  $upload = upload('image','public/images/',15485760, array('png','gif','jpg','jpeg') );
				  if ($upload) "Upload de l'icone réussi!<br/>";
				  
				  
				$title = $_POST['title'];
				$content = $_POST['content'];
				adminAddPost($uniqId,$title,$content);
				  
			}		
    }
    else 
	{
        listPosts();
    }
}
catch(Exception $e) 
{
    echo 'Erreur : ' . $e->getMessage();
}

*/