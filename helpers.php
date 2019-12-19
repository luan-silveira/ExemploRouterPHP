<?php

function env($name, $default = null)
{
	if (!$_ENV){
		$_ENV = parse_ini_file(".env");
	}
	return isset($_ENV[$name]) ? $_ENV[$name] : $default;
}

function dump($obj)
{
	header('Content-Type: text/html');
	var_dump($obj);
	exit();
}