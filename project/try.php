<?php
include_once "php_lib.php";



/*header("Expires: Tue, 01 Jan 2000 00:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
*/


function call_cases_form(){

	$str = '
	<head>
		<title>Try</title>
		<link rel="stylesheet" type="text/css" href="./style.css">
		<link rel="stylesheet" type="text/css" href="./caseOneStyle.css">
	</head>	
	<body>
		<form method="post" id="ChoicesForm" action="'.$_SERVER['PHP_SELF'].'">
			<fieldset">
				<div id="Choice1Div">
				<input type="radio" name="choice" value="0">
				<label for="choice1"></label></br>
				</div>
				<div id="Choice2Div">
				<input type="radio" name="choice" value="1">
				<label for="choice2"></label></br>
				</div>
				<div id="Choice3Div">
				<input type="radio" name="choice" value="2">
				<label for="choice3"></label>
				</div>
				<input type="submit" value="Select">
			</fieldset>
		</form>
	</body>
	';
	echo $str;
}

function call_case($case){

	$case1_str = '
	<head>
		<title>Try</title>
		<link rel="stylesheet" type="text/css" href="./style.css">
		<link rel="stylesheet" type="text/css" href="./caseOneStyle.css">
		<style>
			#r1_1{
				background-image: url("'.query_image("Pict1", 1).'");
			}
			#r1_2{
				background-image: url("'.query_image("Pict2", 1).'");
			}
			#r1_3{
				background-image: url("'.query_image("Pict3", 1).'");
			}
		</style>
	</head>	
	<body>
		<script src="jquery.js"></script>
		<script src="script.js"></script>	
		<div id="MenuBar">
			<div id="LineOne" class="Lines"></div>
			<div id="LineTwo" class="Lines"></div>
			<div id="LineThree" class="Lines"></div>
			<div id="LineFour" class="Lines"></div>
			<div id="LineFive" class="Lines"></div>
		</div>
		<form method="post" id="containerForm" action="upload_script.php" enctype="multipart/form-data">
					<input type="hidden" name="submitted" value="0" />
					<div id="mainContainer">
						<div id="r1_1" class="addLeft">
							<div id="r1_1FileContainer" class="fileContainer"> <input type="file" id="file1_1" name="file1_1" /></div>
						</div>
						<div class="tv">
						</div>
						<div id="clearDiv"></div>
						<div class="botContainer">
							<div id="r1_2" class="addBot">
								<div id="r1_2FileContainer" class="fileContainer"> <input type="file" id="file1_2" name="file1_2" /></div>
							</div>
							<div id="r1_3" class="addBot">
								<div id="r1_3FileContainer" class="fileContainer"> <input type="file" id="file1_3" name="file1_3" /></div>
							</div>
						</div>				
					</div>		
					<div id="submitContainer">
						<input type="submit" value="Apply Changes" id="submitButton">
					</div>	
		</form>
	</body>
	';
	$case2_str = '
	<head>
		<title>Try</title>
		<link rel="stylesheet" type="text/css" href="./style.css">
		<link rel="stylesheet" type="text/css" href="./caseTwoStyle.css">
		<style>
			#r2_1{
				background-image: url("'.query_image("Pict1", 2).'");
			}
			#r2_3{
				background-image: url("'.query_image("Pict2", 2).'");
			}
		</style>
	</head>	
	<body>
		<script src="jquery.js"></script>
		<script src="script.js"></script>	
		<div id="MenuBar">
			<div id="LineOne" class="Lines"></div>
			<div id="LineTwo" class="Lines"></div>
			<div id="LineThree" class="Lines"></div>
			<div id="LineFour" class="Lines"></div>
			<div id="LineFive" class="Lines"></div>
		</div>
		<form method="post" id="containerForm" action="upload_script.php" enctype="multipart/form-data">
					<input type="hidden" name="submitted" value="1" />
					<div id="mainContainer">
						<div id="r2_1" class="addLeft">
							<div id="r2_1FileContainer" class="fileContainer"> <input type="file" id="file2_1" name="file2_1" /></div>
						</div>
						<div id="rightContainer">
							<div class="tv">
							</div>
							<div id="r2_3">
								<div id="r2_3FileContainer" class="fileContainer"> <input type="file" id="file2_3" name="file2_3" /></div>
							</div>
						</div>
					</div>		
					<div id="submitContainer">
						<input type="submit" value="Apply Changes" id="submitButton">
					</div>	
		</form>
	</body>
	';
	$case3_str = '
	<head>
		<title>Try</title>
		<link rel="stylesheet" type="text/css" href="./style.css">
		<link rel="stylesheet" type="text/css" href="./caseThreeStyle.css">
		<style>
			#r3_1{
				background-image: url("'.query_image("Pict1", 3).'");
			}
			#r3_3{
				background-image: url("'.query_image("Pict2", 3).'");
			}
		</style>
	</head>	
	<body>
		<script src="jquery.js"></script>
		<script src="script.js"></script>	
		<div id="MenuBar">
			<div id="LineOne" class="Lines"></div>
			<div id="LineTwo" class="Lines"></div>
			<div id="LineThree" class="Lines"></div>
			<div id="LineFour" class="Lines"></div>
			<div id="LineFive" class="Lines"></div>
		</div>
		<form method="post" id="containerForm" action="upload_script.php" enctype="multipart/form-data">
					<input type="hidden" name="submitted" value="2" />
					<div id="mainContainer">
						<div id="r3_1" class="addLeft">
							<div id="r3_1FileContainer" class="fileContainer"> <input type="file" id="file3_1" name="file3_1" /></div>
						</div>
						<div class="tv">
						</div>
						<div id="clearDiv"></div>
						<div class="botContainer">
							<div id="r3_3" class="addBot">
								<div id="r3_3FileContainer" class="fileContainer"> <input type="file" id="file3_3" name="file3_3" /></div>
							</div>
						</div>				
					</div>		
					<div id="submitContainer">
						<input type="submit" value="Apply Changes" id="submitButton">
					</div>	
		</form>
	</body>
	';

	$result = array($case1_str, $case2_str, $case3_str);

	echo $result[$case];
}

?>

<html>
<!--<head>
<title>Try</title>
<link rel="stylesheet" type="text/css" href="./style.css">
<link rel="stylesheet" type="text/css" href="./caseOneStyle.css">
<link rel="stylesheet" type="text/css" href="./caseTwoStyle.css">
<link rel="stylesheet" type="text/css" href="./caseThreeStyle.css">
</head>-->
<!--<body>
<script src='jquery.js'></script>
<script src='script.js'></script>-->
<?php
	if(isset($_POST['choice'])){
		call_case($_POST['choice']);
	}else{
		call_cases_form();
	}
?>
</html> 
