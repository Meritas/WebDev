<?php session_start(); ?>

<?php
	function getCategory( $id ){
		$clink = new mysqli("localhost", "root", "", "newssite");
		$query = $clink->query("SELECT name FROM categories WHERE id={$id};");
		$fRow = $query->fetch_row();
		echo $fRow[0];
	}
?>
<html>
<head>
<title>Top Stories</title>
	<meta charset="UTF-8" />
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<script src="jquery.js"></script>
	<script src="jquery-cookie.js"></script>
	<script src="p-script.js"></script>

	<div id="navBar">
		<div id="navMenu">
			<ul>
				<li>
					<a href="PC.php"><?php echo(getCategory(1)); ?> </a>
				</li>
				<li>
					<a href="PC.html"><?php echo(getCategory(2)); ?></a>
				</li>
				<li>
					<a href="PC.html"><?php echo(getCategory(3)); ?></a>
				</li>
				<li>
					<a href="PC.html"><?php echo(getCategory(4)); ?></a>
				</li>
				<li>
					<a href="PC.html"><?php echo(getCategory(5)); ?></a>
				</li>
			</ul>
		</div>
	</div>
	<div id="body">
		<div id="authDiv">
			<?php 
				if(isset($_SESSION['username'])){
			?>
					<p>
						Welcome, <?= $_SESSION['username'];?>
						<a href="logout.php">(logout)</a>
					</p>
			<?php
				} else { ?>				
					<p>
						<a href="registration.php">Create an account</a> | 
						<a href="login.php">Login to your account</a>
					</p>
			<?php
				}
			?>
			<div id="rightBar"><!--AD bar-->
			</div>	
		</div>
			
		<div id="contentWrapper">
			<div id="indexHeadingWrapper">
			<div id="indexHeading">
				<ul>
					<li id="n1">News #1</li>
					<li id="n2">News #2</li>
					<li id="n3">News #3</li>
					<li id="n4">News #4</li>
					<li id="n5">News #5</li>
					<li id="n6">News #6</li>
					<li id="n7">News #7</li>
					<li id="n8">News #8</li>
					<li id="n9">News #9</li>
					<li id="n10">News #10</li>
				</ul>
			</div>
			</div>
			<div id="contentImageIndex">
				<div id="contentImageIndexBox">					
					<div id="imgBox">
					</div>
					<div id="contentImageIndexFooting">						
						<h2>
							Footing Title
						</h2>
					</div>
				</div>				
			</div>
			<div id="contentTextBox">
			
			</div>
		</div>
		<div id="ANbox"><!--additional news box-->
			<div id="PCnews">
				<h2>PC</h2>
				<span>News #1</span>
				<span>News #2</span>
			</div>
			<div id="PSnews">
				<h2>PS</h2>
				<span>News #1</span>
				<span>News #2</span>
			</div>
			<div id="XBOXnews">
				<h2>XBOX</h2>
				<span>News #1</span>
				<span>News #2</span>
			</div>
			<div id="WIInews">
				<h2>WII</h2>
				<span>News #1</span>
				<span>News #2</span>			
			</div>
			<div id="OTHERSnews">
				<h2>Others</h2>
				<span>News #1</span>
				<span>News #2</span>			
			</div>
		</div>
		<div id="footer">
			Footer
		</div>
	</div>
</body>
</html>