<?php
	
	$dbArray = parse_ini_file("./DBconfig.ini");
	$GLOBALS['clink'] = new mysqli($dbArray['host'], $dbArray['user'], $dbArray['pass'], $dbArray['dbname']);
	function getCategory( $ord ){
		$query = $GLOBALS['clink']->query("SELECT name FROM categories WHERE cOrder={$ord};");
		$fRow = $query->fetch_row();
		echo $fRow[0];
	}
	
	function getLink( $cID ){
		$GLOBALS['clink'] = new mysqli("localhost", "root", "", "newssite");
		$query = $GLOBALS['clink']->query("SELECT link FROM categories WHERE cOrder={$cID};");
		$fRow = $query->fetch_row();
		echo $fRow[0];
	}
	
	function getTitle( $cID, $ord ){
		$GLOBALS['clink'] = new mysqli("localhost", "root", "", "newssite");
		$query = $GLOBALS['clink']->query("SELECT title FROM news_items WHERE cID={$cID} ORDER BY id DESC;");
		for( $i=1; $i<=$ord; $i++ ){
			$fRow = $query->fetch_row();
			if( $i==$ord ){
				return $fRow[0];
			}
		}
	}
	
	function getContent( $cID, $ord ){
		$GLOBALS['clink'] = new mysqli("localhost", "root", "", "newssite");
		$query = $GLOBALS['clink']->query("SELECT content FROM news_items WHERE cID={$cID} ORDER BY id DESC;");
		for( $i=1; $i<=$ord; $i++ ){
			$fRow = $query->fetch_row();
			if( $i==$ord ) return $fRow[0];
		}
	}
	
	function getCategoriesExcept( $id ){
		$GLOBALS['clink'] = new mysqli("localhost", "root", "", "newssite");
		$query = $GLOBALS['clink']->query("SELECT name, link FROM categories WHERE id!={$id} ORDER BY cOrder ASC;");
		for( $i=1; $i<=4; $i++ ){
			$fRow = $query->fetch_row();
			echo "<li><a href='{$fRow[1]}'>{$fRow[0]}</a></li>";
		}
	}
	
	function getNewsInCat( $cID ){
		$GLOBALS['clink'] = new mysqli("localhost", "root", "", "newssite");
		$query = $GLOBALS['clink']->query("SELECT title FROM news_items WHERE cID={$cID} ORDER BY id DESC;");
		for( $i=1; $i<=10; $i++ ){
			$fRow = $query->fetch_row();
			if( $fRow==NULL ) return;
			echo "<li><a href='./cat1.php?nID={$i}'>{$fRow[0]}</a></li>";
		}
	}
?>