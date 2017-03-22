<?php
	if($_GET['key'] != '1287975') // ?php-пи запрос на вход в - "secret.php"
	{
		header('location: main.html.php'); // переброс с "secret.php" в "main.html.php"
		exit();
	}
?>
<!Doctype html>
<html>
	<head>
		<title>Secret</title>
		<meta charset="utf-8" />
	</head>
		<body>
			<h1 style="color:red; text-align:center; font-size:2em; font-family:impact">SECRET</h1>
		</body>
</html>