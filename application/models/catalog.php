<?php 
 class Application_Models_Catalog
 {

 	function getCategory()
 	{
 		$sql = "SELECT * FROM category";
 		$result = mysql_query($sql);
 		while ($row = mysql_fetch_assoc($result))
 		{
 			$catalogCategory[] = array('name'=>$row['name'],
 				'id'=>$row['id']);
 		}
 		return $catalogCategory;
 	}


 	function getAllList($id)
 	{
 		$sql = "SELECT * FROM `product` WHERE `id`=". $id;
 		$result = mysql_query($sql);
 		$row = mysql_fetch_assoc($result);
 		$item[] = array(
 			'id'=>$row['id'],
 			'name'=>$row['name'],
 			'price'=>$row['price'],
 			'info'=>$row['inform']); 
 		return $item;
 	}


 	function getList($param=false)
 	{
 		//$param = 2;
 		//echo $param.'параметр';
 		if (! $param)
 		{
	 		$sql = "SELECT * FROM product";
	 		$result = mysql_query($sql);
	 		while ($row = mysql_fetch_assoc($result)) 
	 		{
	 			$catalogItems[] = array(
	 				'id'=>$row['id'],
	 				'name'=>$row['name'],
	 				'price'=>$row['price']);
	 		}
	 		return $catalogItems;
	 	}
	 	else
	 	{
	 		
	 		$sql = "SELECT * FROM `catprod` WHERE `id_category`=" . $param;
	 		//echo $sql;
	 		$result = mysql_query($sql);
	 		//echo $result;

	 		while ($row = mysql_fetch_assoc($result))
	 		{
	 			$sql2 = "SELECT * FROM `product` WHERE `id` = " . $row['id_product'];
	 			$result2 = mysql_query($sql2);
	 			while ($row2 = mysql_fetch_assoc($result2))
	 			{
	 				$catalogItems[] = array(
	 					'id'=>$row2['id'],
	 					'name'=>$row2['name'],
	 					'price'=>$row2['price'],
	 					'info'=>$row2['inform']);
	 			}
	 		}

	 		/*foreach ($this->getCategory() as $value) {
	 			echo $value['name'] . ' ';
	 		}*/

	 		return $catalogItems;
	 	}
 	}
 }
 ?>