<?php

$soldat8=rand(1,8);

if ($_SESSION['BACKGROUND']=="Отшельник")
{
	if ($soldat8==1)
	{
		$soldSpec="Офицер";
		$_SESSION['SoldSpec'] =$soldSpec; 
	}
	elseif ($soldat8==2)
	{
		$soldSpec="Разведчик";
		$_SESSION['SoldSpec'] =$soldSpec; 
	}
	elseif ($soldat8==3)
	{
		$soldSpec="Пехотинец";
		$_SESSION['SoldSpec'] =$soldSpec; 
	}
	elseif ($soldat8==4)
	{
		$soldSpec="Кавалерист";
		$_SESSION['SoldSpec'] =$soldSpec; 
	}
	elseif ($soldat8==5)
	{
		$soldSpec="Врач";
		$_SESSION['SoldSpec'] =$soldSpec; 
	}
	elseif ($soldat8==6)
	{
		$soldSpec="Интендант";
		$_SESSION['SoldSpec'] =$soldSpec; 
	}
	elseif ($soldat8==7)
	{
		$soldSpec="Знаменосец ";
		$_SESSION['SoldSpec'] =$soldSpec; 
	}
	elseif ($hero10==8)
	{
		$soldSpec="Обслуживающий персонал (повар, кузнец, и т. п.) ";
		$_SESSION['SoldSpec'] =$soldSpec;
	}
	
}
	



if ($_SESSION['BACKGROUND']=="Отшельник")
{
 if ($back1==1)
 {
 	$ChHar="Я так много прожил в изоляции, что редко говорю,
предпочитая жесты и редкое мычание. ";
 	$_SESSION['HARACTER'] =$ChHar; 
 }
  elseif ($back1==2)
 {
 	$ChHar="Я абсолютно безмятежен, даже в самых ужасных ситуациях. ";
 	$_SESSION['HARACTER'] =$ChHar; 
 }
 elseif ($back1==3)
 {
 	$ChHar="Я ужасно сопереживаю всем, кто страдает.";
 	$_SESSION['HARACTER'] =$ChHar; 
 }
 elseif ($back1==4)
 {
 	$ChHar="Я связываю всё, что происходит со мной, с грандиозным замыслом космического масштаба.";
 	$_SESSION['HARACTER'] =$ChHar; 
 }
 elseif ($back1==5)
 {
 	$ChHar="Я часто погружаюсь в свои мысли, отвлекаясь от
окружения.";
 	$_SESSION['HARACTER'] =$ChHar; 
 }
 elseif ($back1==6)
 {
 	$ChHar="Мне чужд этикет и общественные ожидания. ";
 	$_SESSION['HARACTER'] =$ChHar; 
 }
 elseif ($back1==7)
 {
 	$ChHar="У лидера моей общины были высказывания для любой
ситуации, и я стремлюсь поделиться этой мудростью. ";
 	$_SESSION['HARACTER'] =$ChHar; 
 }
 elseif ($back1==8)
 {
 	$ChHar="Я работаю над великой философской теорией и
люблю тех, кто разделяет мои идеи.";
 	$_SESSION['HARACTER'] =$ChHar; 
 }
}

if ($_SESSION['BACKGROUND']=="Отшельник")
{
 if ($back2==1)
 {
 	$ideal="Всеобщее благо. Мои дары предназначены для всех,
я не должен использовать их в одиночку.";
 	$_SESSION['IDEAL'] =$ideal; 
 }
 elseif ($back2==2)
 {
 	$ideal="Логика. Эмоции не должны затмевать наше видение
того, что истинно и справедливо, а также наше логическое мышление. ";
 	$_SESSION['IDEAL'] =$ideal; 
 }
 elseif ($back2==3)
 {
 	$ideal="Свободомыслие. Изыскания и любопытство —
столпы прогресса. ";
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
 	$ideal="Сам живи и другим не мешай. Вмешиваясь в дела других, причиняешь одни лишь проблемы. ";
 	$_SESSION['IDEAL'] =$ideal; 
 }
 elseif ($back2==6)
 {
 	$ideal="Самопознание. Познаешь себя — познаешь всё вокруг.";
 	$_SESSION['IDEAL'] =$ideal; 
 }
}

if ($_SESSION['BACKGROUND']=="Отшельник")
{
 if ($back3==1)
 {
 	$privyaz="Самое важное для меня — это другие отшельники,
жившие рядом, или мой орден. ";
 	$_SESSION['IDEAL'] =$privyaz; 
 }
 elseif ($back3==2)
 {
 	$privyaz="Я уединился, чтобы спрятаться от тех, кто мог охотиться за мной. Когда-нибудь я сам брошу им вызов. ";
 	$_SESSION['PRIVYAZ'] =$privyaz; 
 }
 elseif ($back3==3)
 {
 	$privyaz="Я всё ещё ищу просветление, которого не достиг в уединении, но оно по-прежнему ускользает от меня. ";
 	$_SESSION['PRIVYAZ'] =$privyaz; 
 }
 elseif ($back3==4)
 {
 	$privyaz="Я уединился, потому что влюбился в ту, с кем мне не
суждено жить. ";
 	$_SESSION['PRIVYAZ'] =$privyaz; 
 }
 elseif ($back3==5)
 {
 	$privyaz="Моя изоляция позволила познать великое зло, уничтожить которое могу один лишь я. ";
 	$_SESSION['PRIVYAZ'] =$privyaz; 
 }
 elseif ($back3==6)
 {
 	$privyaz="Если моё откровение сбудется, мир будет обречён на
гибель. ";
 	$_SESSION['PRIVYAZ'] =$privyaz; 
 }
}

if ($_SESSION['BACKGROUND']=="Отшельник")
{
 if ($back4==1)
 {
 	$slab="Теперь, вернувшись в мир, я слишком сильно увлекаюсь его радостями. ";
 	$_SESSION['SLAB'] =$slab; 
 }
 elseif ($back4==2)
 {
 	$slab="Я скрываю тёмные, кровожадные мысли, не ушедшие
ни после изоляции, ни после медитаций. ";
 	$_SESSION['SLAB'] =$slab; 
 }
 elseif ($back4==3)
 {
 	$slab="Я категоричен в мыслях и подходе к жизни. ";
 	$_SESSION['SLAB'] =$slab; 
 }
 elseif ($back4==4)
 {
 	$slab="Я позволяю жажде победить в споре становиться
сильнее дружбы и гармонии. ";
 	$_SESSION['SLAB'] =$slab; 
 }
 elseif ($back4==5)
 {
 	$slab="Я слишком сильно рискую, стремясь найти утраченные частички знаний.";
 	$_SESSION['SLAB'] =$slab; 
 }
 elseif ($back4==6)
 {
 	$slab="Мне нравится хранить тайны, и я ими ни с кем не делюсь. ";
 	$_SESSION['SLAB'] =$slab; 
 }
}

?>