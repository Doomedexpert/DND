<?
$data = $_POST;
if ($backGr=="Артист")
{
 if ($back==1)
 {
 	$amplua="Акробат";
 	$_SESSION['AMPLUA'] =$amplua; 
 }
 elseif ($back==2)
 {
 	$amplua="Актёр";
 	$_SESSION['AMPLUA'] =$amplua;
 }
 elseif ($back==3)
 {
 	$amplua="Жонглёр";
 	$_SESSION['AMPLUA'] =$amplua;
 }
 elseif ($back==4)
 {
 	$amplua="Музыкант";
 	$_SESSION['AMPLUA'] =$amplua;
 }
 elseif ($back==5)
 {
 	$amplua="Певец";
 	$_SESSION['AMPLUA'] =$amplua;
 }
 elseif ($back==6)
 {
 	$amplua="Пожиратель огня";
 	$_SESSION['AMPLUA'] =$amplua;
 }
 elseif ($back==7)
 {
 	$amplua="Поэт";
 	$_SESSION['AMPLUA'] =$amplua;
 }
 elseif ($back==8)
 {
 	$amplua="Рассказчик";
 	$_SESSION['AMPLUA'] =$amplua;
 }
 elseif ($back==9)
 {
 	$amplua="Танцор";
 	$_SESSION['AMPLUA'] =$amplua;
 }
 elseif ($back==10)
 {
 	$amplua="Шут";
 	$_SESSION['AMPLUA'] =$amplua;
 }
}

if ($backGr=="Артист")
{
 if ($back1==1)
 {
 	$ChHar="Для любой ситуации я найду подходящий рассказ.";
 	$_SESSION['HARACTER'] =$ChHar; 
 }
  elseif ($back1==2)
 {
 	$ChHar="Куда бы я ни пришёл, я начинаю собирать местные слухи и распространять сплетни. ";
 	$_SESSION['HARACTER'] =$ChHar; 
 }
 elseif ($back1==3)
 {
 	$ChHar="Я безнадёжный романтик, всегда ищущий «кого-то особого».  ";
 	$_SESSION['HARACTER'] =$ChHar; 
 }
 elseif ($back1==4)
 {
 	$ChHar="Никто не сердится на меня или возле меня подолгу, так как я могу разрядить любую напряжённую обстановку.  ";
 	$_SESSION['HARACTER'] =$ChHar; 
 }
 elseif ($back1==5)
 {
 	$ChHar="Мне нравятся оскорбления, даже если они направлены на меня.";
 	$_SESSION['HARACTER'] =$ChHar; 
 }
 elseif ($back1==6)
 {
 	$ChHar="Мне обидно, если я не нахожусь в центре внимания.";
 	$_SESSION['HARACTER'] =$ChHar; 
 }
 elseif ($back1==7)
 {
 	$ChHar="Превыше всего я ценю совершенство.";
 	$_SESSION['HARACTER'] =$ChHar; 
 }
 elseif ($back1==8)
 {
 	$ChHar="Моё настроение и намерения меняются так же быстро как ноты в музыке. ";
 	$_SESSION['HARACTER'] =$ChHar; 
 }
}

if ($backGr=="Артист")
{
 if ($back2==1)
 {
 	$ideal="Красота. Выступая, я делаю мир лучше.";
 	$_SESSION['IDEAL'] =$ideal; 
 }
 elseif ($back2==2)
 {
 	$ideal="Традиции. Рассказы, легенды и песни прошлого не должны забываться, так как они учат нас тому, кто мы такие.";
 	$_SESSION['IDEAL'] =$ideal; 
 }
 elseif ($back2==3)
 {
 	$ideal="Творчество. Миру нужны новые идеи и смелые действия.";
 	$_SESSION['IDEAL'] =$ideal; 
 }
 elseif ($back2==4)
 {
 	$ideal="Народ. Мне нравится видеть улыбки на лицах во время выступления. В этом-то всё дело.";
 	$_SESSION['IDEAL'] =$ideal; 
 }
 elseif ($back2==5)
 {
 	$ideal="Жадность. Я занимаюсь всем этим ради денег и славы.";
 	$_SESSION['IDEAL'] =$ideal; 
 }
 elseif ($back2==6)
 {
 	$ideal="Честность. Искусство должно отражать душу; оно должно идти изнутри и показывать, чем мы являемся. ";
 	$_SESSION['IDEAL'] =$ideal; 
 }
}

if ($backGr=="Артист")
{
 if ($back3==1)
 {
 	$privyaz="Мой инструмент — самое драгоценное, что у меня
есть, и он напоминает мне о моей любви. ";
 	$_SESSION['IDEAL'] =$privyaz; 
 }
 elseif ($back3==2)
 {
 	$privyaz="Кто-то украл мой драгоценный инструмент, и когданибудь я верну его. ";
 	$_SESSION['PRIVYAZ'] =$privyaz; 
 }
 elseif ($back3==3)
 {
 	$privyaz="Я хочу быть знаменитым, чего бы это ни стоило. ";
 	$_SESSION['PRIVYAZ'] =$privyaz; 
 }
 elseif ($back3==4)
 {
 	$privyaz="Я боготворю героя старых рассказов, и всегда сравниваю свои поступки с его. ";
 	$_SESSION['PRIVYAZ'] =$privyaz; 
 }
 elseif ($back3==5)
 {
 	$privyaz="Я всё сделаю, чтобы доказать превосходство над
ненавистным конкурентом. ";
 	$_SESSION['PRIVYAZ'] =$privyaz; 
 }
 elseif ($back3==6)
 {
 	$privyaz="Я сделаю что угодно для других членов моей старой
труппы.";
 	$_SESSION['PRIVYAZ'] =$privyaz; 
 }
}





if ($backGr=="Артист")
{
 if ($back4==1)
 {
 	$slab="Я пойду на всё ради славы и известности.";
 	$_SESSION['SLAB'] =$slab; 
 }
 elseif ($back4==2)
 {
 	$slab="Не могу устоять перед смазливым личиком";
 	$_SESSION['SLAB'] =$slab; 
 }
 elseif ($back4==3)
 {
 	$slab="Я не могу вернуться домой из-за скандала. Неприятности такого рода словно преследуют меня.";
 	$_SESSION['SLAB'] =$slab; 
 }
 elseif ($back4==4)
 {
 	$slab="Однажды я высмеял дворянина, который всё ещё хочет оторвать мне голову. Это была ошибка, но я могу
повторить её ещё неоднократно. ";
 	$_SESSION['SLAB'] =$slab; 
 }
 elseif ($back4==5)
 {
 	$slab="Я не могу скрывать свои истинные чувства. Острый
язык всегда приносит мне неприятности. ";
 	$_SESSION['SLAB'] =$slab; 
 }
 elseif ($back4==6)
 {
 	$slab="Я очень стараюсь исправиться, но друзьям не стоит
на меня полагаться.";
 	$_SESSION['SLAB'] =$slab; 
 }
}

?>