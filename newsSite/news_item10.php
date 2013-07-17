<?php

$mysqli = new mysqli("localhost",  "root", "", "newssite");

if( $mysqli->connect_errno){
    echo "Connection failed";
    exit();
}

$query = $mysqli->query( "SELECT content FROM news_items
ORDER BY id ASC");
$result = $query->fetch_all();
$query = $mysqli->query( "SELECT COUNT(id) FROM news_items");
$number = $query->fetch_row();
echo $result[$number[0]-10][0];

$mysqli->close();
?>