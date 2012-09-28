<?php

	require 'connect.php';
	require 'Slim/Slim.php';	
	\Slim\Slim::registerAutoloader();

	$app = new \Slim\Slim();


	$app->get('/:name', function ($name) {
	    echo "Hello, $name";
	});

	$app->run();

?>