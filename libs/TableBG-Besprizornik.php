<?
$data = $_POST;

if ($_SESSION['BACKGROUND']=="Беспризорник")
{
 if ($back1==1)
 {
 	$ChHar="В моих карманах полно побрякушек и объедков. ";
 	$_SESSION['HARACTER'] =$ChHar; 
 }
  elseif ($back1==2)
 {
 	$ChHar="Я задаю очень много вопросов.";
 	$_SESSION['HARACTER'] =$ChHar; 
 }
 elseif ($back1==3)
 {
 	$ChHar="Я часто забиваюсь в узкие закутки, где никто не сможет добраться до меня.";
 	$_SESSION['HARACTER'] =$ChHar; 
 }
 elseif ($back1==4)
 {
 	$ChHar="Я всегда сплю, прижавшись спиной к стене или дереву,
сжимая узелок со всеми своими пожитками в руках. ";
 	$_SESSION['HARACTER'] =$ChHar; 
 }
 elseif ($back1==5)
 {
 	$ChHar="Я не воспитан, и ем как свинья. ";
 	$_SESSION['HARACTER'] =$ChHar; 
 }
 elseif ($back1==6)
 {
 	$ChHar="Я убеждён, что все, кто проявляют доброту ко мне, на
самом деле скрывают злые намерения.";
 	$_SESSION['HARACTER'] =$ChHar; 
 }
 elseif ($back1==7)
 {
 	$ChHar="Я не люблю мыться.";
 	$_SESSION['HARACTER'] =$ChHar; 
 }
 elseif ($back1==8)
 {
 	$ChHar="Я прямо говорю о том, на что прочие предпочитают лишь намекнуть, или промолчать. ";
 	$_SESSION['HARACTER'] =$ChHar; 
 }
}

if ($_SESSION['BACKGROUND']=="Беспризорник")
{
 if ($back2==1)
 {
 	$ideal="Уважение. Все люди, богатые ли они, или бедные, достойны уважения. ";
 	$_SESSION['IDEAL'] =$ideal; 
 }
 elseif ($back2==2)
 {
 	$ideal="Общность. Вы должны заботиться друг о друге, ведь
никто другой этого не сделает.";
 	$_SESSION['IDEAL'] =$ideal; 
 }
 elseif ($back2==3)
 {
 	$ideal="Перемены. Убогие возвысятся, а великие падут. Перемены в природе вещей. ";
 	$_SESSION['IDEAL'] =$ideal; 
 }
 elseif ($back2==4)
 {
 	$ideal="Люди. Я помогаю тем, кто помогает мне. Это позволяет нам выжить. ";
 	$_SESSION['IDEAL'] =$ideal; 
 }
 elseif ($back2==5)
 {
 	$ideal="Устремление. Я готов доказать, что достоин лучшей
жизни. ";
 	$_SESSION['IDEAL'] =$ideal; 
 }
 elseif ($back2==6)
 {
 	$ideal="Возмездие. Нужно показать богачам, чего стоит
жизнь и смерть в трущобах";
 	$_SESSION['IDEAL'] =$ideal; 
 }
}

if ($_SESSION['BACKGROUND']=="Беспризорник")
{
 if ($back3==1)
 {
 	$privyaz="Мой город или деревня это мой дом, и я буду защитить его. ";
 	$_SESSION['IDEAL'] =$privyaz; 
 }
 elseif ($back3==2)
 {
 	$privyaz="Я спонсирую приют, чтобы оградить других от того,
что пришлось пережить мне. ";
 	$_SESSION['PRIVYAZ'] =$privyaz; 
 }
 elseif ($back3==3)
 {
 	$privyaz="Я выжил лишь благодаря другому беспризорнику, что
передал мне знания, как вести себя на улицах.  ";
 	$_SESSION['PRIVYAZ'] =$privyaz; 
 }
 elseif ($back3==4)
 {
 	$privyaz="Я в неоплатном долгу перед человеком, что сжалился
и помог мне. 
";
 	$_SESSION['PRIVYAZ'] =$privyaz; 
 }
 elseif ($back3==5)
 {
 	$privyaz="Я избавился от нищеты, ограбив важного человека, и
меня разыскивают.";
 	$_SESSION['PRIVYAZ'] =$privyaz; 
 }
 elseif ($back3==6)
 {
 	$privyaz="Никто не должен пережить те трудности, через которые пришлось пройти мне. ";
 	$_SESSION['PRIVYAZ'] =$privyaz; 
 }
}





if ($_SESSION['BACKGROUND']=="Беспризорник")
{
 if ($back4==1)
 {
 	$slab="Если я в меньшинстве, то я убегу из битвы. ";
 	$_SESSION['SLAB'] =$slab; 
 }
 elseif ($back4==2)
 {
 	$slab="Золото в любом виде выглядит для меня как большая
куча денег, и я сделаю всё, чтобы его у меня стало больше. ";
 	$_SESSION['SLAB'] =$slab; 
 }
 elseif ($back4==3)
 {
 	$slab="Я никогда не доверяю полностью кому бы то ни было,
кроме себя. ";
 	$_SESSION['SLAB'] =$slab; 
 }
 elseif ($back4==4)
 {
 	$slab="Я предпочту убить кого-нибудь во сне, нежели в честном поединке. 
";
 	$_SESSION['SLAB'] =$slab; 
 }
 elseif ($back4==5)
 {
 	$slab="Это не воровство, если я взял то, в чём нуждаюсь
больше, чем кто-либо другой. ";
 	$_SESSION['SLAB'] =$slab; 
 }
 elseif ($back4==6)
 {
 	$slab="Те, кто не могут позаботиться о себе, получат то, что
заслужили.";
 	$_SESSION['SLAB'] =$slab; 
 }
}

?>