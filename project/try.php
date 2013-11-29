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

	$case1_str = '<form id="containerForm">
			<div id="containerDiv">
				<div id="r1_1" class="addLeft">
				</div>
				<input type="file" id="leftAddFileInput">
				<div id="tv1" class="tv">
				</div>
				<div id="botContainer">
					<div id="r1_2" class="addBot">
					</div>
					<input type="file"class="botAddFileInput">
					<div id="r1_3" class="addBot"></div>
					<input type="file" class="botAddFileInput" id="r1_3FileInput">
				</div>
			</div>			
			<div id="submitContainer">
				<input type="submit" value="Apply Changes" id="submitButton">
			</div>	
		</form>
	';
	$case2_str = '<form id="containerForm">
			<div id="containerDiv">
				<div id="r2_1" class="addLeft">
				</div>
				<input type="file" id="leftAddFileInput">
				<div id="tv2" class="tv">
				</div>
				<div id="botContainer">
					<div id="r2_2" class="addBot">
					</div>
					<input type="file" class="botAddFileInput" id="r2_2FileInput">
				</div>
			</div>
			<div id="submitContainer">
				<input type="submit" value="Apply Changes" id="submitButton">
			</div>	
		</form>
	';
	$case3_str = '<form id="containerForm">
			<div id="containerDiv">
				<div id="r3_1" class="addLeft">
				</div>
				<input type="file" id="r3_1FileInput">
				<div id="tv3" class="tv">
				</div>
				<div id="botContainer">
					<div id="r3_2" class="addBot">
					</div>
					<input type="file" class="botAddFileInput" id="r3_2FileInput">
				</div>
			</div>			
			<div id="submitContainer">
				<input type="submit" value="Apply Changes" id="submitButton">
			</div>	
		</form>
	';

	$result = array($case1_str, $case2_str, $case3_str);

	echo $result[$case];
}

?>

<html>
<head>
<title>Try</title>
 <link rel="stylesheet" type="text/css" href="./style.css">
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
