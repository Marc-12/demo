<?php
class ConnectDbase
{
	protected function dbConnect()
	{
		$db = new PDO('mysql:host=localhost;dbname=blog;charset=utf8', 'root', '');
		return $db;
	}
}