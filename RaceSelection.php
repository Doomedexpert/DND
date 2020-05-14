 <?php
require "./db.php";
require "./libs/crch.php";
?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>IgroteyRPGame | Создание персонажа | Выбор расы</title>
  <link rel="stylesheet" href="./css/Main.css">
  <link rel="stylesheet" href="./css/font-famaly-p.css">
  <link rel="stylesheet" href="./css/ImgRaces.css">
</head>
<body>
	<!-- Главый контйнер который держит это всё -->
	<div class="mainMAINBORDER">

   <div class="BgRamka" style="margin-left: 100px; margin-right: 100px; height: 1800px;">
   		<div class="DMainCont" style="height: 1750px;">
   			<div class="DMainCont-SB">
   				<div class="BgRamka-1">
   					<div class="Cont-1">
   					<h1 class="Text" style="font-size: 40px;">Создание персонажа</h1>
   					
 
   							
   					</div>
   				</div>	


   				<div class="BgRamka-1" style="height: 1560px;">
   					<div class="Cont-1" style="height: 1535px;">
   					<h1 class="Text" style="font-size: 40px;">Выбор расы</h1>
   					
 <div class="ContBlock-R">    
   <p class="Text" style="font-size: 30px;">Человек</p>
    <div class="imageContBlock-1R">
          <div class="ContBlock-11">
              <div class="ContBlock-12">
                     <p class="Text" style="font-size: 12px;">В большинстве миров люди — это самая молодая из распространённых рас. Они поздно вышли на мировую сцену и живут намного меньше, чем дварфы, эльфы и драконы. Возможно, именно краткость их жизней заставляет их стремиться достигнуть как можно большего в отведённый им срок. А быть может, они хотят что-то доказать старшим расам, и поэтому создают могучие империи, основанные на завоеваниях и торговле. Что бы ни двигало ими, люди всегда были инноваторами и пионерами во всех мирах. 

                     </p>
              </div>
              <div class="ContBtn">
                  <form action="BackgroundSelection.php" method="POST">
                      
                            <button class="Btn-Race" type="submit" name="do_SimpleHuman">Обычный человек</button>
                      
                      
                            <button class="Btn-Race" type="submit" name="do_VariantHuman">Вариативный человек</button>
                      
                  </form>
               </div>
          </div>
      </div>      
   </div>



    <div class="ContBlock-R">    
   <p class="Text" style="font-size: 30px;">Дварф</p>
    <div class="imageContBlock-1R">
          <div class="ContBlock-11">
              <div class="ContBlock-12">
                     <p class="Text" style="font-size: 12px;">Полные древнего величия королевства и вырезанные в толще гор чертоги, удары кирок и молотков, раздающиеся в глубоких шахтах и пылающий кузнечный горн, верность клану и традициям и пылающая ненависть к гоблинам и оркам — вот вещи, объединяющие всех дварфов. Дварфы могут жить более 400 лет, и старейшие из них часто помнят этот мир сильно отличным от нынешнего.Королевства дварфов простираются глубоко под горами, где дварфы добывают драгоценные металлы и камни и куют чудесные вещи.

                     </p>
              </div>
              <div class="ContBtn">
                  <form action="BackgroundSelection.php" method="POST">
                      
                            <button class="Btn-Race" type="submit" name="do_GornDwarf">Горный дварф</button>
                      
                      
                            <button class="Btn-Race" type="submit" name="do_HolmDwarf">Холмовой дварф</button>
                      
                  </form>
               </div>
          </div>
      </div>      
   </div>



    <div class="ContBlock-R">    
   <p class="Text" style="font-size: 30px;">Гном</p>
    <div class="imageContBlock-1R">
          <div class="ContBlock-11">
              <div class="ContBlock-12">
                     <p class="Text" style="font-size: 12px;">Гномы очень энергичны, и кажется, что каждый сантиметр их крошечного тела излучает энтузиазм и жизнелюбие. Индивидуальность гномов ярко выражается в их внешности. Гномы мужчины содержат свои бороды, в отличие от растрёпанных волос, аккуратно подстриженными, но часто расчёсывают их на несколько прядей, или придают забавную заострённую форму. По мнению гномов, жизнь — замечательная штука, и они готовы до капли осушать такой источник наслаждения в течение трёх-пяти отмеренных им веков. 
                     </p>
              </div>
              <div class="ContBtn">
                  <form action="BackgroundSelection.php" method="POST">
                      
                            <button class="Btn-Race" type="submit" name="do_LesGnome">Лесной гном</button>
                      
                      
                            <button class="Btn-Race" type="submit" name="do_SkalGnome">Скальный гном</button>
                      
                  </form>
               </div>
          </div>
      </div>      
   </div>


   <div class="ContBlock-R">    
   <p class="Text" style="font-size: 30px;">Эльф</p>
    <div class="imageContBlock-1R">
          <div class="ContBlock-11">
              <div class="ContBlock-12">
                <p class="Text" style="font-size: 12px;">Эльфы это волшебный народ, обладающий неземным изяществом, живущий в мире, но не являющийся его частью. Они живут в местах, наполненных воздушной красотой, в глубинах древних лесов или в серебряных жилищах, увенчанных сверкающими шпилями и переливающихся волшебным светом. Там лёгкие дуновения ветра разносят обрывки тихих мелодий и нежные ароматы. Эльфы любят природу и магию, музыку и поэзию, и всё прекрасное, что есть в мире.
                     </p>
              </div>
              <div class="ContBtn">
                  <form action="BackgroundSelection.php" method="POST">
                      
                            <button class="Btn-Race" type="submit" name="do_HighElf">Высший эльф</button>
                      
                      
                            <button class="Btn-Race" type="submit" name="do_LesElf">Лесной эльф</button>


                            <button class="Btn-Race" type="submit" name="do_DarkElf">Тёмный эльф</button>
                      
                  </form>
               </div>
          </div>
      </div>      
   </div>



   <div class="ContBlock-R">    
   <p class="Text" style="font-size: 30px;">Полуэльф</p>
    <div class="imageContBlock-1R">
          <div class="ContBlock-11">
              <div class="ContBlock-12">
                     <p class="Text" style="font-size: 12px;">Бродящие по двум мирам, но в действительности, не принадлежащие ни одному из них. Полуэльфы сочетают в себе, как некоторые говорят, лучшие качества обеих рас: человеческие любознательность, изобретательность и амбиции, приправленные изысканными чувствами, любовью к природе и ощущением прекрасного, свойственными эльфам. Полуэльфы не имеют собственных государств, но их радушно принимают в людских городах, и чуть менее радушно в эльфийских лесах. 
                     </p>
              </div>
              <div class="ContBtn">
                  <form action="BackgroundSelection.php" method="POST">
                      
                            <button class="Btn-Race" type="submit" name="do_HalfElf">Полуэльф</button>
                      
                  </form>
               </div>
          </div>
      </div>      
   </div>



   <div class="ContBlock-R">    
   <p class="Text" style="font-size: 30px;">Тифлинг</p>
    <div class="imageContBlock-1R">
          <div class="ContBlock-11">
              <div class="ContBlock-12">
                     <p class="Text" style="font-size: 12px;">Быть тифлингом — значит постоянно натыкаться на пристальные взгляды и перешёптывания, терпеть страдания и оскорбления, видеть страх и недоверие в глазах каждого встречного. Беда в том, что тифлинги знают причину этого — договор, заключённый много поколений назад и позволивший Асмодею — владыке Девяти Преисподних — внести вклад в их родословную. Такая внешность и природа — не их вина, а последствие древнего прегрешения, расплачиваться за которое предстоит им, их детям, и детям их детей.  
                     </p>
              </div>
              <div class="ContBtn">
                  <form action="BackgroundSelection.php" method="POST">
                      
                            <button class="Btn-Race" type="submit" name="do_Tiffling">Тифлинг</button>
                      
                  </form>
               </div>
          </div>
      </div>      
   </div>


    <div class="ContBlock-R">    
   <p class="Text" style="font-size: 30px;">Полурослик</p>
    <div class="imageContBlock-1R">
          <div class="ContBlock-11">
              <div class="ContBlock-12">
                     <p class="Text" style="font-size: 12px;">Целью большинства полуросликов является домашний уют. Место, где можно поселиться в покое и тишине, подальше от мародёрствующих чудовищ и сражающихся армий. Огонь очага, сытная пища, добрая выпивка и добрая беседа. Хотя некоторые полурослики проживают свой век в удалённых сельских общинах, другие сбиваются в постоянно кочующие общины, влекомые открытыми дорогами, широкими горизонтами и возможностью открыть чудеса новых мест и новых людей. Но даже такие кочевники любят покой, вкусную еду, свой очаг и свой дом.
                     </p>
              </div>
              <div class="ContBtn">
                  <form action="BackgroundSelection.php" method="POST">
                      
                            <button class="Btn-Race" type="submit" name="do_Halfing">Полурослик</button>
                      
                  </form>
               </div>
          </div>
      </div>      
   </div>


   <div class="ContBlock-R">    
   <p class="Text" style="font-size: 30px;">Полуорк</p>
    <div class="imageContBlock-1R">
          <div class="ContBlock-11">
              <div class="ContBlock-12">
                     <p class="Text" style="font-size: 12px;">Одноглазый бог Груумш создал орков, и даже те орки, кто отвернулся от поклонения ему, не могут полностью избежать его влияния. То же самое можно сказать и про полуорков, хотя их человеческая кровь и снижает воздействие орочьего наследия. Другие чувствуют ликование Груумша когда они вступают в бой и либо ликуют вместе с ним, либо трясутся от страха и ненависти. Полуорки по природе своей не являются злыми, но зло скрывается в них, принимают ли они его или сопротивляются ему. 
  
                     </p>
              </div>
              <div class="ContBtn">
                  <form action="BackgroundSelection.php" method="POST">
                      
                            <button class="Btn-Race" type="submit" name="do_HalfOrc">Полуорк</button>
                      
                  </form>
               </div>
          </div>
      </div>      
   </div>


   <div class="ContBlock-R">    
   <p class="Text" style="font-size: 25px;">Драконорожденный</p>
    <div class="imageContBlock-1R">
          <div class="ContBlock-11">
              <div class="ContBlock-12">
                     <p class="Text" style="font-size: 12px;">Рождённые драконами, о чём говорит их название, драконорождённые идут гордо подняв голову по миру, который встречает их со страхом и непониманием. Сформированные драконьими богами или самими драконами, драконорождённые первоначально вылупились из драконьих яиц как новая раса, сочетающая в себе лучшие качества драконов и гуманоидов. Некоторые драконорождённые являются верными слугами истинных драконов, другие образуют ряды солдат в великих войнах, а некоторые ищут свою судьбу, не найдя себе призвания. 
  
                     </p>
              </div>
              <div class="ContBtn">
                  <form action="BackgroundSelection.php" method="POST">
                      
                            <button class="Btn-Race" type="submit" name="do_DragonBorne">Драконорожденный</button>
                      
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
