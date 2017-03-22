<?php
	if(!empty($_POST))
	{
		header('location: secret.php?key=' . md5($_POST['login']));
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
			<form method="post">
				Логин:</br>
				<input type="text" name="login" /></br>
				<input type="submit" value="Войти" /></br>
			</form>
		</body>
</html>