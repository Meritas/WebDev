<?php
include_once "php_lib.php";

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

	$case1_str = '<form method="post" id="containerForm" action="upload_script.php" enctype="multipart/form-data">
			<input type="hidden" name="submitted" value="1" />
			<div id="containerDiv">
				<div id="r1_1" class="addLeft">
				</div>
				<div id="r1_1FileContainer" class="fileContainer"><input type="file" name="file1_1" id="file1_1" class="fileInput"></div>
				<div id="tv1" class="tv">
				</div>
				<div id="botContainer">
					<div id="r1_2" class="addBot">
					</div>
					<div id="r1_2FileContainer" class="fileContainer"><input type="file" name="file1_2" id="file1_2" class="fileInput"></div>
					<div id="r1_3" class="addBot"></div>
					<div id="r1_3FileContainer" class="fileContainer"><input type="file" name="file1_3" id="file1_3" class="fileInput"></div>
				</div>
			</div>			
			<div id="submitContainer">
				<input type="submit" value="Apply Changes" id="submitButton">
			</div>	
		</form>
	';
	$case2_str = '<form method="post" id="containerForm" action="upload_script.php" enctype="multipart/form-data">
			<input type="hidden" name="submitted" value="2" />
			<div id="containerDiv">
				<div id="r2_1" class="addLeft">
				</div>
				<div id="r2_1FileContainer" class="fileContainer"><input type="file" name="file2_1" id="file2_1" class="fileInput"></div>
				<div id="tv2" class="tv">
				</div>
				<div id="botContainer">
					<div id="r2_2" class="addBot">
					</div>
				<div id="r2_2FileContainer" class="fileContainer"><input type="file" name="file2_2" id="file2_2" class="fileInput"></div>
				</div>
			</div>
			<div id="submitContainer">
				<input type="submit" value="Apply Changes" id="submitButton">
			</div>	
		</form>
	';
	$case3_str = '<form method="post" id="containerForm" action="upload_script.php" enctype="multipart/form-data">
			<input type="hidden" name="submitted" value="3" />
			<div id="containerDiv">
				<div id="r3_1" class="addLeft">
				</div>
				<span id="r3_1FileContainer" class="fileContainer"><input type="file" name="file3_1" id="file3_1" class="fileInput"/></span>
				<img id="testImage"/>
				<div id="tv3" class="tv">
				</div>
				<div id="botContainer">
					<div id="r3_2" class="addBot">
					</div>
				<div id="r3_2FileContainer" class="fileContainer"><input type="file" name="file3_2" id="file3_2" class="fileInput"></div>
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
 <?php
 	echo "
 		<style>
 			#r1_1{
 				background-image: url('".query_image(1,1)."');
 			}
 		</style>
 	";
 ?>
</head>
<body>
<script src='jquery.js'></script>
<script src='script.js'></script>
<?php
	if(isset($_POST['choice'])){
		call_case($_POST['choice']);
	}else{
		call_cases_form();
	}
?>
</body>
</html> 
