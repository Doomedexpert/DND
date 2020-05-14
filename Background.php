<?php
require "./db.php";
$backGr=$_SESSION['BACKGROUND'];
$backID=$_SESSION['BACKGROUNDID'];
$back=rand(1,10);
$back1=rand(1,8);
$back2=rand(1,6);
$back3=rand(1,6);
$back4=rand(1,6);
require "./libs/crch.php";
require "./libs/TableBG-Artist.php";
require "./libs/TableBG-Besprizornik.php";
require "./libs/TableBG-Blagorod.php";
require "./libs/TableBG-GildRem.php";
require "./libs/TableBG-Moryak.php";
require "./libs/TableBG-Mudrez.php";
require "./libs/TableBG-NarodHero.php";
require "./libs/TableBG-Othelnik.php";
require "./libs/TableBG-Prestupnik.php";
require "./libs/TableBG-Prisluga.php";
require "./libs/TableBG-Soldat.php";
?>



<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>IgroteyRPGame | Создание персонажа | Ваша история</title>
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
   					<h1 class="Text" style="font-size: 40px;">Ваша Легенда</h1>
              
                 <?php  if ($_SESSION['BACKGROUND']=="Артист") : ?>
           <div class="BgRamka-1" style="height: 300px;">
              <div class="leftConteiner" style="height: 250px;width: 1160px; text-align: center;;">
                 <div style="height: 250px;width: 1160px; background: rgba(0,0,0,0.5); margin-top: -20px;">
                <p class="Text"> Вы прирожденный артист!</p>
                <p class="Text">Однажды в детстве вы нашли мистическое место. Хоть вы и не помните его названия, вы знаете точно, что на этом месте закончилась страшная война. Отголоски войны и битвы наполнили ваше сердце, и энергия просочилась сквозь вас. Вы, наполненные мистической энергией, почувствовали боль каждого воина погибшего здесь, а также непреодолимую гордость за тех, кто выиграл эту битву. Слова сами вырывались наружу и вы начали воспевать тот страшный день. Так у вас и открылся дар Артиста. Был ли это божий дар, дабы вы воспевали о геройстве. Или же сделка с потусторонним существом, при которой вы стали зарабатывать много денег своим талантом? Неважно, что вами движет, главное то, что этот дар не должен пропадать. И вы, собравшись в путь, двинули навстречу своим приключениям.</p><br>
                <p class="Text" style="margin-top: -20px;">Если это не ваша история, то напишите свою!</p>
                 </div>
              </div>
            </div>
             <?php endif; ?>
              <?php  if ($_SESSION['BACKGROUND']=="Беспризорник") : ?>
           <div class="BgRamka-1" style="height: 300px;">
              <div class="leftConteiner" style="height: 250px;width: 1160px; text-align: center;;">
                 <div style="height: 250px;width: 1160px; background: rgba(0,0,0,0.5); margin-top: -20px;">
                <p class="Text"> Вы бродяга!</p>
                <p class="Text"> Вы бастард, кровь одного из властных и могущественного барона. Волею злой судьбы, вас выкинули на улицу еще ребенком, но вас быстро нашли и так же выкинули в приют. Сколько вы себя знаете, вы жили на улице, полагаясь только на свои умения. Ваше сомнительное мастерство приносило вам плоды, но денег со шпионажа вам все равно не хватало на еду. Поднакопив среднее состояние вы купили себе снаряжение, и отбросили мысль продолжать жить в этом городе. Вас повела та самая судьба, что выкинула вас на улицу. Доверитесь ли вы ей? Или сами возьмете судьбу в свои руки?</p><br>
                <p class="Text" style="margin-top: -20px;">Если это не ваша история, то напишите свою!</p>
                 </div>
              </div>
            </div>
             <?php endif; ?>
               <?php  if ($_SESSION['BACKGROUND']=="Благородный") : ?>
           <div class="BgRamka-1" style="height: 300px;">
              <div class="leftConteiner" style="height: 250px;width: 1160px; text-align: center;;">
                 <div style="height: 250px;width: 1160px; background: rgba(0,0,0,0.5); margin-top: -20px;">
                <p class="Text"> В вас течёт голубая кровь!</p>
                <p class="Text">Вы родились в уважаемом доме вашей страны. С рождения вас лелеяли и удовлетворяли все ваши капризы. Но выбыли, лишь тенью своего родного, старшего брата. Ваш брат был не только благородным, но еще и почитаемый за его боевые заслуги. Но в скоре в одной из войн ваш погиб бесчестной смертью. Ваш отец не смог найти утешения и покоя. Он, медленно сходя с ума от непримиримой утраты начинал видеть в вас вашего брата, но к большому сожалению, вы не владели ничем, кроме правил этикета. Отец пригрозил вам лишить наследства и всех титулов вашей семьи, если вы не найдёте в этом суровом мире себе имя и не придёте домой мужчиной, таким, каким хочет видеть ваш отец. Вы взяли все необходимое и пустились в путь, не зная что он вам принесет. </p><br>
                <p class="Text" style="margin-top: -20px;">Если это не ваша история, то напишите свою!</p>
                 </div>
              </div>
            </div>
             <?php endif; ?>
              <?php  if ($_SESSION['BACKGROUND']=="Гильдейский ремесленник") : ?>
           <div class="BgRamka-1" style="height: 300px;">
              <div class="leftConteiner" style="height: 250px;width: 1160px; text-align: center;;">
                 <div style="height: 250px;width: 1160px; background: rgba(0,0,0,0.5); margin-top: -20px;">
                <p class="Text"> Вы гильдейский ремесленник!</p>
                <p class="Text">Сама божья длань одарила ваши руки ремеслом, который на протяжение всей вашей жизни кормил вас. Ваше мастерство приносило много денег, и вскоре вы вошли в одну из самых крупных торговых гильдий. Но в скоре, бюрократия начала побеждать ваше мастерство. Занимаясь одними бумагами и спорами с гильдейским лидером, вы поняли, что продолжаться так долго не может. Вы покинули гильдию, а в скоре узнали, что по договору, всё что вы имели, перешло в их распоряжение. Но вы были хитрее и схоронили небольшой тайник на черный день. Вы взяли снаряжение, накупили еды и отправились по дороге искать себе имя и новую работу. </p><br>
                <p class="Text" style="margin-top: -20px;">Если это не ваша история, то напишите свою!</p>
                 </div>
              </div>
            </div>
             <?php endif; ?>
             <?php  if ($_SESSION['BACKGROUND']=="Моряк") : ?>
           <div class="BgRamka-1" style="height: 300px;">
              <div class="leftConteiner" style="height: 250px;width: 1160px; text-align: center;;">
                 <div style="height: 250px;width: 1160px; background: rgba(0,0,0,0.5); margin-top: -20px;">
                <p class="Text"> Вы морской волк!</p>
                <p class="Text">Вы были рождены в море и там вы и умрете. Ваш народ - морской скиталец, который жил исключительно на воде. С детства вы запомнили, как трудно даётся еда и под тяжким трудом вы возмужали. В вас горело не только сердце моря, но и сердце приключений. Вам хотелось увидеть мир, который находился вне моря. Ваш характер сделал дело и после стычки со жрецами моря своего народа вас изгнали. Вы сошли на берег и сжимая амулет, напоминающий о своём народе, бросились в путь. Вы так же остаетесь ребенком морей и никогда этого не забудете.</p><br>
                <p class="Text" style="margin-top: -20px;">Если это не ваша история, то напишите свою!</p>
                 </div>
              </div>
            </div>
             <?php endif; ?>
             <?php  if ($_SESSION['BACKGROUND']=="Мудрец") : ?>
           <div class="BgRamka-1" style="height: 300px;">
              <div class="leftConteiner" style="height: 250px;width: 1160px; text-align: center;;">
                 <div style="height: 250px;width: 1160px; background: rgba(0,0,0,0.5); margin-top: -20px;">
                <p class="Text"> Вы мудрец!</p>
                <p class="Text">Вас взрастил опыт поколений. С детства вы были слугой в одной из королевских библиотек и приобретали все навыки именно там. Ваши мысли повергали людей в шок, а некоторые начали создавать культ вокруг вас. Ваши сказания переходили на пергаменты и помещались в особую секцию библиотеки, в которой вы выросли. Но в скоре, правитель, который увидел в вашем культе угрозу, изгнал вас и жестоко покарал ваших последователей. Ваши мысли были сожжены на костре, вместе с теми учениями, которые взрастили вас, тем, кем вы являетесь. Вы собрали свои вещи и собрались в путь. Вы хотели бы и дальше делится с миром своими с мыслями, но запомнив, чем это обернулось, вы решили превратиться в сосуд знаний, накопленных вами. Но то, что вы знаете - это всего лишь крупица от того, что есть в мире.</p><br>
                <p class="Text" style="margin-top: -20px;">Если это не ваша история, то напишите свою!</p>
                 </div>
              </div>
            </div>
             <?php endif; ?>
             <?php  if ($_SESSION['BACKGROUNDID']==7) : ?>
           <div class="BgRamka-1" style="height: 300px;">
              <div class="leftConteiner" style="height: 250px;width: 1160px; text-align: center;;">
                 <div style="height: 250px;width: 1160px; background: rgba(0,0,0,0.5); margin-top: -20px;">
                <p class="Text"> Вы народный герой!</p>
                <p class="Text">Вас вырастили в достойной семье. Вложили в вас навыки, опыт поколений и уважение к чести и достоинству. В вашей жизни случился переломный момент, в котором ваш народ превознёс вас до героя. Но вас не интересовала защита своего народа. Вы поняли, что случилось с вашим народом - случается во всем мире. Вы не возжелали становиться защитником своего народа, вы возжелали стать защитником всего мира. Собравшись, вы ступили в опасный мир. Вас ожидает принятия того факта, что мир не чёрно-белый и у каждой истории есть обратная сторона медали. К счастью или к сожалению, сейчас это вас не тяготит. Вы с ясным умом двигаетесь дальше, все больше отдаляясь от своего народа.</p><br>
                <p class="Text" style="margin-top: -20px;">Если это не ваша история, то напишите свою!</p>
                 </div>
              </div>
            </div>
             <?php endif; ?>

              <?php  if ($_SESSION['BACKGROUNDID']==8) : ?>
           <div class="BgRamka-1" style="height: 300px;">
              <div class="leftConteiner" style="height: 250px;width: 1160px; text-align: center;;">
                 <div style="height: 250px;width: 1160px; background: rgba(0,0,0,0.5); margin-top: -20px;">
                <p class="Text"> Вы отшельник!</p>
                <p class="Text">Вы сам себе хозяин и судьба не властна над вами. Вам никто не нужен, вы с рождения были одни и останетесь таким до скончания ваших времен. Вы жили в лесу и выживали своим трудом, но в один миг всё изменилось. По землям пронеслась беспощадная война и волею судьбы, ваш лес сгорел дотла. Вы остались без дома и без средств на выживание. Единственный выход - выйти на дорогу странствий и научиться жить в обществе, что вы так давно отвергли.</p><br>
                <p class="Text" style="margin-top: -20px;">Если это не ваша история, то напишите свою!</p>
                 </div>
              </div>
            </div>
             <?php endif; ?>

             <?php  if ($_SESSION['BACKGROUNDID']==9) : ?>
           <div class="BgRamka-1" style="height: 300px;">
              <div class="leftConteiner" style="height: 250px;width: 1160px; text-align: center;;">
                 <div style="height: 250px;width: 1160px; background: rgba(0,0,0,0.5); margin-top: -20px;">
                <p class="Text"> Вы преступник!</p>
                <p class="Text">Вы законченный негодяй и всегда им были. С детства вы были беспризорником, но вас быстро нашли джентльмены удачи, которые подбросили вам работку. Доход с этой работы вскружил вам голову и неважно, какое преступление было совершенно, вы жили так - как хотели и на широкую ногу. Но даже такие сливки не бесконечны, вы это понимали, и когда хотели выйти из дела, вас сдали свои же. Вы провели в тюрьме треть своей жизни, а когда вышли, поквитались с крысами. Вас более не держало в этом городе и вы, набрав "честно" заработанное снаряжение отправились в путь. Вашей путеводной было солнце, вместо которого вы видели одну бесконечно сияющую монету.</p><br>
                <p class="Text" style="margin-top: -20px;">Если это не ваша история, то напишите свою!</p>
                 </div>
              </div>
            </div>
             <?php endif; ?>
              <?php  if ($_SESSION['BACKGROUNDID']==10) : ?>
           <div class="BgRamka-1" style="height: 300px;">
              <div class="leftConteiner" style="height: 250px;width: 1160px; text-align: center;;">
                 <div style="height: 250px;width: 1160px; background: rgba(0,0,0,0.5); margin-top: -20px;">
                <p class="Text"> Вы прислужник!</p>
                <p class="Text">Вы провели свою жизнь, служа в храме, посвящённому какому-то конкретному богу или же пантеону богов. Вы — посредник между царством небесными миром живых. Вы совершали священные ритуалы и приносили жертвоприношения для того чтобы молящиеся могли предстать пред ликом богов. Вы не обязательно жрец — совершение священных обрядов не то же самое, что направление божественной силы.</p><br>
                <p class="Text" style="margin-top: -20px;">Если это не ваша история, то напишите свою!</p>
                 </div>
              </div>
            </div>
             <?php endif; ?>
              <?php  if ($_SESSION['BACKGROUNDID']==11) : ?>
           <div class="BgRamka-1" style="height: 300px;">
              <div class="leftConteiner" style="height: 250px;width: 1160px; text-align: center;;">
                 <div style="height: 250px;width: 1160px; background: rgba(0,0,0,0.5); margin-top: -20px;">
                <p class="Text"> Вы солдат!</p>
                <p class="Text">Сколько вы помните, в вашей жизни всегда была война. С молодости вы проходили тренировки, учились использовать оружие и доспехи, изучали технику выживания, включая то, как оставаться живым на поле боя. Вы могли быть частью армии страны или отряда наёмников, а может, были местным ополченцем во время войны.</p><br>
                <p class="Text" style="margin-top: -20px;">Если это не ваша история, то напишите свою!</p>
                 </div>
              </div>
            </div>
             <?php endif; ?>
              <?php  if ($_SESSION['BACKGROUNDID']==12) : ?>
           <div class="BgRamka-1" style="height: 300px;">
              <div class="leftConteiner" style="height: 250px;width: 1160px; text-align: center;;">
                 <div style="height: 250px;width: 1160px; background: rgba(0,0,0,0.5); margin-top: -20px;">
                <p class="Text"> Вы чужеземец!</p>
                <p class="Text">Вы выросли в глуши, вдали от цивилизации и её благ. Вы видели миграцию стад, чей размер был больше леса, выживали при температуре, которую горожанам и не представить, и наслаждались таким уединением, что на многие мили вокруг вы были единственным мыслящим существом. Дикая природа в вашей крови, будь вы кочевником, исследователем, затворником, охотником-собирателем или даже мародёром. Даже в неизвестном месте вы найдёте что-то, что вам понятно. </p><br>
                <p class="Text" style="margin-top: -20px;">Если это не ваша история, то напишите свою!</p>
                 </div>
              </div>
            </div>
             <?php endif; ?>
              <?php  if ($_SESSION['BACKGROUNDID']==13) : ?>
             <div class="BgRamka-1" style="height: 300px;">
              <div class="leftConteiner" style="height: 250px;width: 1160px; text-align: center;;">
                 <div style="height: 250px;width: 1160px; background: rgba(0,0,0,0.5); margin-top: -20px;">
                <p class="Text"> Вы шарлатан!</p>
                <p class="Text">Вы хорошо знаете людей. Вы понимаете, что ими движет, и можете распознать их самые сокровенные желания спустя всего пару минут после начала разговора. Несколько наводящих вопросов, и вот вы уже читаете их словно книжки, написанные для детей. Это полезный талант, и вы вполне готовы использовать его себе на благо. Вы знаете, что люди хотят, и вы даёте им это, или же обещаете дать. Чувство здравого смысла должно заставлять людей держаться подальше от тех вещей, которые слишком хорошо звучат, чтобы быть правдой. Но здравый смысл куда-то улетучивается, когда вы неподалёку. Бутылочка с розовой жидкостью всенепременно вылечит эту неблаговидную сыпь. Все эти чудеса, конечно, звучат неправдоподобно, но вы знаете, как преподнести их так, чтобы они казались крайне выгодным делом.</p><br>
                <p class="Text" style="margin-top: -20px;">Если это не ваша история, то напишите свою!</p>
                 </div>
              </div>
            </div>
             <?php endif; ?>


              <div class="BgRamka-1" style="height: 500px;">
              <div class="leftConteiner" style="height: 450px;width: 1160px; text-align: center;;">
                 <div style="height: 450px;width: 1160px; background: rgba(0,0,0,0.5);">
                  <form action="Background.php" method="POST">
                    <textarea placeholder="Напишите свою уникальную историю персонажа или оставьте стандартную." name="textBiog" class="InputTextArea" autocomplete="off" maxlength="250"></textarea>
                    
                  </form>
                
                 </div>
              </div>
             
           </div>

           <?php  if ($_SESSION['BACKGROUNDID']==1) : ?>
           <div class="BgRamka-1" style="height: 100px;">
              <div class="leftConteiner" style="height: 50px;width: 1160px; text-align: center;;">
                 <div style="height: 50px;width: 1160px; background: rgba(0,0,0,0.5); margin-top: -20px; margin-bottom: 20px;">
                  <p class="Text" ><b>Ваше амплуа:</b> <?php echo $amplua; ?></p>
          
                
                  </div>
              </div>
            </div>
          <?php endif; ?>

          <?php  if ($_SESSION['BACKGROUNDID']==2) : ?>
           <div class="BgRamka-1" style="height: 100px;">
              <div class="leftConteiner" style="height: 50px;width: 1160px; text-align: center;;">
                 <div style="height: 50px;width: 1160px; background: rgba(0,0,0,0.5); margin-top: -20px; margin-bottom: 20px;">
                  <p class="Text" ><b>Ваше уникальное умение:</b> Городские тайны</p>
                  </div>
              </div>
            </div>
          <?php endif; ?>

          <?php  if ($_SESSION['BACKGROUNDID']==3) : ?>
           <div class="BgRamka-1" style="height: 100px;">
              <div class="leftConteiner" style="height: 50px;width: 1160px; text-align: center;;">
                 <div style="height: 50px;width: 1160px; background: rgba(0,0,0,0.5); margin-top: -20px; margin-bottom: 20px;">
                  <p class="Text" ><b>Ваше уникальное умение:</b> Привилегированность</p>
                  </div>
              </div>
            </div>
          <?php endif; ?>
          <?php  if ($_SESSION['BACKGROUNDID']==4) : ?>
           <div class="BgRamka-1" style="height: 100px;">
              <div class="leftConteiner" style="height: 50px;width: 1160px; text-align: center;;">
                 <div  style="height: 50px;width: 1160px; background: rgba(0,0,0,0.5); margin-top: -20px; margin-bottom: 20px;">
                  <p class="Text" ><b>Ваше уникальное умение:</b> Членство в гильдии</p>
                  </div>
              </div>
            </div>
          <?php endif; ?>
          <?php  if ($_SESSION['BACKGROUNDID']==4) : ?>
           <div class="BgRamka-1" style="height: 100px;">
              <div class="leftConteiner" style="height: 50px;width: 1160px; text-align: center;;">
                 <div style="height: 50px;width: 1160px; background: rgba(0,0,0,0.5); margin-top: -20px; margin-bottom: 20px;">
                  <p class="Text" ><b>Специализация гильдии:</b> <?php echo $_SESSION['GildSpec']; ?></p>
                  </div>
              </div>
            </div>
          <?php endif; ?>
          <?php  if ($_SESSION['BACKGROUNDID']==5) : ?>
           <div class="BgRamka-1" style="height: 100px;">
              <div class="leftConteiner" style="height: 50px;width: 1160px; text-align: center;;">
                 <div style="height: 50px;width: 1160px; background: rgba(0,0,0,0.5); margin-top: -20px; margin-bottom: 20px;">
                  <p class="Text" ><b>Особое умение:</b> Поездка на корабле</p>
                  </div>
              </div>
            </div>
          <?php endif; ?>
          <?php  if ($_SESSION['BACKGROUNDID']==6) : ?>
           <div class="BgRamka-1" style="height: 100px;">
              <div class="leftConteiner" style="height: 50px;width: 1160px; text-align: center;;">
                 <div style="height: 50px;width: 1160px; background: rgba(0,0,0,0.5); margin-top: -20px; margin-bottom: 20px;">
                  <p class="Text" ><b>Специализация :</b> <?php echo $_SESSION['MudSpec']; ?></p>
                  </div>
              </div>
            </div>
             <?php endif; ?>

             <?php  if ($_SESSION['BACKGROUNDID']==7) : ?>
           <div class="BgRamka-1" style="height: 100px;">
              <div class="leftConteiner" style="height: 50px;width: 1160px; text-align: center;;">
                 <div style="height: 50px;width: 1160px; background: rgba(0,0,0,0.5); margin-top: -20px; margin-bottom: 20px;">
                  <p class="Text" ><b>Определяющее событие :</b> <?php echo $_SESSION['HeroSpec'] ?></p>
                  </div>
              </div>
            </div>
             <?php endif; ?>

             <?php  if ($_SESSION['BACKGROUNDID']==7) : ?>
           <div class="BgRamka-1" style="height: 100px;">
              <div class="leftConteiner" style="height: 50px;width: 1160px; text-align: center;;">
                 <div style="height: 50px;width: 1160px; background: rgba(0,0,0,0.5); margin-top: -20px; margin-bottom: 20px;">
                  <p class="Text" ><b>Умение :</b> Деревенское гостеприимство</p>
                  </div>
              </div>
            </div>
             <?php endif; ?>

              <?php  if ($_SESSION['BACKGROUNDID']==8) : ?>
           <div class="BgRamka-1" style="height: 100px;">
              <div class="leftConteiner" style="height: 50px;width: 1160px; text-align: center;;">
                 <div style="height: 50px;width: 1160px; background: rgba(0,0,0,0.5); margin-top: -20px; margin-bottom: 20px;">
                  <p class="Text" ><b>Жизнь в уединении:</b> <?php echo $_SESSION['OtshSpec'] ?></p>
                  </div>
              </div>
            </div>
             <?php endif; ?>

             <?php  if ($_SESSION['BACKGROUNDID']==8) : ?>
           <div class="BgRamka-1" style="height: 100px;">
              <div class="leftConteiner" style="height: 50px;width: 1160px; text-align: center;;">
                 <div style="height: 50px;width: 1160px; background: rgba(0,0,0,0.5); margin-top: -20px; margin-bottom: 20px;">
                  <p class="Text" ><b>Умение :</b> Откровение</p>
                  </div>
              </div>
            </div>
             <?php endif; ?>

              <?php  if ($_SESSION['BACKGROUNDID']==9) : ?>
           <div class="BgRamka-1" style="height: 100px;">
              <div class="leftConteiner" style="height: 50px;width: 1160px; text-align: center;;">
                 <div style="height: 50px;width: 1160px; background: rgba(0,0,0,0.5); margin-top: -20px; margin-bottom: 20px;">
                  <p class="Text" ><b>Преступная направленность:</b> <?php echo $_SESSION['PrestSpec'] ?></p>
                  </div>
              </div>
            </div>
             <?php endif; ?>

             <?php  if ($_SESSION['BACKGROUNDID']==9) : ?>
           <div class="BgRamka-1" style="height: 100px;">
              <div class="leftConteiner" style="height: 50px;width: 1160px; text-align: center;;">
                 <div style="height: 50px;width: 1160px; background: rgba(0,0,0,0.5); margin-top: -20px; margin-bottom: 20px;">
                  <p class="Text" ><b>Умение :</b> Криминальные связи</p>
                  </div>
              </div>
            </div>
             <?php endif; ?>

             <?php  if ($_SESSION['BACKGROUNDID']==10) : ?>
           <div class="BgRamka-1" style="height: 100px;">
              <div class="leftConteiner" style="height: 50px;width: 1160px; text-align: center;;">
                 <div style="height: 50px;width: 1160px; background: rgba(0,0,0,0.5); margin-top: -20px; margin-bottom: 20px;">
                  <p class="Text" ><b>Умение :</b> Приют для верующих</p>
                  </div>
              </div>
            </div>
             <?php endif; ?>

           <div class="BgRamka-1" style="height: 100px;">
              <div class="leftConteiner" style="height: 50px;width: 1160px; text-align: center;;">
                 <div style="height: 50px;width: 1160px; background: rgba(0,0,0,0.5); margin-top: -20px; margin-bottom: 20px;">
                  <p class="Text" ><b>Черта характера:</b> <?php echo $ChHar; ?></p>

                
                  </div>
              </div>
            </div>

            <div class="BgRamka-1" style="height: 100px;">
              <div class="leftConteiner" style="height: 50px;width: 1160px; text-align: center;;">
                 <div style="height: 50px;width: 1160px; background: rgba(0,0,0,0.5); margin-top: -20px; margin-bottom: 20px;">
                  <p class="Text" ><b>Идеал:</b> <?php echo $ideal; ?></p>

                
                  </div>
              </div>
            </div>

            <div class="BgRamka-1" style="height: 100px;">
              <div class="leftConteiner" style="height: 50px;width: 1160px; text-align: center;;">
                 <div style="height: 50px;width: 1160px; background: rgba(0,0,0,0.5); margin-top: -20px; margin-bottom: 20px;">
                  <p class="Text" ><b>Привязанность:</b> <?php echo $privyaz; ?></p>

                
                  </div>
              </div>
            </div>

            <div class="BgRamka-1" style="height: 100px;">
              <div class="leftConteiner" style="height: 50px;width: 1160px; text-align: center;;">
                 <div style="height: 50px;width: 1160px; background: rgba(0,0,0,0.5); margin-top: -20px; margin-bottom: 20px;">
                  <p class="Text" ><b>Слабость:</b> <?php echo $slab; ?></p>

                
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
