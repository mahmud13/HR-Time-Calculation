<?php
$link = mysqli_connect('localhost', 'timedbuser', 'helloyou');
if (!$link)
{
	$error = 'Unable to connect to the database server.';
	include 'error.html.php';
	exit();
}

if (!mysqli_set_charset($link, 'utf8'))
{
	$output = 'Unable to set database connection encoding.';
	include 'output.html.php';
	exit();
}

if (!mysqli_select_db($link, 'timedb'))
{
	$error = 'Unable to locate the calendar database.';
	include 'error.html.php';
	exit();
}
?>
