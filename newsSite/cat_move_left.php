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
	$query = $clink->query("UPDATE TABLE categories SET cOrder=cOrder+1 WHERE id={$_GET['cID']}");
	$query = $cllink->query("U