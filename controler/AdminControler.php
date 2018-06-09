<?php
require_once('model/PostManager.php');
require_once('model/CommentManager.php');
require_once('model/AdminManager.php');

class AdminControler 
{
	public function __construct ()
	{
		if(!isset($_SESSION['user']) == "admin")	
		{
			header('Location: index.php');	
		}
	}
	public function admin ()
	{
		$postManager = new PostManager(); 
		$commentManager = new CommentManager();
		$posts = $postManager->getPosts(); 
		$allComments = $commentManager->getAllComments();
		require('view/frontend/admin.php');
		header('Location: view/frontend/admin.php');	
	}
	public function adminDeletePost ($arrayParameters)
	{
		$postManager = new PostManager();
		$commentManager = new CommentManager();
		$postManager->deletePost($arrayParameters['id']); 
		$commentManager->erasePostComments($arrayParameters['id']); 						
		$this->admin();
	}	
	public function adminAcceptComment ($arrayParameters)
	{
		$commentManager = new CommentManager();
		$commentManager->acceptComment($arrayParameters['id']); 
		$this->admin();
	}
	public function adminRefuseComment ($arrayParameters)
	{
		$commentManager = new CommentManager();
		$commentManager->refuseComment($arrayParameters['id']); 
		$this->admin();
	}
	public function adminDeleteComment ($arrayParameters)
	{
		$commentManager = new CommentManager();
		$commentManager->eraseComment($arrayParameters['id']);						
		$this->admin();
	}
	public function adminAddPost($arrayParameters)
	{
		if(!empty($_FILES['image']['type']))
		{
			$string = $_FILES['image']['type'];	
			$imageExtension = str_replace('image/','.',$string); 
			$uniqId = md5(uniqid(rand(), true));
			$image_url = 'public/images/posts/'.$uniqId.$imageExtension;
			function uploadImage($image,$destination,$maxsize=FALSE,$extensions=FALSE,$image_url)
			{
				 if (!isset($_FILES[$image]) OR $_FILES[$image]['error'] > 0) return FALSE;
				 if ($maxsize !== FALSE AND $_FILES[$image]['size'] > $maxsize) return FALSE;
				 $ext = substr(strrchr($_FILES[$image]['name'],'.'),1);
				 if ($extensions !== FALSE AND !in_array($ext,$extensions)) return FALSE;
				 return move_uploaded_file($_FILES[$image]['tmp_name'],$image_url);
			}
			uploadImage('image','public/images/posts/',154857600, array('png','gif','jpg','jpeg','JPG','JPEG'),$image_url);
			$postManager = new PostManager();
			$posts = $postManager->addPost($image_url,$arrayParameters['title'],$arrayParameters['content'],$arrayParameters['categories']); 
			$this->admin();
		}
		else
		{					
			$image_url = ' ';
			$postManager = new PostManager();
			$posts = $postManager->addPost($image_url,$arrayParameters['title'],$arrayParameters['content'],$arrayParameters['categories']); 
			$this->admin();
		}
	}
	public function adminUpdatePost ($arrayParameters)
	{													
		if(!empty($_FILES['image']['type']))
		{
			$string = $_FILES['image']['type'];	
			$imageExtension = str_replace('image/','.',$string); 
			$uniqId = md5(uniqid(rand(), true));
			$image_url = 'public/images/posts/'.$uniqId.$imageExtension;
			function uploadImage($image,$destination,$maxsize=FALSE,$extensions=FALSE,$image_url)
			{
				 if (!isset($_FILES[$image]) OR $_FILES[$image]['error'] > 0) return FALSE;
				 if ($maxsize !== FALSE AND $_FILES[$image]['size'] > $maxsize) return FALSE;
				 $ext = substr(strrchr($_FILES[$image]['name'],'.'),1);
				 if ($extensions !== FALSE AND !in_array($ext,$extensions)) return FALSE;
				 return move_uploaded_file($_FILES[$image]['tmp_name'],$image_url);
			}
			uploadImage('image','public/images/posts/',154857600, array('png','gif','jpg','jpeg','JPG','JPEG'),$image_url);
			$postManager = new PostManager(); 
			$UpdatedPost = $postManager->updatePost($arrayParameters['title'], $arrayParameters['content'], $arrayParameters['categories'], $image_url, $arrayParameters['id']); 
			$this->admin();
		}
		else
		{
			$postManager = new PostManager(); 
			$UpdatedPost = $postManager->updatePost2($arrayParameters['title'], $arrayParameters['content'], $arrayParameters['categories'], $arrayParameters['id']); 
			$this->admin();
		}
	}
	public function adminCategory ()
	{
		require 'view/frontend/adminCategory.php';
	}
	public function adminAddCategory ($arrayParameters)
	{
		$AdminManager = new AdminManager(); 
		$addCategory = $AdminManager->addCategory($arrayParameters['categoryName']); 
	}
	public function adminDeleteCategory($arrayParameters)
	{
		$AdminManager = new AdminManager(); 
		$AdminManager->deleteCategory($arrayParameters['categoryName']); 
	}
	public function adminReadCategory()
	{
		$AdminManager = new AdminManager(); 
		$readCategory = $AdminManager->readCategory(); 
	}
	public function adminUpdatingPostData($arrayParameters)
	{
		$postManager = new PostManager(); 
		$UpdatedPost = $postManager->getUpdatingPost($arrayParameters['id']); 
	}
}