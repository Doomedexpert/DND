 <?php
require "./db.php";
require "./libs/crch.php";
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
   					
 <script>
    // Здесь не важно, как мы скрываем текст.
    // Также можно использовать style.display:
    document.getElementById('hider').onclick = function() {
      document.getElementById('text').hidden = true;
    }
  </script>
   							
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
   							<p class="Text" style="font-size: 12px;">Бойцы диких земель, следопыты, специализируются на охоте на монстров, таких как неистовствующие звери, чудовищные создания, ужасающие великаны и смертоносные драконы, угрожающих нападением на цивилизованные земли гуманоидов. Они умеют выслеживать добычу подобно хищнику, скрытно передвигаясь через дебри, прячась среди кустов и камней.
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
   						<div class="ContBlock-1">
   							<p class="Text" style="font-size: 12px;">Дикая и загадочная, разнообразная по форме и функциям, магия привлекает учеников, которые стремятся достичь мастерства в её тайнах. Некоторые хотят уподобиться богам, изменять саму реальность. И хотя для сотворения обычного заклинания требуется лишь произношение нескольких странных слов, совершение пары мимолётных жестов, а иногда щепотка или комок экзотических материалов.
                          </p>
   							<form action="CreateCharacter.php" method="POST">
   								<p class="Text">
   								<button class="Btn" type="submit" name="do_wizzard">Выбрать</button>
   								</p>
   							</form>
   						</div>
   					</div>
   					<div class="ContBlock">
   						<p class="Text" style="font-size: 30px;">Колдун</p>
   						<div class="ContBlock-1">
   							<p class="Text" style="font-size: 12px;">Колдун заключает договор с потусторонней сущностью. Иногда отношения между колдуном и его покровителем похожи на отношения жреца и его божества, но сущности, выступающие в роли покровителей, вовсе не боги. Колдун может возглавить культ, посвящённый принцу демонов, архидьяволу или совершенно чужеродной сущности — созданиям, у которых обычно нет жрецов.
                            </p>
   							<form action="CreateCharacter.php" method="POST">
   								<p class="Text">
   								<button class="Btn" type="submit" name="do_warlock">Выбрать</button>
   								</p>
   							</form>
   						</div>
   					</div>
   					<div class="ContBlock">
   						<p class="Text" style="font-size: 30px;">Чародей</p>
   						<div class="ContBlock-1">
   							<p class="Text" style="font-size: 12px;">Магия является частью каждого чародея, наполняя тело, разум и дух скрытой силой, которая ждёт, когда её используют. Некоторые чародеи владеют магией, которая проистекает из древней родословной, связанной с магией драконов. Другие же несут в себе сырую, неконтролируемую силу, хаотичный шторм, который может выплеснуться самым неожиданным образом. 
                            </p>
   							<form action="CreateCharacter.php" method="POST">
   								<p class="Text">
   								<button class="Btn" type="submit" name="do_sorcerer">Выбрать</button>
   								</p>
   							</form>
   						</div>
   					</div>
   					<div class="ContBlock">
   						<p class="Text" style="font-size: 30px;">Плут</p>
   						<div class="ContBlock-1">
   							<p class="Text" style="font-size: 12px;">Когда дело доходит до боя, плуты отдают предпочтение хитрости, а не грубой силе. Плуту достаточно сделать один точный удар туда, где нападение наиболее повредит цели, а не одолевать врага шквалом атак. Плуты обладают почти сверхъестественной ловкостью для избегания опасностей, а некоторые обучились магическим трюкам в дополнение к своим способностям.  
                            </p>
   							<form action="CreateCharacter.php" method="POST">
   								<p class="Text">
   								<button class="Btn" type="submit" name="do_rogue">Выбрать</button>
   								</p>
   							</form>
   						</div>
   					</div>
   					<div class="ContBlock">
   						<p class="Text" style="font-size: 30px;">Друид</p>
   						<div class="ContBlock-1">
   							<p class="Text" style="font-size: 12px;">Выше чего-либо другого друиды почитают природу. Именно она является источником всех их заклинаний и магических способностей, непсредственно или через природное божество. Многие предпочитают духовный путь конечного единения с природой, но есть те, кто служат богам диких просторов, животных или стихий. Длящиеся испокон веков обычаи друидов также называют Старой Верой.   
                            </p>
   							<form action="CreateCharacter.php" method="POST">
   								<p class="Text">
   								<button class="Btn" type="submit" name="do_druid">Выбрать</button>
   								</p>
   							</form>
   						</div>
   					</div>
   					<div class="ContBlock">
   						<p class="Text" style="font-size: 30px;">Жрец</p>
   						<div class="ContBlock-1">
   							<p class="Text" style="font-size: 12px;">Божественная магия, как следует из названия, является силой богов, источающейся из них в мир. Жрецы являются проводниками этой энергии, проявляющейся в виде чудотворных эффектов. Использующие божественную магию не полагаются на обучение или тренировки. Жрец может разучить шаблонные молитвы и древние ритуалы, но способность читать заклинания зависит от преданности и интуитивного ощущения воли божества. 
                            </p>
   							<form action="CreateCharacter.php" method="POST">
   								<p class="Text">
   								<button class="Btn" type="submit" name="do_cleric">Выбрать</button>
   								</p>
   							</form>
   						</div>
   					</div>
   					<div class="ContBlock">
   						<p class="Text" style="font-size: 30px;">Паладин</p>
   						<div class="ContBlock-1">
   							<p class="Text" style="font-size: 12px;">Паладин клянётся защищать справедливость и праведность, отстаивать добродетели мира перед вторжениями тьмы, и охотиться на силы зла, где бы они ни скрывались. Разные паладины сосредотачиваются на различных аспектах праведности, но все они связаны клятвой, которая даёт им силы для совершения их священного дела. Многие паладины преданы богам добра, но сила паладина происходит скорее от собственного стремления к справедливости, чем от божества. 
                            </p>
   							<form action="CreateCharacter.php" method="POST">
   								<p class="Text">
   								<button class="Btn" type="submit" name="do_paladin">Выбрать</button>
   								</p>
   							</form>
   						</div>
   					</div>
   					<div class="ContBlock">
   						<p class="Text" style="font-size: 30px;">Варвар</p>
   						<div class="ContBlock-1">
   							<p class="Text" style="font-size: 12px;">Жители посёлков и городов настолько гордятся своей цивилизованностью, отличающей их от животных, словно отрицание собственной природы подчёркивает их превосходство. Варвары же, напротив, считают цивилизованность проявлением слабости. Связь между их животными инстинктами, первобытной энергетикой и свирепой яростью очень сильна. Варвары чувствуют себя неуютно в окружении стен или в толпе, но раскрываются в родных диких просторах, в тундре, джунглях или степях, где их племена живут и охотятся.  
                            </p>
   							<form action="CreateCharacter.php" method="POST">
   								<p class="Text">
   								<button class="Btn" type="submit" name="do_barbarian">Выбрать</button>
   								</p>
   							</form>
   						</div>
   					</div>
   					<div class="ContBlock">
   						<p class="Text" style="font-size: 30px;">Бард</p>
   						<div class="ContBlock-1">
   							<p class="Text" style="font-size: 12px;">В мирах D&D слова и музыка это не просто колебания воздуха, тут они содержат в себе силу. И бард является мастером речей, песен, и волшебства, заложенного в них. Барды говорят, что вся мультивселенная была вызвана к существованию и сформирована словами, которые произнесли боги. И отражения этих первородных Слов Творения до сих пор звучат в космосе. Музыка бардов это попытка уловить эти отзвуки и тонко вплести их в свои заклинания.   
                            </p>
   							<form action="CreateCharacter.php" method="POST">
   								<p class="Text">
   								<button class="Btn" type="submit" name="do_bard">Выбрать</button>
   								</p>
   							</form>
   						</div>
   					</div>
   					<div class="ContBlock">
   						<p class="Text" style="font-size: 30px;">Монах</p>
                        <div class="ContBlock-1">
   							<p class="Text" style="font-size: 12px;">Монахи тщательно изучают магическую энергию, которая в большинстве монастырских традиций именуется ци. Эта энергия является составляющей частью магии, пронизывающей мультивселенную, а точнее, той её частью, которая протекает сквозь тела живущих. Монахи научились управлять энергией, протекающей сквозь их тела, повышая физические способности и нанося атаки, способные препятствовать течению ци в телах противников.   
                            </p>
   							<form action="CreateCharacter.php" method="POST">
   								<p class="Text">
   								<button class="Btn" type="submit" name="do_monk">Выбрать</button>
   								</p>
   							</form>
   						</div>

   					</div>				
   					</div>
   				</div>			
   			</div>  		
   		</div>
   </div>
</body>
</html>
