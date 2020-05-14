<?php
require "./db.php";
require "./libs/crch.php";
?>



<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>IgroteyRPGame | Создание персонажа | Выбор предыстории</title>
  <link rel="stylesheet" href="./css/Main.css">
  <link rel="stylesheet" href="./css/font-famaly-p.css">
  <link rel="stylesheet" href="./css/ImgRaces.css">
</head>
<body>
	<!-- Главый контйнер который держит это всё -->
	<div class="mainMAINBORDER">

   <div class="BgRamka" style="margin-left: 100px; margin-right: 100px; height: 2300px;">
   		<div class="DMainCont" style="height: 2250px;">
   			<div class="DMainCont-SB">
   				<div class="BgRamka-1">
   					<div class="Cont-1">
   					<h1 class="Text" style="font-size: 40px;">Создание персонажа</h1>
   					
 
   							
   					</div>
   				</div>	


   				<div class="BgRamka-1" style="height: 2060px;">
   					<div class="Cont-1" style="height: 2035px;">
   					<h1 class="Text" style="font-size: 40px;">Выбор Предыстории</h1>

          

    <div class="ContBlock-R">    
   <p class="Text" style="font-size: 30px;">Артист</p>
    <div class="imageContBlock-1R">
          <div class="ContBlock-11">
              <div class="ContBlock-12">
                     <p class="Text" style="font-size: 12px;">Вам нравится выступать на публике. Вы знаете, как их развлечь, очаровать и даже воодушевить. Ваша поэзия может трогать сердца слушателей, пробуждать в них горе или радость, смех или гнев. Ваша музыка ободряет их или заставляет скорбеть. Ваши танцы захватывают, а шутки всегда смешны. Чем бы вы ни занимались, ваша жизнь тесно связана с искусством.

                     </p>
              </div>
              <div class="ContBtn">
                  <form action="Background.php" method="POST">
                      
                            <button class="Btn-Race" type="submit" name="do_Artist">Выбрать</button>
                      
                      
                          
                      
                  </form>
               </div>
          </div>
      </div>      
   </div>



    <div class="ContBlock-R">    
   <p class="Text" style="font-size: 30px;">Беспризорник</p>
    <div class="imageContBlock-1R">
          <div class="ContBlock-11">
              <div class="ContBlock-12">
                     <p class="Text" style="font-size: 12px;">Вы выросли на улице в бедности и одиночестве, лишённые родителей. Никто не присматривал и не заботился о вас, и вам пришлось научиться делать это самому. Вам приходилось постоянно бороться за еду и следить за другими неприкаянными душами, способными обокрасть вас. Вы спали на чердаках и в переулках, мокли под дождём и боролись с болезнями, не получая медицинской помощи или приюта. Вы выжили, невзирая на все трудности, и сделали это благодаря своей сноровке, силе или скорости. 

                     </p>
              </div>
              <div class="ContBtn">
                  <form action="Background.php" method="POST">
                      
                            <button class="Btn-Race" type="submit" name="do_Bespriz">Выбрать</button>
                      
                      
                           
                      
                  </form>
               </div>
          </div>
      </div>      
   </div>



    <div class="ContBlock-R">    
   <p class="Text" style="font-size: 30px;">Благородный</p>
    <div class="imageContBlock-1R">
          <div class="ContBlock-11">
              <div class="ContBlock-12">
                     <p class="Text" style="font-size: 12px;">У вас благородный титул, а ваша семья владеет землями, собирает налоги, и обладает серьёзным политическим влиянием. Вы можете быть изнеженным аристократом, незнакомым с работой и неудобствами, бывшим торговцем, только-только получившим титул, или лишённым наследства негодяем с гипертрофированным чувством собственного права. Или же вы можете быть честным, трудолюбивым землевладельцем, искренне заботящимся о тех, кто живёт и трудится на его земле, ощущая за них ответственность. 
                     </p>
              </div>
              <div class="ContBtn">
                  <form action="Background.php" method="POST">
                      
                            <button class="Btn-Race" type="submit" name="do_Blag">Выбрать</button>
                      
                      
                           
                      
                  </form>
               </div>
          </div>
      </div>      
   </div>


   <div class="ContBlock-R">    
   <p class="Text" style="font-size: 20px; margin-bottom: 35px;margin-top: 35px;" >Гильдейский ремесленник</p>
    <div class="imageContBlock-1R">
          <div class="ContBlock-11">
              <div class="ContBlock-12">
                <p class="Text" style="font-size: 12px;">Вы — член гильдии ремесленников, знаток в какой-то области, связанный с другими мастеровыми. Вы крепко стоите на ногах в этом торгашеском мире, отделённые своим талантом и богатством от оков феодального строя. Когда-то вы учились у мастера, под опекой гильдии, и вот вы сами стали таким умельцем. 
                     </p>
              </div>
              <div class="ContBtn">
                  <form action="Background.php" method="POST">
                      
                            <button class="Btn-Race" type="submit" name="do_GildRemesl">Выбрать</button>
                      
                      
                           
                      
                  </form>
               </div>
          </div>
      </div>      
   </div>



   <div class="ContBlock-R">    
   <p class="Text" style="font-size: 30px;">Моряк</p>
    <div class="imageContBlock-1R">
          <div class="ContBlock-11">
              <div class="ContBlock-12">
                     <p class="Text" style="font-size: 12px;">Вы много лет плавали на морском судне. Вы видели могучие шторма, глубоководных чудовищ и тех, кто хотел отправить вас на дно. Первая любовь осталась далеко за горизонтом, и настало время попробовать что-то новое. Решите вместе с Мастером, на каком корабле вы до этого плавали. Это было торговое, пассажирское, исследовательское или пиратское судно? Насколько оно прославилось (в хорошем или дурном смысле)? Много ли вы путешествовали? Оно всё ещё на плаву, потоплено или утеряно?   
                     </p>
              </div>
              <div class="ContBtn">
                  <form action="Background.php" method="POST">
                      
                            <button class="Btn-Race" type="submit" name="do_More">Выбрать</button>
                      
                  </form>
               </div>
          </div>
      </div>      
   </div>



   <div class="ContBlock-R">    
   <p class="Text" style="font-size: 30px;">Мудрец</p>
    <div class="imageContBlock-1R">
          <div class="ContBlock-11">
              <div class="ContBlock-12">
                     <p class="Text" style="font-size: 12px;">Вы провели много лет, постигая тайны мультивселенной. Вы читали рукописи, изучали свитки, и общались с величайшими экспертами в интересующих вас темах. Всё это сделало вас знатоком в своей области. 
                     </p>
              </div>
              <div class="ContBtn">
                  <form action="Background.php" method="POST">
                      
                            <button class="Btn-Race" type="submit" name="do_Mudrez">Выбрать</button>
                      
                  </form>
               </div>
          </div>
      </div>      
   </div>


    <div class="ContBlock-R">    
   <p class="Text" style="font-size: 20px; margin-top: 35px; margin-bottom: 35px;">Народный герой</p>
    <div class="imageContBlock-1R">
          <div class="ContBlock-11">
              <div class="ContBlock-12">
                     <p class="Text" style="font-size: 12px;">У вас было низкое социальное положение, но судьбой было уготовано большее. Жители вашей родной деревни уже считают вас своим героем, но вам предначертано сражаться с тиранами и чудовищами, угрожающими другим. 
                     </p>
              </div>
              <div class="ContBtn">
                  <form action="Background.php" method="POST">
                      
                            <button class="Btn-Race" type="submit" name="do_NarodHero">Выбрать</button>
                      
                  </form>
               </div>
          </div>
      </div>      
   </div>


   <div class="ContBlock-R">    
   <p class="Text" style="font-size: 30px;">Отшельник</p>
    <div class="imageContBlock-1R">
          <div class="ContBlock-11">
              <div class="ContBlock-12">
                     <p class="Text" style="font-size: 12px;">Вы значительную часть своей жизни прожили в уединении — либо в закрытой общине, такой как монастырь, либо вообще в одиночестве. Вдали от шумного общества вы нашли тишину, спокойствие, а возможно, и ответы на важные вопросы. 
  
                     </p>
              </div>
              <div class="ContBtn">
                  <form action="Background.php" method="POST">
                      
                            <button class="Btn-Race" type="submit" name="do_Otshelnik">Выбрать</button>
                      
                  </form>
               </div>
          </div>
      </div>      
   </div>


   <div class="ContBlock-R">    
   <p class="Text" style="font-size: 25px;">Преступник</p>
    <div class="imageContBlock-1R">
          <div class="ContBlock-11">
              <div class="ContBlock-12">
                     <p class="Text" style="font-size: 12px;">Вы опытный преступник с большим послужным списком. Вы провели много времени, вращаясь в преступных кругах, и до сих пор имеете связи с подпольным миром. В отличие от обычных людей вы близко познакомились с убийствами, воровством и жестокостью, что пропитывают низшие слои общества. Вы научились выживать, пренебрегая правилами и ограничениями, которым подчиняются другие. 
  
                     </p>
              </div>
              <div class="ContBtn">
                  <form action="Background.php" method="POST">
                      
                            <button class="Btn-Race" type="submit" name="do_Prestupnik">Выбрать</button>
                      
                  </form>
               </div>
          </div>
      </div>      
   </div>

<div class="ContBlock-R">    
   <p class="Text" style="font-size: 25px;">Прислужник</p>
    <div class="imageContBlock-1R">
          <div class="ContBlock-11">
              <div class="ContBlock-12">
                     <p class="Text" style="font-size: 12px;">Вы провели свою жизнь, служа в храме, посвящённому какому-то конкретному богу или же пантеону богов. Вы — посредник между царством небесным и миром живых. Вы совершали священные ритуалы и приносили жертвоприношения для того чтобы молящиеся могли предстать пред ликом богов. Вы не обязательно жрец — совершение священных обрядов не то же самое, что направление божественной силы. 
  
                     </p>
              </div>
              <div class="ContBtn">
                  <form action="Background.php" method="POST">
                      
                            <button class="Btn-Race" type="submit" name="do_Prisluga">Выбрать</button>
                      
                  </form>
               </div>
          </div>
      </div>      
   </div>

   

   <div class="ContBlock-R">    
   <p class="Text" style="font-size: 25px;">Солдат</p>
    <div class="imageContBlock-1R">
          <div class="ContBlock-11">
              <div class="ContBlock-12">
                     <p class="Text" style="font-size: 12px;">Сколько вы помните, в вашей жизни всегда была война. С молодости вы проходили тренировки, учились использовать оружие и доспехи, изучали технику выживания, включая то, как оставаться живым на поле боя. Вы могли быть частью армии страны или отряда наёмников, а может, были местным ополченцем во время войны. 
  
                     </p>
              </div>
              <div class="ContBtn">
                  <form action="Background.php" method="POST">
                      
                            <button class="Btn-Race" type="submit" name="do_Soldat">Выбрать</button>
                      
                  </form>
               </div>
          </div>
      </div>      
   </div>

   <div class="ContBlock-R">    
   <p class="Text" style="font-size: 25px;">Чужеземец</p>
    <div class="imageContBlock-1R">
          <div class="ContBlock-11">
              <div class="ContBlock-12">
                     <p class="Text" style="font-size: 12px;">Вы выросли в глуши, вдали от цивилизации и её благ. Вы видели миграцию стад, чей размер был больше леса, выживали при температуре, которую горожанам и не представить, и наслаждались таким уединением, что на многие мили вокруг вы были единственным мыслящим существом. Дикая природа в вашей крови, будь вы кочевником, исследователем, затворником, охотником-собирателем или даже мародёром. Даже в неизвестном месте вы найдёте что-то, что вам понятно. 
  
                     </p>
              </div>
              <div class="ContBtn">
                  <form action="Background.php" method="POST">
                      
                           <button class="Btn-Race" type="submit" name="do_Chuzezemez">Выбрать</button>
                      
                  </form>
               </div>
          </div>
      </div>      
   </div>

   <div class="ContBlock-R">    
   <p class="Text" style="font-size: 25px;">Шарлатан</p>
    <div class="imageContBlock-1R">
          <div class="ContBlock-11">
              <div class="ContBlock-12">
                     <p class="Text" style="font-size: 12px;">Вы хорошо знаете людей. Вы понимаете, что ими движет, и можете распознать их самые сокровенные желания спустя всего пару минут после начала разговора. Несколько наводящих вопросов, и вот вы уже читаете их словно книжки, написанные для детей. Это полезный талант, и вы вполне готовы использовать его себе на благо.  
  
                     </p>
              </div>
              <div class="ContBtn">
                  <form action="Background.php" method="POST">
                      
                            <button class="Btn-Race" type="submit" name="do_Sharlatan">Выбрать</button>
                      
                  </form>
               </div>
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
