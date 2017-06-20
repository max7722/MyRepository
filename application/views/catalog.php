<h1>Каталог</h1>



		<?
		$textForEcho = '<div id="catalog_category
			"><table align="left" width="100px" cols="1">';
		foreach ($category as $value) 
		{
			$textForEcho .= '<tr><td><a href=/catalog?category=' . $value['id'] . '>'. 
				$value['name'] .'</a></td></tr>';

		}
		$textForEcho .= '</table></div>';
		echo $textForEcho;
		?>


<?
if (! $is_info_item)
{
	$textForEcho = '<div id="catalog_items"><table width="750" border="1"><tr><th width="550px">
		Наименование</th><th width="100px">Цена</th><th width="100px">Действия</th></tr>';
	foreach($items as $item)
			{
				
				$textForEcho .= '<tr><td><a href="/catalog?id='. $item['id'] 
					.'">'. $item['name'] .'</a></td><td>'. $item['price'].
					'</td><td>В корзину</td></tr>';
			}
	$textForEcho .= '</table></div>';
	echo $textForEcho;
}
else
{
/*	$path_to_photo = '/images/' . $items[0]['id'] . '.jpg';
	echo $path_to_photo . ' ';
	if (is_readable($path_to_photo))
	{
		$img = $items[0]['id'];
	}
	else
	{
		$img = 'Default';
	}
	echo $img; */
	$textForEcho = '<div id="catalog_items"><div id="logo"><img width="150" height="150" 
		src="/images/' . $items[0]['id'] . '.jpg"></div><div id="name_item">' . $items[0]['name'] . '</div>
		<div id="price_item">' . $items[0]['price'] . ' руб.</div><div id="info_item">' . $items[0]['info'] . '</div>
		<div id="basket_item">В корзину</div>';

	$textForEcho .= '</div>';
	echo $textForEcho;
}
?>