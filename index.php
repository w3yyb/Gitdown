<!DOCTYPE html>
<html lang="zh-CN">

<head>

	<meta charset="utf-8">
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Awesome PHP A curated list of amazingly awesome PHP libraries, resources and shiny things.">
	<meta name="keywords" content="Awesome PHP">
	<meta name="author" content="Lenix">
	<meta name="robots" content="index,follow">
	<meta name="application-name" content="p2hp.com">

	<!-- Site CSS -->
 	<link href="gitdown.css" rel="stylesheet">
	 <script src='r.js'></script>
 </head>

<body>


<?php
$filename=$_GET['s'];
include 'Gitdown.php';
$markdown = file_get_contents($filename.'.md');
$html = Gitdown::pretty($markdown);
echo $html;
?>

  </body>
  </html>