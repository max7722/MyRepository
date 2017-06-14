<?php 
class Lib_Router 
{
	private function getRoute()
	{
		if (empty($_GET['route']))
		{
			$route = 'index';
		}
		else
		{
			$route = $_GET['route'];
		}
		return $route;
	}


	private function getController()
	{
		$route = $this->getRoute();
		$path_controller = 'application/controllers/';
		$controller = $path_controller. $route . '.php';
		return $controller;
	}

	public function getView()
	{
		$route = $this->getRoute();
		$path_view = 'application/views/';
		$view = $path_view . $route . '.php';
		return $view;
	}

	public function Run()
	{
		session_start();//открывает сессию
		$controller = $this->getController();
		$path_only = explode('.', $controller);
		$path_only = $path_only[0];//путь без расширения
		$name_controller = str_replace('/', '_', $path_only);
		$controller = new $name_controller;
		$controller->index();
		$member = $controller->member;
		return $member;
	}



}
 ?>
