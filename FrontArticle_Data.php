<?php 
	
	require_once("database.php");
	require_once("functions/func.php");

	$link = db_connect();
	$article = articles_get($link, $_GET['id']);

	require_once("templates/FrontArticle.php");
 ?>