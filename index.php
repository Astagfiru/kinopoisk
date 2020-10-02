<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Кинопоиск</title>
    <style type="text/css">
    	body {
    		background-color: #e6e6e6
    	}
    	.main {
    		background-color: white;
    		
    		margin-top: 50px;
    	}
    	.main h3 {
    		color: #f60;;
    	}
    </style>	
  </head>
  <body>
    <div class="" style="height: 100px; background-color: #444444">
    	<div class="container">
    		<div class="row">
	    		<div class="col-2">
	    			<img src="img\logo.png" class="w-100">
	    		</div>
	    		<div class="col-6 pt-4">
	    			<input type="" name="" placeholder="поиск на сайте" class="w-100">
	    		</div>
	    		<div class="col-4 pt-4 text-right" style="color: #c7c7c7">
	    			<h3>Войти</h3>
	    		</div>
    		</div>
    	</div>
    	<div class="col-6 mx-auto shadow-lg main px-0">
    		<h3 class="text-center bg-success p-2">5 лучших фильмов</h3>
    		
    		<div class="text-center"> <!-- Див для списка фильмов -->
                <?php
                    $id = [1, 2, 3, 4, 5];
                    $name = ["Pulp Fiction", "Shrek 3", "Terminator", "MIB", "Fast and Furious"];
                    $img = ["img/1.jpg", "img/2.jpg", "img/3.jpg", "img/4.jpg", "img/5.jpg"];
                    $rev = ["Двое бандитов Винсент Вега и Джулс Винфилд ведут философские беседы в перерывах между разборками и решением проблем с должниками криминального босса Марселласа Уоллеса. В первой истории Винсент проводит незабываемый вечер с женой Марселласа Мией. Во второй рассказывается о боксёре Бутче Кулидже, купленном Уоллесом, чтобы сдать бой. В третьей истории Винсент и Джулс по нелепой случайности попадают в неприятности.", "Король Гарольд внезапно умер, и теперь великан Шрек вынужден стать королем Далекой-Далекой страны. Шрек уважает семейные традиции своей жены Фионы, но править страной очень не хочет, и поэтому и отправляется с Ослом и Котом в сапогах на поиски нового короля. Но пока Шрек ищет короля Артура - другого наследника, принц Чарминг замышляет новые пакости.", "История противостояния солдата Кайла Риза и киборга-терминатора, прибывших в 1984-й год из пост-апокалиптического будущего, где миром правят машины-убийцы, а человечество находится на грани вымирания. Цель киборга: убить девушку по имени Сара Коннор, чей ещё нерождённый сын к 2029 году выиграет войну человечества с машинами. Цель Риза: спасти Сару и остановить Терминатора любой ценой.", "Они - самый большой секрет Земли. Они работают на неофициальное правительственное агентство, регулирующее деятельность инопланетян на Земле. Они - это лучшая, последняя и единственная линия защиты Земли от отбросов вселенной. Их работа секретна, их оружие совершенно, им нет равных, они не оставляют следов. Они - это Люди в черном.", "Его зовут Брайан, и он - фанатик турбин и нитроускорителей. Он пытается попасть в автобанду легендарного Доминика Торетто, чемпиона опасных и незаконных уличных гонок. Брайан также полицейский, и его задание - втереться в доверие к Торетто, подозреваемому в причастности к дерзким грабежам грузовиков, совершенным прямо на ходу."];
                    for ($i=0; $i < 5; $i++) {
                        echo "<h1>" . $id[$i] . ". " . $name[$i] . "</h1>";
                        echo "<img style='width: 500px;' src='" . $img[$i] . "'>";
                        echo "<p>" . $rev[$i] . "</p>";
                    }
                ?>
    		</div>
    	</div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
