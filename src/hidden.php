<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>隠しフィールド</title>
</head>
<body>
<h4>○○組　□□□番　神戸　電子</h4>
<p>隠されていたデータは次の通りです。</p>
<?php
	echo '<p>' . $_POST['data'] . '</p>';
?>
<a href='hidden.html'>戻る</a>
</form>
</body>
</html>