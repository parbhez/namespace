<?php


require 'apple.php';
require 'orange.php';
require 'banana.php';

	use dhaka\orange\fruit;
	use dhaka\banana\fruit as banana;
	use dhaka\apple\fruit as apple;

	$obj1 = new fruit();
	$obj2 = new banana();
	$obj3 = new apple();
	echo $obj1->name;
	echo "\n";
	echo $obj2->name;
	echo "\n";
	echo $obj3->name;