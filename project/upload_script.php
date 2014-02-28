<?php
require_once "php_lib.php";


if( isset($_POST["submitted"]) ){
	switch($_POST["submitted"]){
		case 0:
			$var = upload_image3("file1_1", "file1_2", "file1_3", "scenario_1");
			update_image("Pict1", 1, $var[0]);
			update_image("Pict2", 1, $var[1]);
			update_image("Pict3", 1, $var[2]);
			break;
		case 1:
			$var = upload_image2("file2_1", "file2_3", "scenario_2");
			update_image("Pict1", 2, $var[0]);
			update_image("Pict2", 2, $var[1]);
			break;
		case 2:
			$var = upload_image2("file3_1", "file3_3", "scenario_3");
			update_image("Pict1", 3, $var[0]);
			update_image("Pict2", 3, $var[1]);
			break;
	}
}

go_back();

?>