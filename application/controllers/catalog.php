<?php 
 class Application_Controllers_Catalog extends Lib_BaseController
 {
 	function index()
 	{
 		$model = new Application_Models_Catalog;
 		foreach ($_GET as $key => $value) {
 		}
 		if (! $_GET['category'])
 		{
 			$items = $model->getList();
 		}
 		else
 		{
 			$items = $model->getList($_GET['category']);
 		}
 		if ($_GET['id'])
 		{
			$is_info_item = $_GET['id'];
			$items = $model->getAllList($_GET['id']);
		}
 		$category = $model->getCategory();
 		$this->category = $category;
 		$this->items = $items;
 		$this->is_info_item = $is_info_item;
 	}
 }

 ?>