<?php
session_start();
$mysqli = new mysqli("localhost",  "root", "", "newssite");

if( $mysqli->connect_errno){
    echo "Connection failed";
    exit();
}

$query = $mysqli->query( "SELECT title FROM news_items WHERE category='PC'
ORDER BY id ASC");
$result = $query->fetch_all();
$query = $mysqli->query( "SELECT COUNT(id) FROM news_items WHERE category='PC'");
$number = $query->fetch_row();
$tID = $_GET['tID'];
echo $number[0];
echo $result[$number[0]-$tID][0];

$mysqli->close();
?>