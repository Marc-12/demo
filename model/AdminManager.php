<?php
class AdminManager
{		
		
	//add CATEGORY
	public function addCategory($categoryName)
	{
		$db = $this->dbConnect();
		$req = $db->prepare('INSERT INTO category(categoryName) VALUES(?)');
		$req->execute(array($categoryName));
		$req->closeCursor();	
	}
	//READ CATEGORY
	public function readCategory()
	{	
		$db = $this->dbConnect();
		$allCategory = $db->prepare('SELECT categoryName FROM category');
		$allCategory->execute(array());				
		foreach ($allCategory as $data)
		{
			echo '<option value="'.$data['categoryName'].'">'.$data['categoryName'].'</option>';
		}
		//$db->closeCursor();
	}
	//ERASE CATEGORY
	public function deleteCategory($categoryName)
	{	
		$db = $this->dbConnect();
		$req = $db->prepare('DELETE FROM category WHERE categoryName = ?');
		$deleteCategory = $req->execute(array($categoryName));
		//$req->closeCursor();
		return $deleteCategory;
		echo 'CATEGORY DELETED';
	}
	//CONNECT TO dataBASE
	private function dbConnect()
	{
		$db = new PDO('mysql:host=localhost;dbname=blog;charset=utf8', 'root', '');
		return $db;
	}
}