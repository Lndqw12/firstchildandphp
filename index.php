<?php	
	$H = date("H");
	
	if($H >= 6 && $H < 12)
		$img = 'morning';
	elseif($H >= 12 && $H < 18)
		$img = 'day';
	elseif($H >= 18 && $H < 24)
		$img = 'evening';
	else
		$img = 'night';
?>
<!Doctype html>
	<head>
		<meta charset="1251">
		<link href="main.css" rel="stylesheet" />
	</head>
	<body style="width:100%; height:650px; 
	background: url(include/<?php echo $img;?>.jpg);">
		<table style="text-transform:uppercase;">
			<tr>
				<th>Company</th><th>Q1</th><th>Q2</th>
			</tr>
			<tr>
				<td>Microsoft</td><td>20.3</td><td>30.5</td>
			</tr>
			<tr>
				<td>Google</td><td>50.2</td><td>40.63</td>
			</tr>
			<tr>
				<td>Apple</td><td>25.4</td><td>30.2</td>
			</tr>
			<tr>
				<td>IBM</td><td>20.2</td><td>15.6</td>
			</tr>
			<tr>
				<td>Bootstrap</td><td>2.2</td><td>1.6</td>
			</tr>
			<tr>
				<td>Html</td><td>Q</td><td>W</td>
			</tr>
		</table>
	</body>
</html>