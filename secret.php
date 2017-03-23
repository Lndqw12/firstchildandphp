<?php
	if($_GET['key'] != md5('1287975')) // ?php-пи запрос на вход в - "secret.php"
	{
		header('location: login.php'); // переброс с "secret.php" в "main.html.php"
		exit();
	}
	
	if(!empty($_POST))
	{
		mysql_connect('localhost', 'root', '');
		mysql_select_db('quick');
		
		$new_rate = $_POST['rate'];
		mysql_query("UPDATE rates SET value='$new_rate' WHERE name='USD'");
	}
?>
<!Doctype html>
<html>
	<head>
		<title>Secret</title>
		<meta charset="utf-8" />
	</head>
		<body>
			<h1 style="color:red; text-align:left; font-size:2em; font-family:impact">Изменить курс долара</h1>
			<form method="post">
				<input type="text" name="rate" /></br>
				<input type="submit" value="сохранить" />
			</form>
		</body>
</html>