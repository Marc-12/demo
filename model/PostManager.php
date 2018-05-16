<?php
class PostManager
{
	
	// add POST
	public function addPost($image_url,$title,$content)
	{
		$db = $this->dbConnect();
		$req = $db->prepare('INSERT INTO posts(image_url, title, content, creation_date) VALUES(?, ?, ?, NOW())');
		$req->execute(array($image_url,$title,$content));
		$post = $req->fetch();
		$req->closeCursor();
		return $post;
	}

	// get (all) POSTS
	public function getPosts()
	{
		// Connexion à la BDD
		$db = $this->dbConnect();
		// Mise en mémoire de la requete
		$req = $db->query('SELECT id, title, image_url, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM posts ORDER BY creation_date DESC');
		// Mettre les datas demandées dans une variable
		$data = $req->fetchAll();
		// Fermeture et fin de la requête
		$req->closeCursor();
		// Retourner les infos
		return $data;
	}
	// get POST
	public function getPost($postId)
	{
		
		$db = $this->dbConnect();
		$req = $db->prepare('SELECT title, image_url, content, id, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM posts WHERE id = ?');
		$req->execute(array($postId));
		$post = $req->fetch();
		$req->closeCursor();
		return $post;
	}
	// get POST
	//
	//
	//
	/*
	public function getPost2Update($id)
	{
		
		$db = $this->dbConnect();
		$req = $db->prepare('SELECT * FROM posts WHERE id = ?');
		$req->execute(array($id));
		$post2Update = $req->fetch();
		$req->closeCursor();
		return $post2Update;
	}
	*/
	//
	// update POST
	public function updatePost($id, $title, $content)
	{		
		$db = $this->dbConnect();
		$req = $db->prepare('UPDATE posts SET title=?, content=? WHERE id=?');
		$updateComment = $req->execute(array($title, $content, $id));
		$req->closeCursor();
		return $updateComment;
	}
	// delete POST
	public function deletePost($id)
	{
		$db = $this->dbConnect();
		$req = $db->prepare('DELETE FROM posts WHERE id=?');
		$deletePost = $req->execute(array($id));
		//$req->closeCursor();
		return $deletePost;
	}
	// CONNECT TO dataBASE
	private function dbConnect()
	{
		$db = new PDO('mysql:host=localhost;dbname=blog;charset=utf8', 'root', '');
		return $db;
	}
}