<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>テキストエリア</title>
</head>
<body>
<h4>○○組　□□□番　神戸　電子</h4>
入力された文章は次の通りです。
<table border="1">
<?php
	echo '<tr><td>' . $_POST['txtarea'] . '</td></tr>';
?>
</table>
<a href='textarea.html'>戻る</a>
</form>
</body>
</html>