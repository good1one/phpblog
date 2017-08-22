<?php 
	require_once("database.php");
	require_once("functions/func.php");

	$link = db_connect();
	$articles = articles_all($link);

	require_once("templates/FrontArticles.php");
 ?>