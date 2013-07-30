<?php

$username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
$password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);

$db = new mysqli("localhost", "root", "", "newssite");

$stmt = $db->prepare("SELECT userid FROM users WHERE username=? AND password=md5(?)");
$stmt->bind_param('ss', $username, $password);

$stmt->execute();

session_start();

$_SESSION['username'] = $username;
$stmt->store_result();
if($stmt->num_rows==1){
	echo "Logged in successfuly";
	$stmt->bind_result($id);
	$stmt->fetch();
	header("refresh:2;url=./index.php");
}	
?>