<?php
$gild20=rand(1,20);

if ($_SESSION['BACKGROUND']=="Гильдейский ремесленник")
{
	if ($gild20==1)
	{
		$gildSpec="Алхимики и аптекари ";
		$_SESSION['GildSpec'] =$gildSpec; 
	}
	elseif ($gild20==2)
	{
		$gildSpec="Гончары и мастера керамики ";
		$_SESSION['GildSpec'] =$gildSpec; 
	}
	elseif ($gild20==3)
	{
		$gildSpec="Жестянщики, проволочники и литейщики ";
		$_SESSION['GildSpec'] =$gildSpec; 
	}
	elseif ($gild20==4)
	{
		$gildSpec="Каллиграфы, писцы и нотариусы";
		$_SESSION['GildSpec'] =$gildSpec; 
	}
	elseif ($gild20==5)
	{
		$gildSpec="Каменщики и камнерезы";
		$_SESSION['GildSpec'] =$gildSpec; 
	}
	elseif ($gild20==6)
	{
		$gildSpec="Картографы, землемеры и чертёжники";
		$_SESSION['GildSpec'] =$gildSpec; 
	}
	elseif ($gild20==7)
	{
		$gildSpec="Кожевенники, меховщики и дубильщики ";
		$_SESSION['GildSpec'] =$gildSpec; 
	}
	elseif ($gild20==8)
	{
		$gildSpec="Кузнецы и бронники ";
		$_SESSION['GildSpec'] =$gildSpec; 
	}
	elseif ($gild20==9)
	{
		$gildSpec="Металлурги и мастера обработки металла ";
		$_SESSION['GildSpec'] =$gildSpec; 
	}
	elseif ($gild20==10)
	{
		$gildSpec="Пивовары и виноделы";
		$_SESSION['GildSpec'] =$gildSpec; 
	}
	elseif ($gild20==11)
	{
		$gildSpec="Плотники, кровельщики и штукатуры ";
		$_SESSION['GildSpec'] =$gildSpec; 
	}
	elseif ($gild20==12)
	{
		$gildSpec="Повара и пекари";
		$_SESSION['GildSpec'] =$gildSpec; 
	}
	elseif ($gild20==13)
	{
		$gildSpec="Сапожники и чеботари ";
		$_SESSION['GildSpec'] =$gildSpec; 
	}
	elseif ($gild20==14)
	{
		$gildSpec="Стеклодувы и стекольщики ";
		$_SESSION['GildSpec'] =$gildSpec; 
	}
	elseif ($gild20==15)
	{
		$gildSpec="Столяры, бондари и лучных дел мастера ";
		$_SESSION['GildSpec'] =$gildSpec; 
	}
	elseif ($gild20==16)
	{
		$gildSpec="Судостроители и парусные мастера 
";
		$_SESSION['GildSpec'] =$gildSpec; 
	}
	elseif ($gild20==17)
	{
		$gildSpec="Тележники и колёсных дел мастера 
";
		$_SESSION['GildSpec'] =$gildSpec; 
	}
	elseif ($gild20==18)
	{
		$gildSpec="Ткачи и красильщики ";
		$_SESSION['GildSpec'] =$gildSpec; 
	}
	elseif ($gild20==19)
	{
		$gildSpec="Художники, иллюстраторы и маляры ";
		$_SESSION['GildSpec'] =$gildSpec; 
	}
	elseif ($gild20==20)
	{
		$gildSpec="Ювелиры и огранщики";
		$_SESSION['GildSpec'] =$gildSpec; 
	}

}

if ($_SESSION['BACKGROUND']=="Гильдейский ремесленник")
{
 if ($back1==1)
 {
 	$ChHar="Я считаю, что всё, что делается, должно делаться правильно. Ничего не могу с этим поделать — я перфекционист. ";
 	$_SESSION['HARACTER'] =$ChHar; 
 }
  elseif ($back1==2)
 {
 	$ChHar="Я сноб, свысока смотрящий на тех, кто не может оценить изящное искусство.  ";
 	$_SESSION['HARACTER'] =$ChHar; 
 }
 elseif ($back1==3)
 {
 	$ChHar="Мне всегда нужно знать, как всё вокруг устроено, и как нужно обращаться с другими. ";
 	$_SESSION['HARACTER'] =$ChHar; 
 }
 elseif ($back1==4)
 {
 	$ChHar="У меня много остроумных афоризмов и есть пословицы на любой случай. ";
 	$_SESSION['HARACTER'] =$ChHar; 
 }
 elseif ($back1==5)
 {
 	$ChHar="Я груб с теми, у кого нет моей тяги к честному и справедливому труду.";
 	$_SESSION['HARACTER'] =$ChHar; 
 }
 elseif ($back1==6)
 {
 	$ChHar="О своей профессии я могу говорить часами.";
 	$_SESSION['HARACTER'] =$ChHar; 
 }
 elseif ($back1==7)
 {
 	$ChHar="Я не могу легко расставаться с деньгами, и могу сколь угодно долго торговаться.  ";
 	$_SESSION['HARACTER'] =$ChHar; 
 }
 elseif ($back1==8)
 {
 	$ChHar="Благодаря работе я прославился, и хочу, чтобы все это ценили. Меня всегда потрясает, когда другие говорят, что не слышали обо мне. ";
 	$_SESSION['HARACTER'] =$ChHar; 
 }
}

if ($_SESSION['BACKGROUND']=="Гильдейский ремесленник")
{
 if ($back2==1)
 {
 	$ideal="Сообщество. Все цивилизованные народы обязаны
укреплять сообщество и обеспечивать безопасность
цивилизации. ";
 	$_SESSION['IDEAL'] =$ideal; 
 }
 elseif ($back2==2)
 {
 	$ideal="Великодушие. Талант был вручён мне, чтобы я использовал его на благо всего мира.";
 	$_SESSION['IDEAL'] =$ideal; 
 }
 elseif ($back2==3)
 {
 	$ideal="Жадность. Я просто занимаюсь этим из-за денег. ";
 	$_SESSION['IDEAL'] =$ideal; 
 }
 elseif ($back2==4)
 {
 	$ideal="Народ. Я предан своему народу, а не идеям. ";
 	$_SESSION['IDEAL'] =$ideal; 
 }
 elseif ($back2==5)
 {
 	$ideal="Свобода. Все должны быть свободны, чтобы жить
так, как хочется им.";
 	$_SESSION['IDEAL'] =$ideal; 
 }
 elseif ($back2==6)
 {
 	$ideal="Стремление. Я усердно работаю над тем, чтобы стать
в своём деле лучшим.";
 	$_SESSION['IDEAL'] =$ideal; 
 }
}

if ($_SESSION['BACKGROUND']=="Гильдейский ремесленник")
{
 if ($back3==1)
 {
 	$privyaz="Мастерская, где я учился ремеслу, для меня — самое
важное место в мире. ";
 	$_SESSION['IDEAL'] =$privyaz; 
 }
 elseif ($back3==2)
 {
 	$privyaz="Я создал кое для кого удивительную работу, но посчитал его недостойным. Я всё ещё ищу того, кто окажется достоин её. ";
 	$_SESSION['PRIVYAZ'] =$privyaz; 
 }
 elseif ($back3==3)
 {
 	$privyaz="Я по гроб жизни обязан гильдии за то, что она сделала меня тем, кто я есть. ";
 	$_SESSION['PRIVYAZ'] =$privyaz; 
 }
 elseif ($back3==4)
 {
 	$privyaz="Богатство мне нужно для завоевания сердца возлюбленной.  ";
 	$_SESSION['PRIVYAZ'] =$privyaz; 
 }
 elseif ($back3==5)
 {
 	$privyaz="Когда-нибудь я вернусь в гильдию и докажу, что я
лучший из всех. ";
 	$_SESSION['PRIVYAZ'] =$privyaz; 
 }
 elseif ($back3==6)
 {
 	$privyaz="Я мщу силам зла, которые уничтожили моё торговое
дело и разрушили мою жизнь. ";
 	$_SESSION['PRIVYAZ'] =$privyaz; 
 }
}

if ($_SESSION['BACKGROUND']=="Гильдейский ремесленник")
{
 if ($back4==1)
 {
 	$slab="Я сделаю всё что угодно, чтобы заполучить что-то
редкое или очень ценное. ";
 	$_SESSION['SLAB'] =$slab; 
 }
 elseif ($back4==2)
 {
 	$slab="Мне всегда кажется, что меня пытаются обжулить. ";
 	$_SESSION['SLAB'] =$slab; 
 }
 elseif ($back4==3)
 {
 	$slab="Никто не должен знать, что я однажды украл деньги
из казны гильдии. ";
 	$_SESSION['SLAB'] =$slab; 
 }
 elseif ($back4==4)
 {
 	$slab="Мне всегда мало того, что у меня есть — всегда
нужно больше. ";
 	$_SESSION['SLAB'] =$slab; 
 }
 elseif ($back4==5)
 {
 	$slab="Я готов убить ради получения благородного титула.";
 	$_SESSION['SLAB'] =$slab; 
 }
 elseif ($back4==6)
 {
 	$slab="Я ужасно завидую тем, кто может превзойти мой труд. Куда бы я ни пошёл, меня окружают конкуренты. ";
 	$_SESSION['SLAB'] =$slab; 
 }
}

?>