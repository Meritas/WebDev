<?php 
	session_start();
	include_once "phpLib.php";
	$GLOBALS['cID'] = 1;
?>

<html>
<head>
	<title>Index</title>
	<meta charset="UTF-8" />
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div id="navBar">
		<div id="navMenu">
			<ul>
				<li><a href="./index.php">Home</a></li>
				<?php getCategoriesExcept($GLOBALS['cID']);?>
			</ul>
		</div>
	</div>
	<div id="body">
		<div id="rightBar"><!--AD bar-->
		</div>
		<div id="leftBar"><!--Category news bar-->
			<h4>Новини в тази категория</h4>
			<ul>
				<?php getNewsInCat($GLOBALS['cID']); ?>
			</ul>
		</div>
		<div id="contentWrapper">
			<div id="headingWrapper">
				<div id="heading">
					<h1>
						<?php 
							if( isset($_GET['nID']) ) echo getTitle( $GLOBALS['cID'], $_GET['nID'] );
							else echo getTitle( $GLOBALS['cID'], 1 );
						?>
					</h1>
				</div>
			</div>
			<div id="contentImage">
			</div>
			<div id="contentTextBox">
				<?php 
					if( isset($_GET['nID']) ) echo getContent( $GLOBALS['cID'], $_GET['nID'] ); 
					else getContent( $GLOBALS['cID'], 1 );
				?>
			</div>
			<div id="commentBox">
				<span>Comment</span>
				<span>Comment</span>
				<span>Comment</span>
				<span>Comment</span>
				<span>Comment</span>
				<span>Comment</span>
				<span>Comment</span>
				<span>
					<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data" id="post_com_form">
							<input type='hidden' name='submitted' id='submitted' value='1'/>
							<label for='name'>Name</label>
							<input type="text" name='name' id='comName' />
							<div><label for='newComment'>Your comment here...</label></div>
							<textarea name='newComment' cols=40 rows=4 id='newComField'></textarea>
							<input type='submit' value="Post" />						
					</form>
				</span>
			</div>
		</div>
		<div id="footer">
			Footer
		</div>
	</div>
</body>
</html>