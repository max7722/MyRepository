<h1>Каталог</h1>
<?

foreach($items as $item)
		{
			if($i%3==0)echo '<div style="clear:both;"></div>';
			echo '<div class="product">
				<div class="product_image">
					<image src="/images/'.$item["id"].'.jpg" width=100px/>
				</div>
				<h2>
				'.$item["name"].'
				</h2>
				<div class="product_price">
				'.$item["price"].' руб.
				</div>
				<div class="product_buy">
				<a href="/">В корзину</a>
				</div>
			</div>';
			$i++;
		}
?>