<?php
	if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
		$uri = 'https://';
	} else {
		$uri = 'http://';
	}
	$uri .= $_SERVER['HTTP_HOST'];
	header('Location: '.$uri.'/dashboard/');
	<!DOCTYPE html>
	<html>
	<head>
		<title></title>
	</head>
	<body>
	Halo
	</body>
	</html>
	exit;
?>
Something is wrong with the XAMPP installation :-(
