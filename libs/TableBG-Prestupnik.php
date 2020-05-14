<?php

$prestupbik8=rand(1,8);

if ($_SESSION['BACKGROUND']=="Преступник")
{
	if ($prestupbik8==1)
	{
		$prestSpec="Взломщик";
		$_SESSION['PrestSpec'] =$prestSpec; 
	}
	elseif ($otsh8==2)
	{
		$prestSpec="Вымогатель";
		$_SESSION['PrestSpec'] =$prestSpec; 
	}
	elseif ($otsh8==3)
	{
		$prestSpec="Грабитель с большой дороги ";
		$_SESSION['PrestSpec'] =$prestSpec; 
	}
	elseif ($otsh8==4)
	{
		$prestSpec="Карманник ";
		$_SESSION['PrestSpec'] =$prestSpec; 
	}
	elseif ($otsh8==5)
	{
		$prestSpec="Контрабандист";
		$_SESSION['PrestSpec'] =$prestSpec; 
	}
	elseif ($otsh8==6)
	{
		$prestSpec="Наёмный убийца ";
		$_SESSION['PrestSpec'] =$prestSpec; 
	}
	elseif ($otsh8==7)
	{
		$prestSpec="Скупщик краденого ";
		$_SESSION['PrestSpec'] =$prestSpec; 
	}
	elseif ($hero10==8)
	{
		$prestSpec="Шантажист.";
		$_SESSION['PrestSpec'] =$prestSpec;
	}
	
}
	



if ($_SESSION['BACKGROUND']=="Преступник")
{
 if ($back1==1)
 {
 	$ChHar="У меня всегда есть план на случай, если всё пойдёт не
так как задумано.";
 	$_SESSION['HARACTER'] =$ChHar; 
 }
  elseif ($back1==2)
 {
 	$ChHar="Я всегда хладнокровен, несмотря ни на что. Я никогда
не повышаю голоса и не позволяю эмоциям управлять мной. ";
 	$_SESSION['HARACTER'] =$ChHar; 
 }
 elseif ($back1==3)
 {
 	$ChHar="На новом месте я первым делом подмечаю, где находятся различные ценности — или места, где они могут быть спрятаны. ";
 	$_SESSION['HARACTER'] =$ChHar; 
 }
 elseif ($back1==4)
 {
 	$ChHar="Я предпочту обзавестись ещё один другом, нежели
ещё одним врагом. ";
 	$_SESSION['HARACTER'] =$ChHar; 
 }
 elseif ($back1==5)
 {
 	$ChHar="У меня проблемы с доверием. Те, кто выглядят самыми порядочными, зачастую скрывают множество
грязных секретов. ";
 	$_SESSION['HARACTER'] =$ChHar; 
 }
 elseif ($back1==6)
 {
 	$ChHar="Мне наплевать на риск. Никогда не говорите мне о
возможных последствиях. ";
 	$_SESSION['HARACTER'] =$ChHar; 
 }
 elseif ($back1==7)
 {
 	$ChHar="Наилучший способ заставить меня сделать что-то —
сказать мне этого не делать. ";
 	$_SESSION['HARACTER'] =$ChHar; 
 }
 elseif ($back1==8)
 {
 	$ChHar="Я срываюсь даже от малейшего оскорбления";
 	$_SESSION['HARACTER'] =$ChHar; 
 }
}

if ($_SESSION['BACKGROUND']=="Преступник")
{
 if ($back2==1)
 {
 	$ideal="Честь. Я не краду у своих «коллег». ";
 	$_SESSION['IDEAL'] =$ideal; 
 }
 elseif ($back2==2)
 {
 	$ideal="Свобода. Любые оковы должны быть сломлены, как
и те, кто их выковал.";
 	$_SESSION['IDEAL'] =$ideal; 
 }
 elseif ($back2==3)
 {
 	$ideal="Милосердие. Я краду у богачей, чтобы помочь людям
в беде. ";
 	$_SESSION['IDEAL'] =$ideal; 
 }
 elseif ($back2==4)
 {
 	$ideal="Сила. Уединение и созерцание — путь к мистической
и магической силе. ";
 	$_SESSION['IDEAL'] =$ideal; 
 }
 elseif ($back2==5)
 {
 	$ideal="Жадность. Я сделаю всё что угодно, лишь бы разбогатеть. ";
 	$_SESSION['IDEAL'] =$ideal; 
 }
 elseif ($back2==6)
 {
 	$ideal="Друзья. Я верен не каким-то там идеалам, но своим
друзьям. А все остальные могут катиться к чертям. ";
 	$_SESSION['IDEAL'] =$ideal; 
 }
}

if ($_SESSION['BACKGROUND']=="Преступник")
{
 if ($back3==1)
 {
 	$privyaz="Я пытаюсь оплатить старый долг одному щедрому
благодетелю. ";
 	$_SESSION['IDEAL'] =$privyaz; 
 }
 elseif ($back3==2)
 {
 	$privyaz="Свои нечестно заработанные деньги я трачу на помощь своей семье. ";
 	$_SESSION['PRIVYAZ'] =$privyaz; 
 }
 elseif ($back3==3)
 {
 	$privyaz="У меня забрали нечто важное, и я намереваюсь выкрасть это обратно. 
";
 	$_SESSION['PRIVYAZ'] =$privyaz; 
 }
 elseif ($back3==4)
 {
 	$privyaz="Я стану величайшим вором из всех, когда-либо живших. ";
 	$_SESSION['PRIVYAZ'] =$privyaz; 
 }
 elseif ($back3==5)
 {
 	$privyaz="Я виновен в ужасающем преступлении. Надеюсь, я
смогу простить себя за это. ";
 	$_SESSION['PRIVYAZ'] =$privyaz; 
 }
 elseif ($back3==6)
 {
 	$privyaz="Близкий человек погиб из-за ошибки, которую я совершил. Это не повториться вновь. ";
 	$_SESSION['PRIVYAZ'] =$privyaz; 
 }
}

if ($_SESSION['BACKGROUND']=="Преступник")
{
 if ($back4==1)
 {
 	$slab="Когда я вижу что-то ценное, я не могу думать ни о чём
другом, кроме мыслей о том, как это украсть. ";
 	$_SESSION['SLAB'] =$slab; 
 }
 elseif ($back4==2)
 {
 	$slab="Когда я становлюсь перед выбором между друзьями
и деньгами, я обычно выбираю деньги. ";
 	$_SESSION['SLAB'] =$slab; 
 }
 elseif ($back4==3)
 {
 	$slab="Если есть какой-то план, я его наверняка забуду. А
если не забуду, то попросту проигнорирую. ";
 	$_SESSION['SLAB'] =$slab; 
 }
 elseif ($back4==4)
 {
 	$slab="У меня есть привычка, которая выдаёт меня, когда я вру. ";
 	$_SESSION['SLAB'] =$slab; 
 }
 elseif ($back4==5)
 {
 	$slab="Я поджимаю хвост и убегаю, когда всё складывается
плохо.";
 	$_SESSION['SLAB'] =$slab; 
 }
 elseif ($back4==6)
 {
 	$slab="Невинный человек находится в тюрьме из-за преступления, что я совершил. Меня это не беспокоит. ";
 	$_SESSION['SLAB'] =$slab; 
 }
}

?>