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

   <div class="BgRamka" style="margin-left: 100px; margin-right: 100px; height: 1950px;">
   		<div class="DMainCont">
   			<div class="DMainCont-SB">
   				<div class="BgRamka-1">
   					<div class="Cont-1">
   					<h1 class="Text" style="font-size: 40px;">Создание персонажа</h1>
   					
 
   							
   					</div>
   				</div>	


   				<div class="BgRamka-1" style="height: 1700px;">
   					<div class="Cont-1" style="height: 1665px;">
   					<h1 class="Text" style="font-size: 40px;">Выбор класса</h1>
   					
  <div class="ContBlock">    
   <p class="Text" style="font-size: 30px;">Воин</p>
    <div class="imageContBlock-1">
   				<div class="ContBlock-1">
   							<p class="Text" style="font-size: 12px;">Воины владеют основами всех боевых стилей. Каждый воин может рубить топором, фехтовать рапирой, владеет длинным и двуручным мечом, может стрелять из лука и даже при некоторой сноровке способен поймать противника сетью. Помимо этого, воины хорошо знакомы с использованием щита и любых доспехов. </p>
   							<form action="RaceSelection.php" method="POST">
   								<p class="Text">
   								<button class="Btn" type="submit" name="do_warrior">Выбрать</button>
   								</p>
   							</form>

                <div class="imageContBlock-1" style="margin-top: 60px; margin-left: -10px; height: 130px; width: 245px">
                  <div class="ContBlock-1" style=" height: 130px; width: 225x;">
                    <p class="Text" style="font-size: 12px">
                     <b>Воинские архетипы:</b><br>
                     Мастер боевых искусств<br>
                     Мистический рыцарь<br>
                     Чемпион<br>
                    </p>
                  </div>
                  
                </div>

   				</div>
      </div>			
   </div>



          
  <div class="ContBlock">
   	<p class="Text" style="font-size: 30px;">Следопыт</p>
    <div class="imageContBlock-2">
   			<div class="ContBlock-1">
   							<p class="Text" style="font-size: 12px;">Бойцы диких земель, следопыты, специализируются на охоте на монстров, таких как неистовствующие звери, чудовищные создания, ужасающие великаны и смертоносные драконы, угрожающих нападением на цивилизованные земли гуманоидов. Они умеют выслеживать добычу подобно хищнику, скрытно передвигаясь через дебри, прячась среди кустов и камней.
                         </p>
   							<form action="RaceSelection.php" method="POST">
   								<p class="Text">
   								<button class="Btn" type="submit" name="do_ranger">Выбрать</button>
   								</p>
   							</form>


                 <div class="imageContBlock-2" style="margin-top: 33px; margin-left: -10px; height: 130px; width: 245px">
                  <div class="ContBlock-1" style=" height: 130px; width: 225x;">
                    <p class="Text" style="font-size: 12px">
                     <b>Архетипы следопыта:</b><br>
                     Охотник<br>
                     Повелитель зверей<br>
                     Повелитель растений<br>
                    </p>
                  </div>
                </div>

        </div>
   	</div>
  </div>


  <div  class="ContBlock">
   	<p class="Text" style="font-size: 30px;">Волшебник</p>
     <div class="imageContBlock-3">
   				<div class="ContBlock-1">
   							<p class="Text" style="font-size: 12px;">Дикая и загадочная, разнообразная по форме и функциям, магия привлекает учеников, которые стремятся достичь мастерства в её тайнах. Некоторые хотят уподобиться богам, изменять саму реальность. И хотя для сотворения обычного заклинания требуется лишь произношение нескольких странных слов, совершение пары мимолётных жестов, а иногда щепотка или комок экзотических материалов.
                          </p>
   							<form action="RaceSelection.php" method="POST">
   								<p class="Text">
   								<button class="Btn" type="submit" name="do_wizzard">Выбрать</button>
   								</p>
   							</form>

                 <div class="imageContBlock-3" style="margin-top: 33px; margin-left: -10px; height: 130px; width: 245px">
                  <div class="ContBlock-1" style=" height: 130px; width: 225x;">
                    <p class="Text" style="font-size: 11px">
                     <b>Магические традиции:</b><br>
                     Школа воплощения<br>
                     Школа вызова<br>
                     Школа иллюзии<br>
                     Школа некромантии<br>
                     Школа ограждения<br>
                     Школа очарования<br>
                     Школа преобразования<br>
                     Школа прорицания<br>
                    </p>
                  </div>
                </div>


   				</div>
       </div>
  </div>



  <div class="ContBlock">
   	<p class="Text" style="font-size: 30px;">Колдун</p>
     <div class="imageContBlock-4">
   			<div class="ContBlock-1">
   							<p class="Text" style="font-size: 12px;">Колдун заключает договор с потусторонней сущностью. Иногда отношения между колдуном и его покровителем похожи на отношения жреца и его божества, но сущности, выступающие в роли покровителей, вовсе не боги. Колдун может возглавить культ, посвящённый принцу демонов, архидьяволу или совершенно чужеродной сущности — созданиям, у которых обычно нет жрецов.
                            </p>
   							<form action="RaceSelection.php" method="POST">
   								<p class="Text">
   								<button class="Btn" type="submit" name="do_warlock">Выбрать</button>
   								</p>
   							</form>

                <div class="imageContBlock-4" style="margin-top: 33px; margin-left: -10px; height: 130px; width: 245px">
                  <div class="ContBlock-1" style=" height: 130px; width: 225x;">
                    <p class="Text" style="font-size: 12px">
                     <b>Потусторонние покровители:</b><br>
                    Архифея<br>
                    Исчадие<br>
                    Великий древний<br>
                    </p>
                  </div>
                </div>

   			</div>
    </div>
  </div>


  <div class="ContBlock">
   	<p class="Text" style="font-size: 30px;">Чародей</p>
      <div class="imageContBlock-5">
   				<div class="ContBlock-1">
   							<p class="Text" style="font-size: 12px;">Магия является частью каждого чародея, наполняя тело, разум и дух скрытой силой, которая ждёт, когда её используют. Некоторые чародеи владеют магией, которая проистекает из древней родословной, связанной с магией драконов. Другие же несут в себе сырую, неконтролируемую силу, хаотичный шторм, который может выплеснуться самым неожиданным образом. 
                            </p>
   							<form action="RaceSelection.php" method="POST">
   								<p class="Text">
   								<button class="Btn" type="submit" name="do_sorcerer">Выбрать</button>
   								</p>
   							</form>

                <div class="imageContBlock-5" style="margin-top: 33px; margin-left: -10px; height: 130px; width: 245px">
                  <div class="ContBlock-1" style=" height: 130px; width: 225x;">
                    <p class="Text" style="font-size: 12px">
                     <b>Происхождения чародея:</b><br>
                    Наследие драконьей крови<br>
                    Дикая магия<br>
                    Отмеченный порчей<br>
                    </p>
                  </div>
                </div>

   				</div>
      </div>
  </div>

  <div class="ContBlock">
   	<p class="Text" style="font-size: 30px;">Плут</p>
    <div class="imageContBlock-6">
   			<div class="ContBlock-1">
   							<p class="Text" style="font-size: 12px;">Когда дело доходит до боя, плуты отдают предпочтение хитрости, а не грубой силе. Плуту достаточно сделать один точный удар туда, где нападение наиболее повредит цели, а не одолевать врага шквалом атак. Плуты обладают почти сверхъестественной ловкостью для избегания опасностей, а некоторые обучились магическим трюкам в дополнение к своим способностям.  
                            </p>
   							<form action="RaceSelection.php" method="POST">
   								<p class="Text">
   								<button class="Btn" type="submit" name="do_rogue">Выбрать</button>
   								</p>
   							</form>

                 <div class="imageContBlock-6" style="margin-top: 48px; margin-left: -10px; height: 130px; width: 245px">
                  <div class="ContBlock-1" style=" height: 130px; width: 225x;">
                    <p class="Text" style="font-size: 12px">
                     <b>Архетипы плута:</b><br>
                    Вор<br>
                    Убийца<br>
                    Мистический ловкач<br>
                    </p>
                  </div>
                </div>

   			</div>
    </div>
  </div>

  <div class="ContBlock">
   	<p class="Text" style="font-size: 30px;">Друид</p>
    <div class="imageContBlock-7">
   			<div class="ContBlock-1">
   							<p class="Text" style="font-size: 12px;">Выше чего-либо другого друиды почитают природу. Именно она является источником всех их заклинаний и магических способностей, непсредственно или через природное божество. Многие предпочитают духовный путь конечного единения с природой, но есть те, кто служат богам диких просторов, животных или стихий. Длящиеся испокон веков обычаи друидов также называют Старой Верой.   
                            </p>
   							<form action="RaceSelection.php" method="POST">
   								<p class="Text">
   								<button class="Btn" type="submit" name="do_druid">Выбрать</button>
   								</p>
   							</form>

                <div class="imageContBlock-7" style="margin-top: 33px; margin-left: -10px; height: 130px; width: 245px">
                  <div class="ContBlock-1" style=" height: 130px; width: 225x;">
                    <p class="Text" style="font-size: 12px">
                     <b>Круги друидов:</b><br>
                    Круг земли<br>
                    Круг луны<br>
                    Круг плодородия<br>
                    </p>
                  </div>
                </div>


        </div>
   	</div>
  </div>


  <div class="ContBlock">
   	<p class="Text" style="font-size: 30px;">Жрец</p>
    <div class="imageContBlock-8">
   			<div class="ContBlock-1">
   							<p class="Text" style="font-size: 12px;">Божественная магия, как следует из названия, является силой богов, источающейся из них в мир. Жрецы являются проводниками этой энергии, проявляющейся в виде чудотворных эффектов. Использующие божественную магию не полагаются на обучение или тренировки. Жрец может разучить шаблонные молитвы и древние ритуалы, но способность читать заклинания зависит от преданности и интуитивного ощущения воли божества. 
                            </p>
   							<form action="RaceSelection.php" method="POST">
   								<p class="Text">
   								<button class="Btn" type="submit" name="do_cleric">Выбрать</button>
   								</p>
   							</form>

                <div class="imageContBlock-8" style="margin-top: 13px; margin-left: -10px; height: 130px; width: 245px">
                  <div class="ContBlock-1" style=" height: 130px; width: 225x;">
                    <p class="Text" style="font-size: 12px">
                     <b>Божественные домены:</b><br>
                   Домен бури<br>
                   Домен войны<br>
                   Домен жизни<br>
                   Домен знания<br>
                   Домен обмана<br>
                   Домен природы<br>
                   Домен света<br>
                    </p>
                  </div>
                </div>


   			</div>
    </div>
  </div>


  <div class="ContBlock">
   	<p class="Text" style="font-size: 30px;">Паладин</p>
    <div class="imageContBlock-9">
   			<div class="ContBlock-1">
   							<p class="Text" style="font-size: 12px;">Паладин клянётся защищать справедливость и праведность, отстаивать добродетели мира перед вторжениями тьмы, и охотиться на силы зла. Разные паладины сосредотачиваются на различных аспектах праведности, но все они связаны клятвой, которая даёт им силы для совершения их священного дела. Многие паладины преданы богам добра, но сила паладина происходит скорее от собственного стремления.
                            </p>
   							<form action="RaceSelection.php" method="POST">
   								<p class="Text">
   								<button class="Btn" type="submit" name="do_paladin">Выбрать</button>
   								</p>
   							</form>

                 <div class="imageContBlock-9" style="margin-top: 13px; margin-left: -10px; height: 130px; width: 245px">
                  <div class="ContBlock-1" style=" height: 130px; width: 225x;">
                    <p class="Text" style="font-size: 12px">
                     <b>Священные клятвы:</b><br>
                   Клятва преданности<br>
                   Клятва древних<br>
                   Клятва мести<br>
                    </p>
                  </div>
                </div>

   			</div>
    </div>
  </div>


  <div class="ContBlock">
   	<p class="Text" style="font-size: 30px;">Варвар</p>
      <div class="imageContBlock-10">
   				<div class="ContBlock-1">
   							<p class="Text" style="font-size: 12px;">Жители посёлков и городов настолько гордятся своей цивилизованностью, отличающей их от животных, словно отрицание собственной природы подчёркивает их превосходство. Связь между их животными инстинктами и свирепой яростью очень сильна. Варвары чувствуют себя неуютно в окружении стен или в толпе, но раскрываются в родных диких просторах, в тундре, джунглях или степях.  
                            </p>
   							<form action="RaceSelection.php" method="POST">
   								<p class="Text">
   								<button class="Btn" type="submit" name="do_barbarian">Выбрать</button>
   								</p>
   							</form>

                <div class="imageContBlock-10" style="margin-top: 13px; margin-left: -10px; height: 130px; width: 245px">
                  <div class="ContBlock-1" style=" height: 130px; width: 225x;">
                    <p class="Text" style="font-size: 12px">
                     <b>Путь дикости:</b><br>
                   Путь берсерка<br>
                   Путь тотемного воина<br>
                   Путь порчи<br>
                    </p>
                  </div>
                </div>


   				</div>
      </div>
  </div>


  <div class="ContBlock">
   	<p class="Text" style="font-size: 30px;">Бард</p>
    <div class="imageContBlock-11">
   				<div class="ContBlock-1">
   							<p class="Text" style="font-size: 12px;">В мирах D&D слова и музыка это не просто колебания воздуха, тут они содержат в себе силу. И бард является мастером речей, песен, и волшебства, заложенного в них. Барды говорят, что вся мультивселенная была вызвана к существованию и сформирована словами, которые произнесли боги. И отражения этих первородных Слов Творения до сих пор звучат в космосе.  
                            </p>
   							<form action="RaceSelection.php" method="POST">
   								<p class="Text">
   								<button class="Btn" type="submit" name="do_bard">Выбрать</button>
   								</p>
   							</form>

                 <div class="imageContBlock-11" style="margin-top: 47px; margin-left: -10px; height: 130px; width: 245px">
                  <div class="ContBlock-1" style=" height: 130px; width: 225x;">
                    <p class="Text" style="font-size: 12px">
                     <b>Коллегии бардов:</b><br>
                  Коллегия доблести<br>
                  Коллегия знаний<br>
                  Коллегия древних<br>
                    </p>
                  </div>
                </div>


   				</div>
    </div>
  </div>



  <div class="ContBlock">
   	<p class="Text" style="font-size: 30px;">Монах</p>
      <div class="imageContBlock-12">
            <div class="ContBlock-1">
   							<p class="Text" style="font-size: 12px;">Монахи тщательно изучают магическую энергию, которая в большинстве монастырских традиций именуется ци. Эта энергия является составляющей частью магии, пронизывающей мультивселенную, а точнее, той её частью, которая протекает сквозь тела живущих. Монахи научились управлять энергией, протекающей сквозь их тела, повышая физические способности и нанося атаки, способные препятствовать течению ци в телах противников.   
                            </p>
   							<form action="RaceSelection.php" method="POST">
   								<p class="Text">
   								<button class="Btn" type="submit" name="do_monk">Выбрать</button>
   								</p>
   							</form>

                 <div class="imageContBlock-12" style="margin-top: 13px; margin-left: -10px; height: 130px; width: 245px">
                  <div class="ContBlock-1" style=" height: 130px; width: 225x;">
                    <p class="Text" style="font-size: 12px">
                     <b>Монастырские традиции:</b><br>
                   Путь открытой ладони<br>
                   Путь тени<br>
                   Путь четырёх стихий<br>
                   Путь шипов<br>
                    </p>
                  </div>
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
