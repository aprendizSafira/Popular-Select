<?php
require 'environment.php';

global $connect;
global $db;

$connect = array();
//VERIFICANDO: se a conecção com o banco é local ou externo.
if (ENVIRONMENT == 'development') {//quer dizer que está fazendo a conecção atravez do servidor local
	define("BASE_URL", "http://localhost/PHP-Super-Avancado/Popular-select-a-partir-de-outro/");
	$connect['dbname'] = 'popular_select';
	$connect['host']   = 'localhost';
	$connect['dbuser'] = 'root';
	$connect['dbpass'] = '';
} else {
	//Coloca as informções do servidor externo.
	define("BASE_URL", "http://meusite.com.br/");
	$connect['dbname'] = 'popular_select';
	$connect['host']   = 'localhost';
	$connect['dbuser'] = 'root';
	$connect['dbpass'] = '';
}

//Torna a conecção ao banco de dados acessivel a qualquer parte do sistema.

	$db = new PDO("mysql:dbname=".$connect['dbname'].";charset=utf8;host=".$connect['host'], $connect['dbuser'], $connect['dbpass']);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
