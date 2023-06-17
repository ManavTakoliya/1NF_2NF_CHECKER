<?php

	date_default_timezone_set("asia/kolkata");

	$response = array();

	define("SERVER", "localhost");
	define("USERNAME", "root");
	define("PASSWORD","");
	define("DATABASE", "crud");
	define("METHOD","GET");

	if(METHOD == "GET")
		$input = $_REQUEST;
	else
		$input = $_POST;

	$link = mysqli_connect(SERVER,USERNAME,PASSWORD) or die("server,username,password");

	mysqli_select_db($link,DATABASE) or die("DATABASE NOT CONNECTED");

?>