<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Мой первый блог</title>
	<link rel="stylesheet" href="../style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
</head>
<body>
	<div class="container">
		<h1>Мой первый блог</h1>
		<a href="index.php?action=add">Добавить статью</a>
		<table class="admin-table">
			<tr>
				<th>Data</th>
				<th>Title</th>
				<th></th>
				<th></th>
			</tr>

			<?php foreach($articles as $article): ?>
                    <tr>
                        <td><?=$article['date']?></td>
                        <td><?=$article['title']?></td>
                        <td>
                            <a href="index.php?action=edit&id=<?=$article['id']?>">Редактировать</a>
                        </td>
                        <td>
                            <a href="index.php?action=delete&id=<?=$article['id']?>">Удалить</a>
                        </td>
                    </tr>
                <?php endforeach ?>		
		</table>
		<footer>
			<p>Мой первый блог<br>Copyright &copy 2017</p>
		</footer>
	</div>
</body>
</html>