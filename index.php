<?php
$scheme = $_SERVER['HTTPS'] ? 'https' : 'http';
$host = $_SERVER['HTTP_HOST'];
$basedir = dirname($_SERVER['SCRIPT_NAME']);
header("Location: {$scheme}://{$host}{$basedir}/www.matthewhouse.ca/index.html");
 exit();
?>