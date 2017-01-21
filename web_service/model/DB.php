<?php
require 'connection.php';

if($_REQUEST['flag'] != null){
	switch ($_REQUEST['flag']) {
		case 'news':
			saveNews();
			break;
			
		default:
			
			break;
	}
}else{
	
}


function saveNews()
{
	if($_POST['title'] == null || $_POST['imageurl'] == null || $_POST['description'] == null || $_POST['publishTime'] == null){
		header('Location:../dashboard/news.php?flag=1');
	}
	$data = [];
	$data['id'] = '';
	foreach ($_POST as $key => $value) {
		$data[$key] = $value;
	}
	$query = "INSERT INTO news values(:id, :title, :imageurl, :description, :publishTime)";
	saveToDb($query, $data);
	header('Location:../dashboard/news.php');
}


function saveToDb($query=null,$data){
	$db = new Connection();
	$db = $db->dbConnect();
	$insert = $db->prepare($query);
	$insert = $insert->execute($data);
	return $insert ? true : false;
}