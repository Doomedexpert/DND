<?php

$hero10=rand(1,10);

if ($_SESSION['BACKGROUND']=="Народный герой")
{
	if ($hero10==1)
	{
		$heroSpec="Я дал отпор прислужникам тирана.";
		$_SESSION['MudSpec'] =$heroSpec; 
	}
	elseif ($hero10==2)
	{
		$heroSpec="Я спас народ от природного катаклизма.  ";
		$_SESSION['HeroSpec'] =$heroSpec; 
	}
	elseif ($hero10==3)
	{
		$heroSpec="Я сразился один на один с ужасным чудищем. ";
		$_SESSION['HeroSpec'] =$heroSpec; 
	}
	elseif ($hero10==4)
	{
		$heroSpec="Я обокрал продажного торговца, чтобы помочь бедным.";
		$_SESSION['HeroSpec'] =$heroSpec; 
	}
	elseif ($hero10==5)
	{
		$heroSpec="Я возглавил ополчение, отбросившее врага.  ";
		$_SESSION['HeroSpec'] =$heroSpec; 
	}
	elseif ($hero10==6)
	{
		$heroSpec="Я вломился в замок тирана и украл оружие для своего народа.  ";
		$_SESSION['HeroSpec'] =$heroSpec; 
	}
	elseif ($hero10==7)
	{
		$heroSpec="Я учил крестьян, как использовать обычные инструменты в качестве оружия против солдат тирана. ";
		$_SESSION['HeroSpec'] =$heroSpec; 
	}
	elseif ($hero10==8)
	{
		$heroSpec="Лорд отменил непопулярный закон после того как я
выступил с акцией протеста. ";
		$_SESSION['HeroSpec'] =$heroSpec;
	}
	elseif ($hero10==9)
	{
		$heroSpec="Небожитель, фея или другое подобное существо благословило меня или открыло тайну моего рождения. ";
		$_SESSION['HeroSpec'] =$heroSpec;
	}
	elseif ($hero10==10)
	{
		$heroSpec="Вступив в армию лорда, я получил хорошее звание и
заслужил благодарности. ";
		$_SESSION['HeroSpec'] =$heroSpec;
	}
}
	



if ($_SESSION['BACKGROUND']=="Народный герой")
{
 if ($back1==1)
 {
 	$ChHar="Я сужу других по поступкам, а не словам.";
 	$_SESSION['HARACTER'] =$ChHar; 
 }
  elseif ($back1==2)
 {
 	$ChHar="Если кто-то в беде, я всегда готов прийти на помощь. ";
 	$_SESSION['HARACTER'] =$ChHar; 
 }
 elseif ($back1==3)
 {
 	$ChHar="Задумав что-то, я прямолинейно иду к цели, невзирая
на помехи.";
 	$_SESSION['HARACTER'] =$ChHar; 
 }
 elseif ($back1==4)
 {
 	$ChHar="У меня обострённое чувство справедливости, и в
споре я всегда ищу самого честного решения. ";
 	$_SESSION['HARACTER'] =$ChHar; 
 }
 elseif ($back1==5)
 {
 	$ChHar="Я уверен в своих способностях, и стараюсь внушить
такую же уверенность в других. ";
 	$_SESSION['HARACTER'] =$ChHar; 
 }
 elseif ($back1==6)
 {
 	$ChHar="Пусть думают другие. Я предпочитаю действовать. ";
 	$_SESSION['HARACTER'] =$ChHar; 
 }
 elseif ($back1==7)
 {
 	$ChHar="Я неправильно произношу длинные слова, когда пытаюсь выглядеть умнее. ";
 	$_SESSION['HARACTER'] =$ChHar; 
 }
 elseif ($back1==8)
 {
 	$ChHar="Я быстро устаю. Когда уже я найду свою судьбу? ";
 	$_SESSION['HARACTER'] =$ChHar; 
 }
}

if ($_SESSION['BACKGROUND']=="Народный герой")
{
 if ($back2==1)
 {
 	$ideal="Уважение. Нужно относиться друг к другу с достоинством и уважением. ";
 	$_SESSION['IDEAL'] =$ideal; 
 }
 elseif ($back2==2)
 {
 	$ideal="Справедливость. Закон не должен делать ни для кого
исключений, и никто не может стать выше закона. ";
 	$_SESSION['IDEAL'] =$ideal; 
 }
 elseif ($back2==3)
 {
 	$ideal="Свобода. Тираны не должны угнетать народ.";
 	$_SESSION['IDEAL'] =$ideal; 
 }
 elseif ($back2==4)
 {
 	$ideal="Мощь. Если я стану сильным, я смогу брать то, что захочу — и я это заслуживаю. ";
 	$_SESSION['IDEAL'] =$ideal; 
 }
 elseif ($back2==5)
 {
 	$ideal="Искренность. Нет ничего хорошего в том, что ты притворяешься тем, кем не являешься.";
 	$_SESSION['IDEAL'] =$ideal; 
 }
 elseif ($back2==6)
 {
 	$ideal="Судьба. Никто и ничто не собьёт меня с пути к высшему призванию. ";
 	$_SESSION['IDEAL'] =$ideal; 
 }
}

if ($_SESSION['BACKGROUND']=="Народный герой")
{
 if ($back3==1)
 {
 	$privyaz="У меня есть семья, но я не знаю, где она. Надеюсь, когда-нибудь я увижу их вновь.";
 	$_SESSION['IDEAL'] =$privyaz; 
 }
 elseif ($back3==2)
 {
 	$privyaz="Я работал на земле, я люблю землю, и я буду защищать землю.";
 	$_SESSION['PRIVYAZ'] =$privyaz; 
 }
 elseif ($back3==3)
 {
 	$privyaz="Один благородный меня дико поколотил, и я вымещаю свой гнев на всех встреченных задирах. ";
 	$_SESSION['PRIVYAZ'] =$privyaz; 
 }
 elseif ($back3==4)
 {
 	$privyaz="Мои инструменты — символ моей былой жизни, и я
ношу их, чтобы не забывать корни. ";
 	$_SESSION['PRIVYAZ'] =$privyaz; 
 }
 elseif ($back3==5)
 {
 	$privyaz="Я защищаю тех, кто не может защитить себя сам.";
 	$_SESSION['PRIVYAZ'] =$privyaz; 
 }
 elseif ($back3==6)
 {
 	$privyaz="Хотел бы я, чтобы та, кого я любил в детстве, разделила со мной судьбу. ";
 	$_SESSION['PRIVYAZ'] =$privyaz; 
 }
}

if ($_SESSION['BACKGROUND']=="Народный герой")
{
 if ($back4==1)
 {
 	$slab="Тиран, правящий моими землями, ни перед чем не
остановится, лишь бы убить меня. ";
 	$_SESSION['SLAB'] =$slab; 
 }
 elseif ($back4==2)
 {
 	$slab="Я слепо верю в своё предназначение, и не замечаю ни
своих недостатков, ни смертельных опасностей. ";
 	$_SESSION['SLAB'] =$slab; 
 }
 elseif ($back4==3)
 {
 	$slab="Те, кто знают меня молодым, знают и мою самую постыдную тайну, так что я никогда не вернусь домой. ";
 	$_SESSION['SLAB'] =$slab; 
 }
 elseif ($back4==4)
 {
 	$slab="Я беззащитен перед пороками большого города, особенно перед пьянством.";
 	$_SESSION['SLAB'] =$slab; 
 }
 elseif ($back4==5)
 {
 	$slab="Я тайно считаю, что было бы хорошо стать тираном,
правящим землями.";
 	$_SESSION['SLAB'] =$slab; 
 }
 elseif ($back4==6)
 {
 	$slab="Я не доверяю союзникам.";
 	$_SESSION['SLAB'] =$slab; 
 }
}

?>