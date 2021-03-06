 <?php
require "./db.php";
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>IgroteyRPGame</title>
  <link rel="stylesheet" href="./css/Main.css">
  <link rel="stylesheet" href="./css/font-famaly-p.css">
  <link rel="stylesheet" href="./css/Details.css">
</head>
<body>

	<!-- Главый контйнер который держит это всё -->
	<div class="mainMAINBORDER">
<div class="Header">
        <img style="margin-top: 5px; float: left;" src="./img/Igrotey.jpg">   
         <p class="Text" style="font-size: 40px;float: left; ;">IgroteRPGame</p>   
</div>
   
  

		<!-- Каменная рамка -->
<div class="BgRamka" style=" width: 240px; height: 776px; float: left;">
	<!-- Левая панель управления с кнопками навигации -->
	<div class="leftConteiner">


		<!-- Очень нужная таблица-контейнер для левой панели -->
<?php if (isset($_SESSION['logged_user'])) : ?>
		<a href="./myGames.html">
			<div class="Buttonleft" style="line-height: 100px;"> 
    		    <div class="leftContU" style="width: 170px;height: 75px;">
    				<img style="width: 150px;" src="./img/MyGames.png" alt="Мои игры">
    			</div>
  			 </div>
  		 </a>
 
  <!-- Кнопка Создать игру -->
  <a href="./createGame.html">
 			<div class="Buttonleft" style="line-height: 95px;"> 
  				<div class="leftContU" style="width: 170px;height: 75px;">
    				<img style="width: 150px;" src="./img/CreateGames.png" alt="Создать игру">
    			</div>
    		</div>
    </a>
  <!-- Кнопка Мои персонажи -->
			<div class="Buttonleft" style="line-height: 95px;"> 
 				<div class="leftContU" style="width: 170px;height: 75px;">
    				<img style="width: 150px;" src="./img/MyPers.png" alt="Создать игру">
    			</div>
    		</div>
  <!-- Кнопка Создать персонажа -->
  			<div class="Buttonleft" style="line-height: 85px;"> 
  				<div class="leftContU" style="width: 170px;height: 75px;">
    				<img style="width: 150px;" src="./img/CreatePers.png" alt="Создать игру">
    			</div>
    		</div>


        <!-- Кнопка Мой Профиль -->
        <div class="Buttonleft" style="margin-top: 140px;"> 
          <div class="leftContU" style="width: 170px;height: 75px;">
            <img style="width: 150px;  margin-top: 20px;" src="./img/Profile.png" alt="Профиль">
          </div>
        </div>

    <a href="./logout.php">
        <div class="Buttonleft"> 
          <div class="leftContU" style="width: 170px;height: 75px;">
            <img style="width: 150px;  margin-top: 20px;" src="./img/Exit.png" alt="Выйти">
          </div>
        </div>
    </a>

<?php
else : ?>
        <!-- Регистрация -->
      <a href="./singup.php">
        <div class="Buttonleft" style="line-height: 85px;"> 
          <div class="leftContU" style="width: 170px;height: 75px;">
            <img style="width: 150px;" src="./img/Reg.png" alt="Регистрация">
          </div>
        </div>
      </a>

         <!-- Авторизация -->
      <a href="./login.php">
        <div class="Buttonleft" style="line-height: 85px;"> 
          <div class="leftContU" style="width: 170px;height: 75px;">
            <img style="width: 150px;" src="./img/Auto.png" alt="Авторизация">
          </div>
        </div>
      </a>
  <?php endif; ?>

  
	</div>
</div>
<!-- Каменная рамка -->
<div class="BgRamka" style="width: 1190px; height: 230px; float: left;">
	<!-- Верхний контейнер -->
	<div class="topConteiner">
		<table class="TableTop">
			<tr>
				<td>
	<a href="https://dnd.wizards.com/" target="_blank">
    	<img style="width: 350px;" src="./img/DungeonsAndDragons.png" alt="Подземелья и Драконы">
    	</a>
		<p style="font-size: 18px;">Играя в D&D, вы берёте на себя роль искателя приключений: опытного воина, набожного жреца, коварного плута или волшебника, творящего заклинания. При помощи друзей и воображения вы способны отправиться навстречу приключениям, испытать себя в столкновении с опасностями и кровожадными чудовищами.</p>
		       </td>
		    </tr>
		</table>
	</div>
</div>

<!-- Всё та же каменная рамка.... -->
<div class="BgRamka" style="width: 1190px; height: 480px; float: left;">
	<!-- Центральный контейнер для информации(может показывыть персов) -->
	<div class="centerConteiner">
        
  <!-- Первый контейнер для фото -->
   <div class="PhotoCenterConteiner" style="margin-top: 20px; margin-bottom: 10px; margin-left: 50px; margin-right: 10px;" >
   	<div class="PhotoConteiner">
   		<script type="text/javascript">
    var images = new Array();
    var i = 0;
     
    images[0] = './img/Human.png';
    images[1] = './img/Tiffling.png';
    images[2] = './img/Halfing.png';
    images[3] = './img/Gnom.png';
    images[4] = './img/Orc.png';
    images[5] = './img/Dragonborn.png';
    images[6] = './img/Dwarf.png';
     
    function viewImages() {
        document.getElementById("img_main").src = images[i]; 
        i++;
        if (i == images.length) {
            i = 0;
        }
        setTimeout("viewImages()",5000);
    }   
</script>
   		<img src="" id="img_main">
   		<script> viewImages(); </script>
   	</div>
   </div>
    <!-- Второй контейнер для фото -->
   <div class="PhotoCenterConteiner" style="margin-top: 20px; margin-bottom: 10px; margin-left: 10px; margin-right: 10px;" >
   	<div class="PhotoConteiner">
   		<script type="text/javascript">
    var images1 = new Array();
    var a = 0;
     
    images1[0] = './img/Warrior.png';
    images1[1] = './img/Wizzard.png';
    images1[2] = './img/Bard.png';
    images1[3] = './img/Barbarian.png';
    images1[4] = './img/Druid.png';
    images1[5] = './img/Prist.png';
    images1[6] = './img/Warlock.png';
    images1[7] = './img/Monk.png';
    images1[8] = './img/Paladin.png';
    images1[9] = './img/Plut.png';
    images1[10] = './img/Sledopit.png';
    images1[11] = './img/Char.png';
     
    function viewImages1() {
        document.getElementById("img_main1").src = images1[a]; 
        a++;
        if (a == images1.length) {
            a = 0;
        }
        setTimeout("viewImages1()",5000);
    }   
</script>
   		<img src="" id="img_main1">
   		<script> viewImages1(); </script>
   	</div>
   </div>
    <!-- Третий контейнер для фото -->
   <div class="PhotoCenterConteiner" style="margin-top: 20px; margin-bottom: 10px; margin-left: 10px; margin-right: 10px;">
   	<div class="PhotoConteiner">
   		<script type="text/javascript">
    var images2 = new Array();
    var b = 0;
     
    images2[0] = './img/ForgottenRealms.png';
    images2[1] = './img/Eberron.png';
    images2[2] = './img/Planescape.png';
    images2[3] = './img/Ravenloft.png';
    images2[4] = './img/DarkSun.png';
     
    function viewImages2() {
        document.getElementById("img_main2").src = images2[b]; 
        b++;
        if (b == images2.length) {
            b = 0;
        }
        setTimeout("viewImages2()",5000);
    }   
</script>
   		<img src="" id="img_main2">
   		<script> viewImages2(); </script>
   	</div>
   </div>
    <!-- Четвертый контейнер для фото -->
   <div class="PhotoCenterConteiner" style="margin-top: 20px; margin-bottom: 10px; margin-left: 10px; margin-right: 50px;" >
   	<div class="PhotoConteiner">
   		<script type="text/javascript">
    var images3 = new Array();
    var v = 0;
     
    images3[0] = './img/Master1.png';
    images3[1] = './img/Master2.png';
    images3[2] = './img/Master3.png';
    images3[3] = './img/Master4.png';
    images3[4] = './img/Master5.png';
    images3[5] = './img/Master6.png';
   
     
    function viewImages3() {
        document.getElementById("img_main3").src = images3[v]; 
        v++;
        if (v == images3.length) {
            v = 0;
        }
        setTimeout("viewImages3()",5000);
    }   
</script>
   		<img src="" id="img_main3">
   		<script> viewImages3(); </script>
   	</div>
   </div>
<div class="TextUnderPhotoCenterConteiner" style="margin-bottom: 10px; margin-left: 50px; margin-right: 10px;">
	<a href="./Races.php">
    <div class="TextUnderPhotoCenter"> 
      <div class="TextShadowBox" style="line-height: 110px;">
        <img style="width: 120px; " src="./img/Race.png" alt="Расы">
      </div>                
    </div>
  </a>
</div>
<div class="TextUnderPhotoCenterConteiner" style="margin-bottom: 10px; margin-left: 10px; margin-right: 10px;">
	<a href="./classes.html">
		<div class="TextUnderPhotoCenter"> 
			<div class="TextShadowBox" style="line-height: 100px;">
				<img style="width: 150px;" src="./img/Class.png" alt="Класы">
			</div>
		</div>
	</a>
</div>
<div class="TextUnderPhotoCenterConteiner" style="margin-bottom: 10px; margin-left: 10px; margin-right: 10px;">
	<a href="./setting.html">
		<div class="TextUnderPhotoCenter"> 
			<div class="TextShadowBox" style="line-height: 100px;">
				<img style="width: 180px;" src="./img/Setting.png" alt="Сэттинг">
			
			</div>
	</a>
	</div>
</div>
<div class="TextUnderPhotoCenterConteiner" style="margin-bottom: 10px; margin-left: 10px; margin-right: 50px;">
	<a href="./game.html">
		<div class="TextUnderPhotoCenter"> 
			<div class="TextShadowBox" style="line-height: 125px;">
				<img style="width: 110px;" src="./img/Game.png" alt="Игра">
			
		</div>
	</div>
</a>
</div >

  
		
	</div>
</div>

</div>
</body>
</html>
