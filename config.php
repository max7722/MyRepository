<?php 
Error_Reporting(E_ALL & ~E_NOTICE);
 function __autoload ($class_name)
 {
	$path = str_replace("_", "/", $class_name);
	include_once($path. ".php");
 } 

 define('NAME_DB', 'ComputerEngineeringShop');
 define('HOST', 'localhost');
 define('USER', 'root');
 define('PASSWORD', '');

 $connect = mysql_connect(HOST, USER, PASSWORD) or die("Невозможно установить соединение c базой данных".mysql_error());
 mysql_select_db(NAME_DB, $connect) or die ("Ошбка обращения к базе ".mysql_error());

 mysql_query('SET names "utf8"');
 ?>