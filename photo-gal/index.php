<?php require('../php-class/dynamic/lib/string_tools.php'); ?>
<?php session_start(); ?>
<?php include $_SERVER['DOCUMENT_ROOT'].'/views/parts/head.php'; ?>
<main>
<article>
<?php
	require('../lib/Parsedown.php');
	$Parsedown = new Parsedown();

	echo $Parsedown->text(file_get_contents('https://github.com/zvakanaka/php-class/raw/master/README.md'));
?>
</article>
</main>
<?php include $_SERVER['DOCUMENT_ROOT'].'/views/parts/toes.php'; ?>
