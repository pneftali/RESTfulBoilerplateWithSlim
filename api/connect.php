<?php
	
	$ini = parse_ini_file('config.ini');

	$mysqli = new mysqli(
		$ini['host'],
		$ini['user'],
		$ini['pass'],
		$ini['db']
		);

	if(mysqli_connect_errno()){
		printf( "Database connection error: %s\n", mysqli_connect_error() );
		exit;
	} else{
		echo 'grats!';
	}
?>