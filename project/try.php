<?php

function call_cases_form(){

	$str = '
		<form method="post" action="'.$_SERVER['PHP_SELF'].'">
			<fieldset">
				<input type="radio" name="choice" value="0">
				<label for="choice1">Version 1</label></br>
				<input type="radio" name="choice" value="1">
				<label for="choice2">Version 2</label></br>
				<input type="radio" name="choice" value="2">
				<label for="choice3">Version 3</label>
				<input type="submit" value="Select">
			</fieldset>
		</form>
	';
	echo $str;
}

function call_case($case){

	$case1_str = '<div id="container">
			<div id="r1_1" class="add">
			</div>
			<div id="tv1" class="tv">
			</div>
			<div id="r1_2" class="add">
			</div>
			<div id="r1_3" class="add">
			</div>
		</div>
	';
	$case2_str = '<div id="container">
			<div id="r2_1" class="add"></div>
			<div id="tv2" class="tv"></div>
			<div id="r2_2" class="add" style="">
			</div>
		</div>
	';
	$case3_str = '<div id="container">
			<div id="tv3" class="tv">
			</div>
			<div id="r3_1" class="add">
			</div>
			<form method="post" action="'.$_SERVER['PHP_SELF'].'" id="form1">
				<input type="file">
			</form>
		</div>
	';

	$result = array($case1_str, $case2_str, $case3_str);

	echo $result[$case];
}

?>

<html>
<head>
<title>Try</title>
<style>
	input[type="submit"]{
		display: block;
	}
	.tv, .add{
		border-style: solid;
	}
	.tv{
		height: 550px;
		width: 700px; 
		border-style: solid; 
		display: inline-block; 
		float: right;
	}
	#tv3{
		height: 550px;
		width: 1200px;
		border-style: solid;
		display: inline-block;
		float: none;
	}
	#r1_1{
		height: 550px; 
		width: 200px; 
		border-style: solid; 
		display: inline-block;
	}
	#r1_2{
		height: 200px; 
		width: 450px; 
		border-style: solid; 
		display: inline-block;
	}
	#r1_3{
		height: 200px; 
		width: 450px; 
		border-style: solid; 
		display: inline-block;
	}
	#r2_1{
		height: 550px; 
		width: 200px; 
		border-style: solid; 
		display: inline-block;
	}
	#r2_2{
		height: 200px; 
		width: 1100px; 
		border-style: solid; 
		display: inline-block;
	}
	#r3_1, #form1{
		position: absolute;
		z-index: -1;
	}
	#r3_1{
		height: 400px;
		width: 1100px;
		top: 570px;
		border-style: solid;
	}
	#form1{
		top: 930px;
		right: 950px;
		z-index: 3;
		display: inline;
		background-color: red;
	}
</style>
</head>
<body>
<?php
	if(isset($_POST['choice'])){
		call_case($_POST['choice']);
	}else{
		call_cases_form();	
	}
?>
</body>
</html>