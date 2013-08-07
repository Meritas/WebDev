<?php
	error_reporting(E_ERROR | E_WARNING | E_PARSE);
	session_start();
	$ulink = new mysqli("localhost", "root", "", "newssite");
	$query = $ulink->query("SELECT isAdmin FROM users WHERE username='{$_SESSION['username']}';");
	$fRow = $query->fetch_row();
	if( $fRow[0] != 1 ){
		exit("<h2>Error: You don't have rights to access this page.</h2>");
	}
	$clink = new mysqli("localhost", "root", "", "newssite");
	$query = $clink->query("SELECT cOrder FROM categories WHERE id={$_GET['cID']};");
	$fRow = $query->fetch_row();
	if( $fRow[0] == 5){
		exit("<h3>This category can't be moved any further to the right</h3>");
	}
	$query = $clink->query("UPDATE categories SET cOrder=cOrder+1 WHERE id={$_GET['cID']};");
	$query = $clink->query("SELECT id FROM categories WHERE cOrder=(SELECT cOrder FROM categories WHERE id={$_GET['cID']})");
	
	for( $i=0; $i<=1; $i++ ){
		error_reporting(E_WARNING | E_PARSE);
		$fRow = $query->fetch_row();
		if( $fRow[0] == $_GET['cID'] ) continue;
		$query = $clink->query("UPDATE categories SET cOrder=cOrder-1 WHERE id={$fRow[0]}");
	}
	$ulink->close();
	$clink->close();
?>