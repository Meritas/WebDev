<?php
	if( isset($_POST['submitted']) ){
		exit('haha');
	}
?>
<html>
<head>
    <title>Index</title>
    <meta charset="UTF-8" />
    <link rel="stylesheet" type="text/css" href="style.css">    
</head>
<body>
<form method="post" action="post_item.php" enctype="multipart/form-data" id="post_item_form">
	<fieldset>
		<input type='hidden' name='submitted' id='submitted' value='1'/>
		<label for='name' >Post author: </label>
		<input type='text' name='name' id='name' maxlength="50" />
		<label for='title' >Post title</label>
		<input type='text' name='title' id='title' maxlength="75" />
		<label for='content'/>Content:</label>
		<input type='text' name='content' id='content' maxlength="200000" />
		<input type='submit' name='Post item' value='Post' />
	</fieldset>
</form>
</body>
</html>
