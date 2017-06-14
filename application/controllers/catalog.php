<?php 
 class Application_Controllers_Catalog extends Lib_BaseController
 {
 	function index()
 	{
 		$model = new Application_Models_Catalog;
 		$items = $model->getList();
 		$this->items = $items;
 	}
 }

 ?>