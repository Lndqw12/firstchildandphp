<!Doctype html>
<html lang="en">
	<head>
		<title></title>
		<meta charset="utf-8" />
		<link href="main.css" rel="stylesheet" />
	</head>
	<?php include("include/main.php"); ?> <!-- подкл пчп файла -->
	<body style="
	width:100%;
	height:650px;
	background:url(include/<?php echo $img;?>.jpg);"><style>@import url('https://fonts.googleapis.com/css?family=Droid+Serif|Lobster');</style>
		<h1><p style="font-family:calibri;">&laquo;<?php echo $h;?>&nbsp;clock&raquo;</p></h1> <!-- переменная времени -->
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