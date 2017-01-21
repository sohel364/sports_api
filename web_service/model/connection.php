<?php
class Connection
{
	private $db;
	public function dbConnect()
	{
		$this->db = new PDO("mysql:host=localhost;dbname=sports_app","root","");
		$this->db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		return $this->db;
	}

}