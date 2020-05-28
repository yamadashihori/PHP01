<?php
$name=$_POST["name"];
$mail=$_POST["mail"];

$file = fopen("data/data.txt","a");
fwrite($file,$name.",".$mail);
fclose($file);

?>
<html>
<head>
<meta charset="utf-8">
<title>POST（受信）</title>
</head>
<body>
お名前：<?=$name?>
EMAIL：<?=$mail?>


<ul>
<li><a href="index.php">index.php</a></li>
</ul>
</body>
</html>