<?php

$mud8=rand(1,8);

if ($_SESSION['BACKGROUND']=="Мудрец")
{
	if ($mud8==1)
	{
		$mudSpec="Академик с испорченной репутацией ";
		$_SESSION['MudSpec'] =$mudSpec; 
	}
	elseif ($mud8==2)
	{
		$mudSpec="Алхимик ";
		$_SESSION['MudSpec'] =$mudSpec; 
	}
	elseif ($mud8==3)
	{
		$mudSpec="Астроном";
		$_SESSION['MudSpec'] =$mudSpec; 
	}
	elseif ($mud8==4)
	{
		$mudSpec="Библиотекарь";
		$_SESSION['MudSpec'] =$mudSpec; 
	}
	elseif ($mud8==5)
	{
		$mudSpec="Исследователь ";
		$_SESSION['MudSpec'] =$mudSpec; 
	}
	elseif ($mud8==6)
	{
		$mudSpec="Писец ";
		$_SESSION['MudSpec'] =$mudSpec; 
	}
	elseif ($mud8==7)
	{
		$mudSpec="Подмастерье волшебника ";
		$_SESSION['MudSpec'] =$mudSpec; 
	}
	elseif ($mud8==8)
	{
		$mudSpec="Профессор";
		$_SESSION['MudSpec'] =$mudSpec;
	}
}
	



if ($_SESSION['BACKGROUND']=="Мудрец")
{
 if ($back1==1)
 {
 	$ChHar="Я использую многосложные слова, создающие впечатление образованности. ";
 	$_SESSION['HARACTER'] =$ChHar; 
 }
  elseif ($back1==2)
 {
 	$ChHar="Я прочитал все книги в величайших библиотеках
мира — или, по крайней мере, говорю так. ";
 	$_SESSION['HARACTER'] =$ChHar; 
 }
 elseif ($back1==3)
 {
 	$ChHar="Я привык помогать тем, кто не так умён как я, и терпеливо всем всё объясняю. ";
 	$_SESSION['HARACTER'] =$ChHar; 
 }
 elseif ($back1==4)
 {
 	$ChHar="Больше всего на свете я люблю тайны. ";
 	$_SESSION['HARACTER'] =$ChHar; 
 }
 elseif ($back1==5)
 {
 	$ChHar="Прежде чем принять решение, я выслушаю аргументы
обеих спорящих сторон. ";
 	$_SESSION['HARACTER'] =$ChHar; 
 }
 elseif ($back1==6)
 {
 	$ChHar="Я ... говорю ... медленно ... когда разговариваю ... с
идиотами, ... то есть ... практически ... всегда. ";
 	$_SESSION['HARACTER'] =$ChHar; 
 }
 elseif ($back1==7)
 {
 	$ChHar="В социальном взаимодействии я ужасно неуклюж. ";
 	$_SESSION['HARACTER'] =$ChHar; 
 }
 elseif ($back1==8)
 {
 	$ChHar="Я убеждён, что остальные постоянно хотят украсть
мои тайны";
 	$_SESSION['HARACTER'] =$ChHar; 
 }
}

if ($_SESSION['BACKGROUND']=="Мудрец")
{
 if ($back2==1)
 {
 	$ideal="Знание. Путь к силе и самосовершенствованию лежит
в знаниях";
 	$_SESSION['IDEAL'] =$ideal; 
 }
 elseif ($back2==2)
 {
 	$ideal="Красота. Красота ведёт нас к тому, что истинно. ";
 	$_SESSION['IDEAL'] =$ideal; 
 }
 elseif ($back2==3)
 {
 	$ideal="Логика. Эмоции не должны подавлять логическое
мышление.";
 	$_SESSION['IDEAL'] =$ideal; 
 }
 elseif ($back2==4)
 {
 	$ideal="Свобода. Ничто не должно сдерживать бесконечные
варианты всех возможных исходов. ";
 	$_SESSION['IDEAL'] =$ideal; 
 }
 elseif ($back2==5)
 {
 	$ideal="Власть. Знания — путь к власти и контролю.";
 	$_SESSION['IDEAL'] =$ideal; 
 }
 elseif ($back2==6)
 {
 	$ideal="Самосовершенствование. Цель жизни в познании —
самосовершенствование.";
 	$_SESSION['IDEAL'] =$ideal; 
 }
}

if ($_SESSION['BACKGROUND']=="Мудрец")
{
 if ($back3==1)
 {
 	$privyaz="Я должен защищать своих учеников. 
";
 	$_SESSION['IDEAL'] =$privyaz; 
 }
 elseif ($back3==2)
 {
 	$privyaz="У меня есть древний текст, содержащий ужасную
тайну, и который не должен попасть в чужие руки. ";
 	$_SESSION['PRIVYAZ'] =$privyaz; 
 }
 elseif ($back3==3)
 {
 	$privyaz="Я работаю над сохранением библиотеки, университета, скриптория или монастыря. ";
 	$_SESSION['PRIVYAZ'] =$privyaz; 
 }
 elseif ($back3==4)
 {
 	$privyaz="Труд всей моей жизни это серия томов, посвящённая
определённой области знаний. ";
 	$_SESSION['PRIVYAZ'] =$privyaz; 
 }
 elseif ($back3==5)
 {
 	$privyaz="Всю свою жизнь я ищу ответ на один вопрос. ";
 	$_SESSION['PRIVYAZ'] =$privyaz; 
 }
 elseif ($back3==6)
 {
 	$privyaz="Ради знаний я продал душу. Когда-нибудь я надеюсь
совершить великое деяние и вернуть её себе.";
 	$_SESSION['PRIVYAZ'] =$privyaz; 
 }
}

if ($_SESSION['BACKGROUND']=="Мудрец")
{
 if ($back4==1)
 {
 	$slab="Меня легко отвлечь, пообещав информацию. ";
 	$_SESSION['SLAB'] =$slab; 
 }
 elseif ($back4==2)
 {
 	$slab="Для раскрытия древних тайн можно пожертвовать
современной цивилизацией.";
 	$_SESSION['SLAB'] =$slab; 
 }
 elseif ($back4==3)
 {
 	$slab="Увидев демона, большинство закричит и убежит.
Я же остановлюсь и буду изучать его анатомию. ";
 	$_SESSION['SLAB'] =$slab; 
 }
 elseif ($back4==4)
 {
 	$slab="Я избегаю очевидных решений, пользуясь замысловатыми. ";
 	$_SESSION['SLAB'] =$slab; 
 }
 elseif ($back4==5)
 {
 	$slab="Я говорю, не обдумывая слова, чем часто оскорбляю
других. ";
 	$_SESSION['SLAB'] =$slab; 
 }
 elseif ($back4==6)
 {
 	$slab="Ради спасения своей или чьей-либо ещё жизни я выболтаю любую тайну.";
 	$_SESSION['SLAB'] =$slab; 
 }
}

?>