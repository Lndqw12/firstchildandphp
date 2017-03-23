<?php
	//подключение и извлечение из бд
	mysql_connect('localhost', 'root', '');
	mysql_select_db('quick');
	
	$result = mysql_query("SELECT * FROM rates WHERE name='USD'");
	$row = mysql_fetch_assoc($result);
	
	$rate = $row['value'];
	
	if(isset($_POST['bucks']))
		$bucks = $_POST['bucks'];
	else
		$bucks = 0;
?>