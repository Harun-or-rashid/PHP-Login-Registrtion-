<?php
session_start();
	if(!isset($_SESSION['user'])){
		header('location:index.php');
	}

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	aaaaaaaaaaa
	<a href="logout.php">Logout</a>
</body>
</html>