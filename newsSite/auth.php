<?php

$username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
$password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);

$db = new mysqli("localhost", "root", "", "newssite");

$stmt = $db->prepare("SELECT userid FROM users WHERE username=? AND password=md5(?)");
$stmt->bind_param('ss', $username, $password);

$stmt->execute();

$stmt->store_result();
if($stmt->num_rows==1){
	echo "smt";
	$stmt->bind_result($id);
	$stmt->fetch();
}

echo "$id";
?>