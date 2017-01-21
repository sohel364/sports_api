<?php
require 'config.php';

$username = isset($_POST['username'])? $_POST['username'] : null;
$password = isset($_POST['password'])? $_POST['password'] : null;
if($username != null && $password != null){
	if(USERNAME == $username && PASS == $password){
		session_start();
		$_SESSION['login'] = true;
		$_SESSION['user'] = USERNAME;
		header('Location:dashboard/index.php');
	}else{
		header('Location:index.php?Flag=incorrect');
	}
}else{
	header('Location:index.php?Flag=missing');
}