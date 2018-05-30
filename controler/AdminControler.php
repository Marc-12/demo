<?php
// Chargement des classes
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
		//dispaly ALL POSTS
		$posts = $postManager->getPosts(); 
		//display ALL COMMENTS
		$allComments = $commentManager->getAllComments();
		require('view/frontend/admin.php');
		header('Location: view/frontend/admin.php');	
	}
	public function adminDeletePost ()
	{
		$postManager = new PostManager();
		$commentManager = new CommentManager();
		$postManager->deletePost($_GET['id']); 
		$commentManager->erasePostComments($_GET['id']); 						
		$this->admin();
	}	
	public function adminAcceptComment ()
	{
		$commentManager = new CommentManager();
		$commentManager->acceptComment($_GET['id']); 
		$this->admin();
	}
	public function adminRefuseComment ()
	{
		$commentManager = new CommentManager();
		$commentManager->refuseComment($_GET['id']); 
		$this->admin();
	}
	public function adminDeleteComment ()
	{
		$id = $_GET['id'];
		$commentManager = new CommentManager();
		$commentManager->eraseComment($id);						
		$this->admin();
	}
	public function adminAddPost($ArrayParameters)
	{
		if(!empty($_FILES['image']['type']))
		{
			//mettre en variable le type de fichier de l'image	
			$string = $_FILES['image']['type'];	
			//pointer son extension
			$imageExtension = str_replace('image/','.',$string); 
			//un id unique pour mettre la photo dans la BDD
			$uniqId = md5(uniqid(rand(), true));
			
			$image_url = 'public/images/posts/'.$uniqId.$imageExtension;

			// appel fonction IMAGE
			//uploadImage('image','public/images/posts/',15485760, array('png','gif','jpg','JPG','jpeg','JPEG'),$uniqId,$imageExtension);
			
			//fonction pour gérer l'image
			function uploadImage($image,$destination,$maxsize=FALSE,$extensions=FALSE,$image_url)
			{
			   //Test1: fichier correctement uploadé
				 if (!isset($_FILES[$image]) OR $_FILES[$image]['error'] > 0) return FALSE;
			   //Test2: taille limite
				 if ($maxsize !== FALSE AND $_FILES[$image]['size'] > $maxsize) return FALSE;
			   //Test3: extension
				 $ext = substr(strrchr($_FILES[$image]['name'],'.'),1);
				 if ($extensions !== FALSE AND !in_array($ext,$extensions)) return FALSE;
				// créer un nom unique
				 //$image_url = $destination.$uniqId.$imageExtension;
				 //echo $image_url;
				 
				 return move_uploaded_file($_FILES[$image]['tmp_name'],$image_url);
			}
			uploadImage('image','public/images/posts/',154857600, array('png','gif','jpg','jpeg','JPG','JPEG'),$image_url);
			$postManager = new PostManager();
			$posts = $postManager->addPost($image_url,$ArrayParameters['title'],$ArrayParameters['content'],$ArrayParameters['categories']); 
			$this->admin();
		}
		else
		{					
			$image_url = ' ';
			$postManager = new PostManager();
			$posts = $postManager->addPost($image_url,$ArrayParameters['title'],$ArrayParameters['content'],$ArrayParameters['categories']); 
			$this->admin();
		}
	}
	public function adminUpdatePost ($ArrayParameters)
	{													
		if(!empty($_FILES['image']['type']))
		{
			//mettre en variable le type de fichier de l'image	
			$string = $_FILES['image']['type'];	
			//pointer son extension
			$imageExtension = str_replace('image/','.',$string); 
			//un id unique pour mettre la photo dans la BDD
			$uniqId = md5(uniqid(rand(), true));
			$image_url = 'public/images/posts/'.$uniqId.$imageExtension;
			//fonction pour gérer l'image
			function uploadImage($image,$destination,$maxsize=FALSE,$extensions=FALSE,$image_url)
			{
			   //Test1: fichier correctement uploadé
				 if (!isset($_FILES[$image]) OR $_FILES[$image]['error'] > 0) return FALSE;
			   //Test2: taille limite
				 if ($maxsize !== FALSE AND $_FILES[$image]['size'] > $maxsize) return FALSE;
			   //Test3: extension
				 $ext = substr(strrchr($_FILES[$image]['name'],'.'),1);
				 if ($extensions !== FALSE AND !in_array($ext,$extensions)) return FALSE;
				// créer un nom unique
				 return move_uploaded_file($_FILES[$image]['tmp_name'],$image_url);
			}
			uploadImage('image','public/images/posts/',154857600, array('png','gif','jpg','jpeg','JPG','JPEG'),$image_url);
			$postManager = new PostManager(); 
			$UpdatedPost = $postManager->updatePost($ArrayParameters['title'], $ArrayParameters['content'], $ArrayParameters['categories'], $image_url, $ArrayParameters['id']); 
			$this->admin();
		}
		else
		{
			$postManager = new PostManager(); 
			//$UpdatedPost = $postManager->updatePost($title, $content, $category, $image_url, $id); 
			$UpdatedPost = $postManager->updatePost2($ArrayParameters['title'], $ArrayParameters['content'], $ArrayParameters['categories'], $ArrayParameters['id']); 
			$this->admin();
		}
	}
	public function adminCategory ()
	{
		require 'view/frontend/adminCategory.php';
	}
	public function adminAddCategory ($ArrayParameters)
	{
		$AdminManager = new AdminManager(); 
		$addCategory = $AdminManager->addCategory($ArrayParameters['categoryName']); 
	}
	public function adminDeleteCategory($ArrayParameters)
	{

		$AdminManager = new AdminManager(); 
		$deleteCategory = $AdminManager->deleteCategory($ArrayParameters['categoryName']); 
	}
	public function adminReadCategory()
	{
		$AdminManager = new AdminManager(); 
		$readCategory = $AdminManager->readCategory(); 
	}
	public function adminUpdatingPostData($ArrayParameters)
	{
		$postManager = new PostManager(); 
		$UpdatedPost = $postManager->getUpdatingPost($ArrayParameters['id']); 
	}
}





/*
<?php
// Chargement des classes
require_once('model/PostManager.php');
require_once('model/CommentManager.php');
require_once('model/AdminManager.php');

class AdminControler 
{
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
					$this->admin();
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
					$this->admin();
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
					$this->admin();
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
					$id = $_GET['id'];
					$commentManager = new CommentManager();
					$commentManager->eraseComment($id);						
					$this->admin();
				}
				else
				{
					header('Location: index.php');	
				}	
			}
			public function adminAddPost($ArrayParameters)
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
						
						$image_url = 'public/images/posts/'.$uniqId.$imageExtension;

						// appel fonction IMAGE
						//uploadImage('image','public/images/posts/',15485760, array('png','gif','jpg','JPG','jpeg','JPEG'),$uniqId,$imageExtension);
						
						//fonction pour gérer l'image
						function uploadImage($image,$destination,$maxsize=FALSE,$extensions=FALSE,$image_url)
						{
						   //Test1: fichier correctement uploadé
							 if (!isset($_FILES[$image]) OR $_FILES[$image]['error'] > 0) return FALSE;
						   //Test2: taille limite
							 if ($maxsize !== FALSE AND $_FILES[$image]['size'] > $maxsize) return FALSE;
						   //Test3: extension
							 $ext = substr(strrchr($_FILES[$image]['name'],'.'),1);
							 if ($extensions !== FALSE AND !in_array($ext,$extensions)) return FALSE;
							// créer un nom unique
							 //$image_url = $destination.$uniqId.$imageExtension;
							 //echo $image_url;
							 
							 return move_uploaded_file($_FILES[$image]['tmp_name'],$image_url);
							
						}

						uploadImage('image','public/images/posts/',154857600, array('png','gif','jpg','jpeg','JPG','JPEG'),$image_url);
						$postManager = new PostManager();
						$posts = $postManager->addPost($image_url,$ArrayParameters['title'],$ArrayParameters['content'],$ArrayParameters['categories']); 
						$this->admin();
					}
					else
					{					
						$image_url = ' ';
						$postManager = new PostManager();
						$posts = $postManager->addPost($image_url,$ArrayParameters['title'],$ArrayParameters['content'],$ArrayParameters['categories']); 
						$this->admin();
					}
				}
				else
				{
					header('Location: index.php');	
				}
			}
			public function adminUpdatePost ($ArrayParameters)
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
						$image_url = 'public/images/posts/'.$uniqId.$imageExtension;
						//fonction pour gérer l'image
						function uploadImage($image,$destination,$maxsize=FALSE,$extensions=FALSE,$image_url)
						{
						   //Test1: fichier correctement uploadé
							 if (!isset($_FILES[$image]) OR $_FILES[$image]['error'] > 0) return FALSE;
						   //Test2: taille limite
							 if ($maxsize !== FALSE AND $_FILES[$image]['size'] > $maxsize) return FALSE;
						   //Test3: extension
							 $ext = substr(strrchr($_FILES[$image]['name'],'.'),1);
							 if ($extensions !== FALSE AND !in_array($ext,$extensions)) return FALSE;
							// créer un nom unique
							 return move_uploaded_file($_FILES[$image]['tmp_name'],$image_url);
						}
						uploadImage('image','public/images/posts/',154857600, array('png','gif','jpg','jpeg','JPG','JPEG'),$image_url);
						$postManager = new PostManager(); 
						$UpdatedPost = $postManager->updatePost($ArrayParameters['title'], $ArrayParameters['content'], $ArrayParameters['categories'], $image_url, $ArrayParameters['id']); 
						$this->admin();
					}
					else
					{
						$postManager = new PostManager(); 
						//$UpdatedPost = $postManager->updatePost($title, $content, $category, $image_url, $id); 
						$UpdatedPost = $postManager->updatePost2($ArrayParameters['title'], $ArrayParameters['content'], $ArrayParameters['categories'], $ArrayParameters['id']); 
						$this->admin();
					}
					
				}
			}
			public function adminCategory ()
			{
					if(isset($_SESSION['user']) == "admin")	
					{
						require 'view/frontend/adminCategory.php';
					}
					else
					{
						header('Location: index.php');	
					}
				
			}
			public function adminAddCategory ($ArrayParameters)
			{
					if(isset($_SESSION['user']) == "admin")	
					{
						$AdminManager = new AdminManager(); 
						$addCategory = $AdminManager->addCategory($ArrayParameters['categoryName']); 
					}
					else
					{
						header('Location: index.php');	
					}
			}
			public function adminDeleteCategory($ArrayParameters)
			{
				if(isset($_SESSION['user']) == "admin")	
				{
					$AdminManager = new AdminManager(); 
					$deleteCategory = $AdminManager->deleteCategory($ArrayParameters['categoryName']); 
				}
				else
				{
					header('Location: index.php');	
				}
			}
			public function adminReadCategory()
			{
				
				if(isset($_SESSION['user']) == "admin")	
				{
					$AdminManager = new AdminManager(); 
					$readCategory = $AdminManager->readCategory(); 
				}
				else
				{
					header('Location: index.php');	
				}
			}
			public function adminUpdatingPostData($ArrayParameters)
			{
				//var_dump($ArrayParameters);
				$postManager = new PostManager(); 
				$UpdatedPost = $postManager->getUpdatingPost($ArrayParameters['id']); 
			}
}
*/