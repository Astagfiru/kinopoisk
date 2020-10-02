<!-- 1. Заполните пустые поля, чтобы на сайте вышла первая картинка
-->

<!-- 2. Вывести все картинки на сайт с разными размерами -->

<!-- 3. Вывести все картинки на сайт циклом -->

<!-- 4. Вместо двух массивов, создайте ассоциативный массив внутри массива-->

<!-- 5. Добавьте новый ключ чтобы задавать класс картинкам, например задать разноцветные border-->
<
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
		$avatars = ["avatars/1.png","avatars/2.png","avatars/3.png","avatars/4.png"];
		$size = ["100px","150px","200px","250px"];		
	
	?>
	</div>

	<div style="margin-top: 100px; margin-left: 100px">
		<?php 
	
			echo "<img src='" . /*пропуск*/ . "' style='width:" . /*пропуск*/ . "'>";	
			
		 ?>
	</div>
</body>
</html>