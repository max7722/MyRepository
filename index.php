<?php 

//error_reporting(E_ALL);


require_once './config.php';
//создает обьект который будет искать нужные контроллеры
$router = new Lib_Router;
//поиск нужного контроллера
$member = $router->Run();
$member['init'] = 0;
foreach ($member as $key => $value) 
{
	$$key = $value;
}

include_once './template/header.php';
include($router->getView());
include_once '/template/footer.php';


 ?>