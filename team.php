<?php
//$scheme = $_SERVER['HTTPS'] ? 'https' : 'http';
//$host = $_SERVER['HTTP_HOST'];
//$basedir = dirname($_SERVER['SCRIPT_NAME']);
//header("Location: {$scheme}://{$host}{$basedir}/www.matthewhouse.ca/index.html");
// exit();

$loader = require __DIR__ . '/vendor/autoload.php';
$templates = new League\Plates\Engine('templates');
$current_file_path = dirname(__FILE__);
$templates->addFolder('about', $current_file_path . '/templates/about');

// Render a template
echo $templates->render('about::team', ['name' => 'Jonathan']);

?>