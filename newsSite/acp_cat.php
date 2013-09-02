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
			text-align: center;
		}
		input{
			margin-left: auto;
			margin-right: auto;
		}
	</style>
	<script src="jquery.js"></script>
	<script src="acp-script.js"></script>
</head>
<body>

<table border="1">
	<tr>
		<h4 style="margin-left: 10px; margin-top: 15px;">Categories</h4>
	</tr>
	<tr>
		<td>Order</td>
		<td>Name</td>
		<td>ID</td>
		<td></td>
	</tr>
	<?php
		$link = new mysqli("localhost", "root", "", "newssite");
		$query = $link->query("SELECT COUNT(cOrder) FROM categories");
		$fRow = $query->fetch_row();
		$number = $fRow[0];
		$query = $link->query("SELECT cOrder, name, id FROM categories ORDER BY cOrder ASC");
		for($i = 0; $i < $number; $i++){
			$fRow = $query->fetch_row();
			echo(
				"<tr>
					<td>
						<span class='MOVELEFT' id=_ml{$fRow[2]} style='display: block; margin-bottom: 10px; padding: 2px; font-style: italic; font-size: 0.8em; border-style: solid;'>Move left</span>
						{$fRow[0]}
						<span class='MOVERIGHT' id=_mr{$fRow[2]} style='display: block; margin-top: 10px; padding: 2px; font-style: italic; font-size: 0.8em; border-style: solid;'>Move right</span>
						</td>
					<td style='text-align: center;' >{$fRow[1]}</br>"
					.  '<span style="font-style: italic; font-size: 0.7em;">Change name</span>
						<form action="acp_cat.php?fVar='.$fRow[2].'" method="post">
						<input type="text" name="catName">
						<input type="submit">
						</form>
					</td>
					<td>'
						.$fRow[2]
					.'</td>'
					.'<td><form action="./post_item.php?cID='.$fRow[0].'" method="post">
							<input type="submit" value="Post article">
						  </form>
					 </td>
					 <td><form action="./delete_cat.php?cID='.$fRow[0].'" method="post">
							<input type="submit" value="Delete category">
						 </form>
					 </td>'
				."</tr>"
				);
		}
		$link->close();
		?>
</table>
<div id="loaderDiv" style="visibility: hidden" ></div>	
</body>
</html>