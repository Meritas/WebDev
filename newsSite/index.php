<?php 
	session_start();
	include_once "phpLib.php";
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
					<a href="<?php echo(getLink(1)); ?>"><?php echo(getCategory(1)); ?> </a>
				</li>
				<li>
					<a href="<?php echo(getLink(2)); ?>"><?php echo(getCategory(2)); ?></a>
				</li>
				<li>
					<a href="<?php echo(getLink(3)); ?>"><?php echo(getCategory(3)); ?></a>
				</li>
				<li>
					<a href="<?php echo(getLink(4)); ?>"><?php echo(getCategory(4)); ?></a>
				</li>
				<li>
					<a href="<?php echo(getLink(5)); ?>"><?php echo(getCategory(5)); ?></a>
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
			<div id="cat1">
				<h2><?php echo(getCategory(1)); ?></h2>
				<span id='cat1item1'><?php echo getTitle(1, 1); ?></span>
				<span id='cat1item2'><?php echo getTitle(1, 2); ?></span>
			</div>
			<div id="cat2">
				<h2><?php echo(getCategory(2)); ?></h2>
				<span id='cat1item1'><?php echo getTitle(2, 1); ?></span>
				<span id='cat1item2'><?php echo getTitle(2, 2); ?></span>
			</div>
			<div id="cat3">
				<h2><?php echo(getCategory(3)); ?></h2>
				<span id='cat1item1'><?php echo getTitle(3, 1); ?></span>
				<span id='cat1item2'><?php echo getTitle(3, 2); ?></span>
			</div>
			<div id="cat4">
				<h2><?php echo(getCategory(4)); ?></h2>
				<span id='cat1item1'><?php echo getTitle(4, 1); ?></span>
				<span id='cat1item2'><?php echo getTitle(4, 2); ?></span>
			</div>
			<div id="cat5">
				<h2><?php echo(getCategory(5)); ?></h2>
				<span id='cat1item1'><?php echo getTitle(5, 1); ?></span>
				<span id='cat1item2'><?php echo getTitle(5, 2); ?></span>
			</div>
		</div>
		<div id="footer">
			Footer
		</div>
	</div>
</body>
</html>