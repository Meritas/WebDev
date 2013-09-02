<?php
include_once "config.php";
	
	function getCategory( $ord ){
		$query = $GLOBALS['clink']->query("SELECT name FROM categories WHERE cOrder={$ord};");
		$fRow = $query->fetch_row();
		echo $fRow[0];
	}
	
	function getLink( $cID ){	
		$query = $GLOBALS['clink']->query("SELECT link FROM categories WHERE cOrder={$cID};");
		$fRow = $query->fetch_row();
		echo $fRow[0];
	}
	
	function getTitle( $ord ){
		$query = $GLOBALS['clink']->query("SELECT title FROM news_items WHERE  cID={$cID} ORDER BY id DESC LIMIT $ord");
		for( $i=1; $i<=$ord; $i++ ){
			$fRow = $query->fetch_row();
			if( $i==$ord ){
				return $fRow[0];
			}
		}
	}
	
	function getContent( $cID, $ord ){	
		$query = $GLOBALS['clink']->query("SELECT content FROM news_items WHERE cID={$cID} ORDER BY id DESC;");
		for( $i=1; $i<=$ord; $i++ ){
			$fRow = $query->fetch_row();
			if( $i==$ord ) return $fRow[0];
		}
	}
	
	function getCategoriesExcept( $id ){	
		$fRow = $GLOBALS['clink']->query("SELECT COUNT(id) FROM categories")->fetch_row();
		$count = $fRow[0];
		$query = $GLOBALS['clink']->query("SELECT name, link FROM categories WHERE id!={$id} ORDER BY cOrder ASC;");
		for( $i=1; $i<=$count; $i++ ){
			$fRow = $query->fetch_row();
			echo "<li><a href='{$fRow[1]}'>{$fRow[0]}</a></li>";
		}
	}
	
	function getNewsInCat( $cID ){
		$query = $GLOBALS['clink']->query("SELECT title FROM news_items WHERE cID={$cID} ORDER BY id DESC;");
		for( $i=1; $i<=10; $i++ ){
			$fRow = $query->fetch_row();
			if( $fRow==NULL ) return;
			echo "<li><a href='./cat1.php?nID={$i}'>{$fRow[0]}</a></li>";
		}
	}
?>