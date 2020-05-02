 <?php
require "./db.php";
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>IgroteyRPGame | Создание персонажа</title>
  <link rel="stylesheet" href="./css/Main.css">
  <link rel="stylesheet" href="./css/font-famaly-p.css">
  <link rel="stylesheet" href="./css/Details.css">
</head>
<body>
	<!-- Главый контйнер который держит это всё -->
	<div class="mainMAINBORDER">

   <div class="BgRamka" style="margin-left: 100px; margin-right: 100px; height: 1800px;">
   		<div class="DMainCont">
   			<div class="DMainCont-SB">
   				<div class="BgRamka-1">
   					<div class="Cont-1">
   					<h1 class="Text" style="font-size: 40px;">Создание персонажа</h1>
   					

   							
   					</div>
   				</div>	


   				<div class="BgRamka-1" style="height: 1200px;">
   					<div class="Cont-1" style="height: 1160px;">
   					<h1 class="Text" style="font-size: 40px;">Выбор класса</h1>
   					
   					<div class="ContBlock">
   						<p class="Text" style="font-size: 30px;">Воин</p>
   						<div class="ContBlock-1">
   							<p class="Text" style="font-size: 12px;">Воины владеют основами всех боевых стилей. Каждый воин может рубить топором, фехтовать рапирой, владеет длинным и двуручным мечом, может стрелять из лука и даже при некоторой сноровке способен поймать противника сетью. Помимо этого, воины хорошо знакомы с использованием щита и любых доспехов. </p>
   							<form action="CreateCharacter.php" method="POST">
   								<p class="Text">
   								<button class="Btn" type="submit" name="do_warrior">Выбрать</button>
   								</p>
   							</form>
   						</div>
   						
   					</div>
   					<div class="ContBlock">
   						<p class="Text" style="font-size: 30px;">Следопыт</p>
   						<div class="ContBlock-1">
   							<p class="Text" style="font-size: 12px;">Бойцы диких земель, следопыты, специализируются на охоте на монстров, таких как неистовствующие звери, чудовищные создания, ужасающие великаны и смертоносные драконы, угрожающих нападением на цивилизованные земли гуманоидов. Они умеют выслеживать добычу подобно
хищнику, скрытно передвигаясь через дебри, прячась среди кустов и камней.
 </p>
   							<form action="CreateCharacter.php" method="POST">
   								<p class="Text">
   								<button class="Btn" type="submit" name="do_ranger">Выбрать</button>
   								</p>
   							</form>
   						</div>
   					</div>
   					<div class="ContBlock">
   						<p class="Text" style="font-size: 30px;">Волшебник</p>
   					</div>
   					<div class="ContBlock">
   						<p class="Text" style="font-size: 30px;">Колдун</p>
   					</div>
   					<div class="ContBlock">
   						<p class="Text" style="font-size: 30px;">Чародей</p>
   					</div>
   					<div class="ContBlock">
   						<p class="Text" style="font-size: 30px;">Плут</p>
   					</div>
   					<div class="ContBlock">
   						<p class="Text" style="font-size: 30px;">Друид</p>
   					</div>
   					<div class="ContBlock">
   						<p class="Text" style="font-size: 30px;">Жрец</p>
   					</div>
   					<div class="ContBlock">
   						<p class="Text" style="font-size: 30px;">Паладин</p>
   					</div>
   					<div class="ContBlock">
   						<p class="Text" style="font-size: 30px;">Варвар</p>
   					</div>
   					<div class="ContBlock">
   						<p class="Text" style="font-size: 30px;">Бард</p>
   					</div>
   					<div class="ContBlock">
   						<p class="Text" style="font-size: 30px;">Монах</p>
   					</div>
   							
   					</div>
   				</div>			
   			</div>  		
   		</div>
   </div>
</body>
</html>
