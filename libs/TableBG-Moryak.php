<?php


if ($_SESSION['BACKGROUND']=="Моряк")
{
 if ($back1==1)
 {
 	$ChHar="Друзья знают, что всегда могут на меня положиться.";
 	$_SESSION['HARACTER'] =$ChHar; 
 }
  elseif ($back1==2)
 {
 	$ChHar="Я усердно тружусь, чтобы потом можно было хорошо
отдохнуть. ";
 	$_SESSION['HARACTER'] =$ChHar; 
 }
 elseif ($back1==3)
 {
 	$ChHar="Мне нравится, когда работа выполнена, особенно
если её можно поручить другому. ";
 	$_SESSION['HARACTER'] =$ChHar; 
 }
 elseif ($back1==4)
 {
 	$ChHar="Мне нравится заходить в новые порты и находить
друзей за кружечкой эля. ";
 	$_SESSION['HARACTER'] =$ChHar; 
 }
 elseif ($back1==5)
 {
 	$ChHar="Я готов приврать, чтобы получился хороший рассказ.";
 	$_SESSION['HARACTER'] =$ChHar; 
 }
 elseif ($back1==6)
 {
 	$ChHar="Для меня драка в таверне — отличный способ познакомиться с новым городом. ";
 	$_SESSION['HARACTER'] =$ChHar; 
 }
 elseif ($back1==7)
 {
 	$ChHar="Я никогда не откажусь от пари. ";
 	$_SESSION['HARACTER'] =$ChHar; 
 }
 elseif ($back1==8)
 {
 	$ChHar="Я ругаюсь как банда орков.";
 	$_SESSION['HARACTER'] =$ChHar; 
 }
}

if ($_SESSION['BACKGROUND']=="Моряк")
{
 if ($back2==1)
 {
 	$ideal="Уважение. Корабль держится целым благодаря взаимному уважению капитана и экипажа.";
 	$_SESSION['IDEAL'] =$ideal; 
 }
 elseif ($back2==2)
 {
 	$ideal="Справедливость. Все мы делаем одно дело, и награду
должны делить поровну.";
 	$_SESSION['IDEAL'] =$ideal; 
 }
 elseif ($back2==3)
 {
 	$ideal="Свобода. Море это свобода — свобода идти куда
угодно и делать что угодно. ";
 	$_SESSION['IDEAL'] =$ideal; 
 }
 elseif ($back2==4)
 {
 	$ideal="Власть. Я хищник, а другие корабли в море — моя
добыча.";
 	$_SESSION['IDEAL'] =$ideal; 
 }
 elseif ($back2==5)
 {
 	$ideal="Команда. Я предан экипажу, а не идеалам.";
 	$_SESSION['IDEAL'] =$ideal; 
 }
 elseif ($back2==6)
 {
 	$ideal="Стремление. Когда-нибудь у меня будет свой корабль,
и я проложу курс куда захочу.";
 	$_SESSION['IDEAL'] =$ideal; 
 }
}

if ($_SESSION['BACKGROUND']=="Моряк")
{
 if ($back3==1)
 {
 	$privyaz="В первую очередь я верен своему капитану, всё
остальное вторично.";
 	$_SESSION['IDEAL'] =$privyaz; 
 }
 elseif ($back3==2)
 {
 	$privyaz="Я всегда буду помнить свой первый корабль.";
 	$_SESSION['PRIVYAZ'] =$privyaz; 
 }
 elseif ($back3==3)
 {
 	$privyaz="В гавани у меня есть возлюбленная, глаза которой
стоят того, чтобы оставить ради неё море.";
 	$_SESSION['PRIVYAZ'] =$privyaz; 
 }
 elseif ($back3==4)
 {
 	$privyaz="Как-то раз мне выплатили не полную долю с дохода,
и я хочу вернуть себе причитающееся.";
 	$_SESSION['PRIVYAZ'] =$privyaz; 
 }
 elseif ($back3==5)
 {
 	$privyaz="Моя преданность правителю непоколебима. ";
 	$_SESSION['PRIVYAZ'] =$privyaz; 
 }
 elseif ($back3==6)
 {
 	$privyaz="Безжалостные пираты убили моего капитана и почти
всю команду, разграбили корабль, и оставили меня
умирать. Месть будет страшной.";
 	$_SESSION['PRIVYAZ'] =$privyaz; 
 }
}

if ($_SESSION['BACKGROUND']=="Моряк")
{
 if ($back4==1)
 {
 	$slab="Я выполняю приказы, даже если считаю, что они
несправедливые";
 	$_SESSION['SLAB'] =$slab; 
 }
 elseif ($back4==2)
 {
 	$slab="Я наплету с три короба, лишь бы не делать лишнюю работу. ";
 	$_SESSION['SLAB'] =$slab; 
 }
 elseif ($back4==3)
 {
 	$slab="Когда кто-то бросает мне вызов, я никогда не отступлюсь, какой бы опасной не была ситуация. ";
 	$_SESSION['SLAB'] =$slab; 
 }
 elseif ($back4==4)
 {
 	$slab="Начав пить, я не могу остановиться. ";
 	$_SESSION['SLAB'] =$slab; 
 }
 elseif ($back4==5)
 {
 	$slab="Не могу ничего поделать, но деньги у меня не задерживаются.";
 	$_SESSION['SLAB'] =$slab; 
 }
 elseif ($back4==6)
 {
 	$slab="Моя гордость меня когда-нибудь погубит. ";
 	$_SESSION['SLAB'] =$slab; 
 }
}

?>