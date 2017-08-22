<?php 
	
	require_once("../database.php");
	require_once("../functions/func.php");

	$link = db_connect();
	if (isset($_GET['action']))
		$action = $_GET['action'];
	else
		$action = "";

	if ($action == "add") {
		if (!empty($_POST)) {
			articles_new($link, $_POST['title'], $_POST['date'], $_POST['content']);
			header("Location: index.php");
		}
		$article = ["id"=>"", "title"=>"", "date"=>"", "content"=>""];
		include("../templates/AdminAdd.php");

	} else if ($action == 'edit'){
        if(!isset($_GET['id']))
            header('Location: index.php');
        $id = (int)$_GET['id'];

        $article = articles_get($link, $id);
        include("../templates/AdminAdd.php"); 
        
        if(!empty($_POST) && $id > 0) {
            articles_edit($link, $id, $_POST['title'], $_POST['date'], $_POST['content']);
            header("Location: index.php");
        }
         
	} else if ($action == 'delete'){
        $id = $_GET['id'];
        $article = articles_delete($link, $id);
        header('Location: index.php');

    } else {
		$articles = articles_all($link);
		include("../templates/AdminArticles.php");

	}
 ?>