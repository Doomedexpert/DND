 <?php
require "./db.php";
require "./libs/crch.php";
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>IgroteyRPGame | Создание персонажа | Выбор класса</title>
  <link rel="stylesheet" href="./css/Main.css">
  <link rel="stylesheet" href="./css/font-famaly-p.css">
  <link rel="stylesheet" href="./css/ImgClasses.css">
</head>
<body>
	<!-- Главый контйнер который держит это всё -->
	<div class="mainMAINBORDER">

   <div class="BgRamka" style="margin-left: 100px; margin-right: 100px; height: 1500px;">
   		<div class="DMainCont">
   			<div class="DMainCont-SB">
   				<div class="BgRamka-1">
   					<div class="Cont-1">
   					<h1 class="Text" style="font-size: 40px;">Создание персонажа</h1>
   					
 
   							
   					</div>
   				</div>	


   				<div class="BgRamka-1" style="height: 1250px;">
   					<div class="Cont-1" style="height: 1225px;">


<?php

echo $_SESSION['CLASS'];
echo $_SESSION['CLASSID'];
echo $_SESSION['RACE'];
echo $_SESSION['RACEID'];
$class = $_SESSION['CLASS'];
$op=rand(1,10);
echo $op;

 ?>
   				
<div>
         <div class="BlockName" style="height: 100%">
                <div class="BlockCont" style="height: 75px;">

                  <form action="login.php" method="POST">
                       <input placeholder="Введите имя персонажа" class="InputTextBox-CrCr" type="text" name="NameCaracter" autocomplete="off" style="margin-top: 20px; margin-bottom: 20px; width: 278px; text-align: center;">
                  </form>
  
                  
                </div>

                <div class="BlockCont" style="height: 75px; margin-top: 10px;">
                  <form action="login.php" method="POST">
                       <input placeholder="Введите имя игрока" class="InputTextBox-CrCr" type="text" name="NamePlayer" autocomplete="off" style="margin-top: 20px; margin-bottom: 20px; width: 278px; text-align: center;">
                  </form>
                  
                </div>

                <div class="BlockCont" style="height: 75px; margin-top: 10px;">
                  <form action="login.php" method="POST">
                       <input placeholder="Класс" readonly class="InputTextBox-CrCr" type="text" name="NameClass" autocomplete="off" style="margin-top: 20px; margin-bottom: 20px; width: 278px; text-align: center;" value="<?php echo $_SESSION['CLASS'] ?>">
                  </form>
                  
                </div>
                 <div class="BlockCont" style="height: 75px; margin-top: 10px;">
                  <form action="login.php" method="POST">
                       <input placeholder="Раса" readonly class="InputTextBox-CrCr" type="text" name="NameRace" autocomplete="off" style="margin-top: 20px; margin-bottom: 20px; width: 278px; text-align: center;" value="<?php echo $_SESSION['RACE'] ?>">
                  </form>
                  
                </div>
                 <div class="BlockCont" style="height: 75px; margin-top: 10px;">
                 
                   
                 <?php
                 if ($class=="Воин") : ?>
                  <form  action="login.php" method="POST">
                    <select  style="margin-top: 20px; margin-bottom: 20px; text-align: center;" class="InputTextBox-CrCr" id="Pred" name="Pred">
                    <option value="VNone">Выберите предысторию</option>
                    <option  style="color: green;" value="Soldier">Солдат</option>
                    <option value="Artist">Артист</option>
                    <option value="Bezprizornik">Беспризорник</option>
                    <option style="color: green;" value="Blag">Благородный</option>
                    <option value="GildRemesl">Гильд. ремесленик</option>
                    <option style="color: green;" value="More">Моряк</option>
                    <option style="color: green;" value="NarodHero">Народный герой</option>
                    <option value="Mudrez">Мудрец</option>
                    <option value="Otshelnik">Отшельник</option>
                    <option value="Prestupnik">Преступник</option>
                    <option value="Prislug">Прислужник</option>
                    <option value="Chuzezemez">Чужеземец</option>
                    <option value="Sharlatan">Шарлатан</option>
                </select>
                  </form>
                  <?php endif; ?>

                 
                   <?php
                 if ($class=="Следопыт") : ?>
                   <form  action="login.php" method="POST">
                    <select  style="margin-top: 20px; margin-bottom: 20px; text-align: center;" class="InputTextBox-CrCr" id="Pred" name="Pred">
                    <option value="VNone">Выберите предысторию</option>
                    <option value="Soldier">Солдат</option>
                    <option value="Artist">Артист</option>
                    <option value="Bezprizornik">Беспризорник</option>
                    <option style="color: green;" value="Blag">Благородный</option>
                    <option value="GildRemesl">Гильд. ремесленик</option>
                    <option value="More">Моряк</option>
                    <option value="NarodHero">Народный герой</option>
                    <option value="Mudrez">Мудрец</option>
                    <option style="color: green;" value="Otshelnik">Отшельник</option>
                    <option value="Prestupnik">Преступник</option>
                    <option value="Prislug">Прислужник</option>
                    <option style="color: green;" value="Chuzezemez">Чужеземец</option>
                    <option value="Sharlatan">Шарлатан</option>
                </select>
                  
                  <?php endif; ?>

                   <?php
                 if ($class=="Волшебник") : ?>
                   <form  action="login.php" method="POST">
                    <select  style="margin-top: 20px; margin-bottom: 20px; text-align: center;" class="InputTextBox-CrCr" id="Pred" name="Pred">
                    <option value="VNone">Выберите предысторию</option>
                    <option value="Soldier">Солдат</option>
                    <option value="Artist">Артист</option>
                    <option value="Bezprizornik">Беспризорник</option>
                    <option style="color: green;" value="Blag">Благородный</option>
                    <option style="color: green;" value="GildRemesl">Гильд. ремесленик</option>
                    <option value="More">Моряк</option>
                    <option style="color: green;" value="NarodHero">Народный герой</option>
                    <option style="color: green;" value="Mudrez">Мудрец</option>
                    <option style="color: green;" value="Otshelnik">Отшельник</option>
                    <option value="Prestupnik">Преступник</option>
                    <option value="Prislug">Прислужник</option>
                    <option value="Chuzezemez">Чужеземец</option>
                    <option style="color: green;" value="Sharlatan">Шарлатан</option>
                </select>
                  
                  <?php endif; ?>

                   <?php
                 if ($class=="Колдун") : ?>
                   <form  action="login.php" method="POST">
                    <select  style="margin-top: 20px; margin-bottom: 20px; text-align: center;" class="InputTextBox-CrCr" id="Pred" name="Pred">
                    <option value="VNone">Выберите предысторию</option>
                    <option value="Soldier">Солдат</option>
                    <option value="Artist">Артист</option>
                    <option value="Bezprizornik">Беспризорник</option>
                    <option value="Blag">Благородный</option>
                    <option  value="GildRemesl">Гильд. ремесленик</option>
                    <option value="More">Моряк</option>
                    <option value="NarodHero">Народный герой</option>
                    <option  value="Mudrez">Мудрец</option>
                    <option style="color: green;"  value="Otshelnik">Отшельник</option>
                    <option style="color: green;" value="Prestupnik">Преступник</option>
                    <option style="color: green;" value="Prislug">Прислужник</option>
                    <option style="color: green;" value="Chuzezemez">Чужеземец</option>
                    <option value="Sharlatan">Шарлатан</option>
                </select>
                  
                  <?php endif; ?>

                   <?php
                 if ($class=="Чародей") : ?>
                   <form  action="login.php" method="POST">
                    <select style="margin-top: 20px; margin-bottom: 20px; text-align: center;" class="InputTextBox-CrCr" id="Pred" name="Pred">
                    <option value="VNone">Выберите предысторию</option>
                    <option value="Soldier">Солдат</option>
                    <option value="Artist">Артист</option>
                    <option style="color: green;" value="Bezprizornik">Беспризорник</option>
                    <option style="color: green;" value="Blag">Благородный</option>
                    <option value="GildRemesl">Гильд. ремесленик</option>
                    <option value="More">Моряк</option>
                    <option value="NarodHero">Народный герой</option>
                    <option style="color: green;" value="Mudrez">Мудрец</option>
                    <option value="Otshelnik">Отшельник</option>
                    <option value="Prestupnik">Преступник</option>
                    <option style="color: green;" value="Prislug">Прислужник</option>
                    <option style="color: green;" value="Chuzezemez">Чужеземец</option>
                    <option value="Sharlatan">Шарлатан</option>
                </select>
                  
                  <?php endif; ?>

                   <?php
                 if ($class=="Плут") : ?>
                   <form  action="login.php" method="POST">
                    <select style="margin-top: 20px; margin-bottom: 20px; text-align: center;" class="InputTextBox-CrCr" id="Pred" name="Pred">
                    <option value="VNone">Выберите предысторию</option>
                    <option value="Soldier">Солдат</option>
                    <option value="Artist">Артист</option>
                    <option style="color: green;" value="Bezprizornik">Беспризорник</option>
                    <option value="Blag">Благородный</option>
                    <option value="GildRemesl">Гильд. ремесленик</option>
                    <option value="More">Моряк</option>
                    <option value="NarodHero">Народный герой</option>
                    <option value="Mudrez">Мудрец</option>
                    <option value="Otshelnik">Отшельник</option>
                    <option value="Prestupnik">Преступник</option>
                    <option value="Prislug">Прислужник</option>
                    <option style="color: green;" value="Chuzezemez">Чужеземец</option>
                    <option style="color: green;" value="Sharlatan">Шарлатан</option>
                </select>
                  
                  <?php endif; ?>

                  <?php
                 if ($class=="Друид") : ?>
                   <form  action="login.php" method="POST">
                    <select style="margin-top: 20px; margin-bottom: 20px; text-align: center;" class="InputTextBox-CrCr" id="Pred" name="Pred">
                    <option value="VNone">Выберите предысторию</option>
                    <option value="Soldier">Солдат</option>
                    <option value="Artist">Артист</option>
                    <option value="Bezprizornik">Беспризорник</option>
                    <option value="Blag">Благородный</option>
                    <option value="GildRemesl">Гильд. ремесленик</option>
                    <option value="More">Моряк</option>
                    <option value="NarodHero">Народный герой</option>
                    <option style="color: green;" value="Mudrez">Мудрец</option>
                    <option style="color: green;" value="Otshelnik">Отшельник</option>
                    <option value="Prestupnik">Преступник</option>
                    <option value="Prislug">Прислужник</option>
                    <option style="color: green;" value="Chuzezemez">Чужеземец</option>
                    <option value="Sharlatan">Шарлатан</option>
                </select>
                  
                  <?php endif; ?>

                  <?php
                 if ($class=="Жрец") : ?>
                   <form  action="login.php" method="POST">
                    <select style="margin-top: 20px; margin-bottom: 20px; text-align: center;" class="InputTextBox-CrCr" id="Pred" name="Pred">
                    <option value="VNone">Выберите предысторию</option>
                    <option style="color: green;" value="Soldier">Солдат</option>
                    <option value="Artist">Артист</option>
                    <option value="Bezprizornik">Беспризорник</option>
                    <option value="Blag">Благородный</option>
                    <option value="GildRemesl">Гильд. ремесленик</option>
                    <option style="color: green;" value="More">Моряк</option>
                    <option style="color: green;" value="NarodHero">Народный герой</option>
                    <option style="color: green;" value="Mudrez">Мудрец</option>
                    <option style="color: green;" value="Otshelnik">Отшельник</option>
                    <option value="Prestupnik">Преступник</option>
                    <option style="color: green;" value="Prislug">Прислужник</option>
                    <option style="color: green;" value="Chuzezemez">Чужеземец</option>
                    <option value="Sharlatan">Шарлатан</option>
                </select>
                  
                  <?php endif; ?>

                  <?php
                 if ($class=="Паладин") : ?>
                   <form  action="login.php" method="POST">
                    <select style="margin-top: 20px; margin-bottom: 20px; text-align: center;" class="InputTextBox-CrCr" id="Pred" name="Pred">
                    <option value="VNone">Выберите предысторию</option>
                    <option style="color: green;" value="Soldier">Солдат</option>
                    <option value="Artist">Артист</option>
                    <option value="Bezprizornik">Беспризорник</option>
                    <option style="color: green;" value="Blag">Благородный</option>
                    <option value="GildRemesl">Гильд. ремесленик</option>
                    <option value="More">Моряк</option>
                    <option style="color: green;" value="NarodHero">Народный герой</option>
                    <option style="color: green;" value="Mudrez">Мудрец</option>
                    <option value="Otshelnik">Отшельник</option>
                    <option value="Prestupnik">Преступник</option>
                    <option value="Prislug">Прислужник</option>
                    <option value="Chuzezemez">Чужеземец</option>
                    <option value="Sharlatan">Шарлатан</option>
                </select>
                  
                  <?php endif; ?>

                  <?php
                 if ($class=="Варвар") : ?>
                   <form  action="login.php" method="POST">
                    <select style="margin-top: 20px; margin-bottom: 20px; text-align: center;" class="InputTextBox-CrCr" id="Pred" name="Pred">
                    <option value="VNone">Выберите предысторию</option>
                    <option style="color: green;" value="Soldier">Солдат</option>
                    <option value="Artist">Артист</option>
                    <option value="Bezprizornik">Беспризорник</option>
                    <option value="Blag">Благородный</option>
                    <option value="GildRemesl">Гильд. ремесленик</option>
                    <option value="More">Моряк</option>
                    <option value="NarodHero">Народный герой</option>
                    <option value="Mudrez">Мудрец</option>
                    <option style="color: green;" value="Otshelnik">Отшельник</option>
                    <option value="Prestupnik">Преступник</option>
                    <option value="Prislug">Прислужник</option>
                    <option style="color: green;" value="Chuzezemez">Чужеземец</option>
                    <option value="Sharlatan">Шарлатан</option>
                </select>
                  
                  <?php endif; ?>

                   <?php
                 if ($class=="Бард") : ?>
                   <form  action="login.php" method="POST">
                    <select style="margin-top: 20px; margin-bottom: 20px; text-align: center;" class="InputTextBox-CrCr" id="Pred" name="Pred">
                    <option value="VNone">Выберите предысторию</option>
                    <option value="Soldier">Солдат</option>
                    <option style="color: green;" value="Artist">Артист</option>
                    <option style="color: green;" value="Bezprizornik">Беспризорник</option>
                    <option value="Blag">Благородный</option>
                    <option value="GildRemesl">Гильд. ремесленик</option>
                    <option value="More">Моряк</option>
                    <option value="NarodHero">Народный герой</option>
                    <option value="Mudrez">Мудрец</option>
                    <option value="Otshelnik">Отшельник</option>
                    <option value="Prestupnik">Преступник</option>
                    <option value="Prislug">Прислужник</option>
                    <option value="Chuzezemez">Чужеземец</option>
                    <option style="color: green;" value="Sharlatan">Шарлатан</option>
                </select>
                  
                  <?php endif; ?>

                  <?php
                 if ($class=="Монах") : ?>
                   <form  action="login.php" method="POST">
                    <select style="margin-top: 20px; margin-bottom: 20px; text-align: center;" class="InputTextBox-CrCr" id="Pred" name="Pred">
                    <option value="VNone">Выберите предысторию</option>
                    <option value="Soldier">Солдат</option>
                    <option value="Artist">Артист</option>
                    <option value="Bezprizornik">Беспризорник</option>
                    <option value="Blag">Благородный</option>
                    <option value="GildRemesl">Гильд. ремесленик</option>
                    <option value="More">Моряк</option>
                    <option value="NarodHero">Народный герой</option>
                    <option style="color: green;" value="Mudrez">Мудрец</option>
                    <option style="color: green;" value="Otshelnik">Отшельник</option>
                    <option value="Prestupnik">Преступник</option>
                    <option value="Prislug">Прислужник</option>
                    <option style="color: green;" value="Chuzezemez">Чужеземец</option>
                    <option value="Sharlatan">Шарлатан</option>
                </select>
                  
                  <?php endif; ?>
                </div>
               
         </div>


          <div class="BlockHit">
              <div class="BlockCont" style="height: 75px;">
                  
              </div>
                <div style="height: 13%"> 
                
             

                  <div class="BlockCont" style="height: 75px; width: 228px; float: left; margin-top: 10px;">
                  
                  </div>

                  <div class="BlockCont" style="height: 75px; width: 100px; float: left; margin-top: 10px; margin-left: 10px;">
                  
                  </div>
                </div>
               <div class="BlockCont" style="height: 325px; margin-top: 10px;">
                  
              </div>
               
          </div>

             <div class="BlockInfo" style="height: 100%">
              <div class="BlockCont" style="height: 75px;">
                  
              </div>

              <div class="BlockCont" style="height: 175px;margin-top: 10px;" >
                <?php


                 ?>
                  
              </div>

              <div class="BlockCont" style="height: 175px;margin-top: 10px;">
                  
              </div>

              <div class="BlockCont" style="height: 175px;margin-top: 10px;">
                  
              </div>

              <div class="BlockCont" style="height: 175px;margin-top: 10px;">
                  
              </div>
               
             </div>

            
</div>
   					
 			

  
   					</div>
   				</div>			
   			</div>  		
   		</div>
   </div>
</body>
</html>
