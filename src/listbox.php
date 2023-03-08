<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>リストボックス</title>
</head>
<body>
<h4>○○組　□□□番　神戸　電子</h4>
<?php
	$fruits = $_POST['fruits'];
	echo 'あなたの好きなフルーツは、';
	foreach($fruits as $fruit){
		echo $fruit . ' ';
	}
	echo 'ですね。<br>';
?>
<a href='listbox.html'>戻る</a>
</form>
</body>
</html>