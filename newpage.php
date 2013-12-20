<?php
	include 'pageclass.php';

	$webPage = new Page('As Easy as it Gets', date('Y'), 'Easy Systems. Inc.');
	$webPage->addContent("<p align=\"center\">It's so easy to use!</p>\n");

	echo $webPage->get();
?>
