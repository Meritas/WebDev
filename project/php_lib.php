<?php

include_once "config.php";

function query_image($pictNum, $promoType){

	$query = $GLOBALS["dbLink"]->query("SELECT {$pictNum} FROM promo WHERE PromoType={$promoType};");
	$result = $query->fetch_assoc();
	return $result["{$pictNum}"];
}

function update_image($pictNum, $promoType, $imgPath){

	$escapedStr = $GLOBALS["dbLink"]->real_escape_string($imgPath);
	$query = $GLOBALS["dbLink"]->query("UPDATE promo SET {$pictNum}='{$escapedStr}' WHERE PromoType={$promoType};");
}

function upload_image2($argFileName, $argFileName2, $argNamePrefix){
		
	move_uploaded_file($_FILES["{$argFileName}"]["tmp_name"],
		"upload/" . $argNamePrefix."_1.jpg");
	move_uploaded_file($_FILES["{$argFileName2}"]["tmp_name"],
		"upload/" . $argNamePrefix."_2.jpg");

	return array("./upload/".$argNamePrefix."_1.jpg", "./upload/".$argNamePrefix."_2.jpg");
}

function upload_image3($argFileName, $argFileName2, $argFileName3, $argNamePrefix){
	move_uploaded_file($_FILES["{$argFileName}"]["tmp_name"],
		"upload/" . $argNamePrefix."_1.jpg");
	move_uploaded_file($_FILES["{$argFileName2}"]["tmp_name"],
		"upload/" . $argNamePrefix."_2.jpg");

	return array("./upload/".$argNamePrefix."_1.jpg", "./upload/".$argNamePrefix."_2.jpg", "./upload/".$argNamePrefix."_3.jpg");
}

function randomString() {
       return md5(rand(100, 200));
}

?>