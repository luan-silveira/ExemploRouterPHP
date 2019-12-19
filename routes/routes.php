<?php

use Routes\Router;
use Routes\Request;

Router::get('/', function(Request $request){
	require_once __DIR__ . '/../home.php';
});

Router::get('teste1', function(Request $request){
	echo 'Rota 1';
});

Router::get('teste2', function(Request $request){
	echo 'Rota 2';
});

Router::get('param/{param}/{param2}', function(Request $request, $param, $param2){
	echo 'Rota com 2 parametros: ' . "$param, $param2";
});