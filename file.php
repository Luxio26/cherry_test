<?php

session_start();

if(! isset($_SESSION['login'])) {
	header('Location: hello.php');
	exit;
}

?>

<html>
	<head>
		<title>Test</title>
	</head>
	<body>
	</body>
</html>
