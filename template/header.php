<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="/template/style.css">
</head>
<body>
	<div id="panel">
		<div id="header">
			<div class="logo">
				<a href="/"><img src="/images/logo.png"></a>
			</div>
			<div class="menu">
				<?
					echo Lib_Menu::getInstance()->getMenu();
				?>
			</div>
		</div>
	</div>
</body>
</html>