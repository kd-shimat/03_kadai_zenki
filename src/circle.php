<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>円周と面積</title>
</head>
<body>
<h4>○○組　□□□番　神戸　電子</h4>
<table border="1">
<?php
	$radius = $_POST['radius'];
	echo '<tr><th>半径</th><td>' . $radius . '</td></tr>';
	echo '<tr><th>円周</th><td>'  . 2 * M_PI * $radius . '</td></tr>';
	echo '<tr><th>面積</th><td>'  . M_PI * $radius ** 2 . '</td></tr>';
?>
</table>
<a href='circle.html'>戻る</a>
</form>
</body>
</html>