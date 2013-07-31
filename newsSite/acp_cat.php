<?php
	error_reporting(E_ERROR | E_WARNING | E_PARSE);
	session_start();
	$ulink = new mysqli("localhost", "root", "", "newssite");
	$query = $ulink->query("SELECT isAdmin FROM users WHERE username='{$_SESSION['username']}';");
	$fRow = $query->fetch_row();
	if( $fRow[0] != 1 ){
		exit("<h2>Error: You don't have rights to access this page.</h2>");
	}
	if( isset($_GET['fVar']) ){
		$query = $ulink->query("UPDATE categories SET name='{$_POST["catName"]}' WHERE id={$_GET['fVar']};");
		$ulink->close();
	}
?>
<html>
<head>
<title>Manage Categories</title>
	<meta charset="UTF-8" />
	<link rel="stylesheet" type="text/css" href="style.css">
	<style>
		td{
			vertical-align: center;
		}
	</style>
</head>
<body>

<table border="1">
	<tr>
		<h4 style="margin-left: 10px; margin-top: 15px;">Categories</h4>
	</tr>
	<tr>
		<td>Id</td>
		<td>Name</td>
	</tr>
	<?php
		$link = new mysqli("localhost", "root", "", "newssite");
		$query = $link->query("SELECT COUNT(id) FROM categories");
		$fRow = $query->fetch_row();
		$number = $fRow[0];
		$query = $link->query("SELECT id, name FROM categories ORDER BY id ASC");
		for($i = 0; $i < $number; $i++){
			$fRow = $query->fetch_row();
			echo(
				"<tr>
					<td>{$fRow[0]}</td>
					<td>{$fRow[1]}</td>"
					.'<td>
						<form action="acp_cat.php?fVar='.$fRow[0].'" method="post">
						<input type="text" name="catName">
					 </td>'
					.'<td>
						<input type="submit">
						</form>
					 </td>'					 
				."</tr>"
				);
		}
		$link->close();
		?>
	</table>
</body>
</html>