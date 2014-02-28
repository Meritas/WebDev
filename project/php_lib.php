<?php

include_once "config.php";

function query_image($pictNum, $promoType){
	
	$query = $GLOBALS["dbLink"]->query("SELECT {$pictNum} FROM Promo WHERE PromoType={$promoType};");
	$result = $query->fetch_assoc();

	echo $result["$pictNum"];
	return $result["{$pictNum}"];
}

function update_image($pictNum, $promoType, $imgPath){

	$escapedStr = $GLOBALS["dbLink"]->real_escape_string($imgPath);
	$query = $GLOBALS["dbLink"]->query("UPDATE promo SET {$pictNum}='{$escapedStr}' WHERE PromoType={$promoType};");
}

function upload_image2($argFileName, $argFileName2, $argNamePrefix){
		
	/*move_uploaded_file($_FILES["{$argFileName}"]["tmp_name"],
		"upload/" . $argNamePrefix."_1.jpg");*/
	$src1 = $_FILES["{$argFileName}"]["tmp_name"];
	$fname1 = $argNamePrefix."_1.jpg";
	$dst1 = real_upload_path() . $fname1;
	$src2 = $_FILES["{$argFileName}"]["tmp_name"];
	$fname2 = $argNamePrefix."_3.jpg";
	$dst2 = real_upload_path() . $fname2;
	move_uploaded_file($src1,$dst1);
	move_uploaded_file($src2,$dst2);
	return array($dst1, $dst2);
}

function upload_image3($argFileName, $argFileName2, $argFileName3, $argNamePrefix){
	$src1 = $_FILES["{$argFileName}"]["tmp_name"];
	$dst1 = real_upload_path() . $argNamePrefix."_1.jpg";
	$src2 = $_FILES["{$argFileName}"]["tmp_name"];
	$dst2 = real_upload_path() . $argNamePrefix."_2.jpg";
	$src3 = $_FILES["{$argFileName}"]["tmp_name"];
	$dst3 = real_upload_path() . $argNamePrefix."_3.jpg";
	move_uploaded_file($src1,$dst1);
	move_uploaded_file($src2,$dst2);
	move_uploaded_file($src3,$dst3);
	return array($dst1, $dst2, $dst3);
}

function go_back(){

  echo("
    <body>
      <script src='jquery.js'></script>
      <script src='script.js'></script>

      <script>
        go_back();
      </script>
    </body>
     ");
}

function real_upload_path(){

	return realpath($GLOBALS['upload_folder']).'/';
}

function randomString() {
       return md5(rand(100, 200));
}

?>