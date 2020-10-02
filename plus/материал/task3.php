<!-- 1. в первом диве уже создан ассоциативный массив внутри массива. Задача вывести второй спел на сайт
-->

<!-- 2. Добавить еще три спела и вывести на сайт-->

<!-- 3. Вывести все заклинания циклом в тегах P -->

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

	<div>
	<?php 
		$spell = [["name" => "fireball", "dmg" => 200],["name" => "freez", "dmg" => 20]];
		
			
	?>
	</div>

	<div style="margin-top: 100px; margin-left: 100px">
		<?php 
			echo $spell[0]["name"] . ' ' . $spell[0]["dmg"];

		 ?>
	</div>
</body>
</html>