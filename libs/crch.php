 <?php
 $data = $_POST;
 $classID=0;
 $class="";
 if( isset($data['do_warrior']))
 {
 	 $classID=1;
 	$class="Воин";

$_SESSION['CLASS'] =$class; 
$_SESSION['CLASSID'] =$classID; 
    


 
 			
   
 }
 	elseif (isset($data['do_ranger']))
 	{
 	$classID=2;
 	$class="Следопыт";
  $_SESSION['CLASS'] =$class;
  $_SESSION['CLASSID'] =$classID;  
 	
 	
 	}
 	elseif (isset($data['do_wizzard']))
 	{
 	$classID=3;
 	$class="Волшебник";
  $_SESSION['CLASS'] =$class; 
  $_SESSION['CLASSID'] =$classID; 
 	
 	
 	}
 	elseif (isset($data['do_warlock']))
 	{
 	$classID=4;
 	$class="Колдун";
  $_SESSION['CLASS'] =$class;
  $_SESSION['CLASSID'] =$classID;  
 	
 	
 	}
 	elseif (isset($data['do_sorcerer']))
 	{
 	$classID=5;
 	$class="Чародей";
  $_SESSION['CLASS'] =$class;
  $_SESSION['CLASSID'] =$classID; 
 	
 	}
 	elseif (isset($data['do_rogue']))
 	{
 	$classID=6;
 	$class="Плут";
  $_SESSION['CLASS'] =$class;
  $_SESSION['CLASSID'] =$classID;  
 
 	
 	}
 	elseif (isset($data['do_druid']))
 	{
 	$classID=7;
 	$class="Друид";
  $_SESSION['CLASS'] =$class;
  $_SESSION['CLASSID'] =$classID;  
 
 	
 	}
 	elseif (isset($data['do_cleric']))
 	{
 	$classID=8;
 	$class="Жрец";
  $_SESSION['CLASS'] =$class; 
  $_SESSION['CLASSID'] =$classID; 

 	}
 	elseif (isset($data['do_paladin']))
 	{
 	$classID=9;
 	$class="Паладин";
  $_SESSION['CLASS'] =$class; 
  $_SESSION['CLASSID'] =$classID; 
 	}
 	elseif (isset($data['do_barbarian']))
 	{
 	$classID=10;
 	$class=="Варвар";
  $_SESSION['CLASS'] =$class; 
  $_SESSION['CLASSID'] =$classID; 	
 	}
 	elseif (isset($data['do_bard']))
 	{
 	$classID=11;
 	$class="Бард";
  $_SESSION['CLASS'] =$class; 
  $_SESSION['CLASSID'] =$classID; 
 	}
 	elseif (isset($data['do_monk']))
 	{
 	$classID=12;
 	$class="Монах";
  $_SESSION['CLASS'] =$class; 
  $_SESSION['CLASSID'] =$classID; 
 	}

  ?>

  <?php
 $data = $_POST;
 $raceID;
 $race;

 
 if( isset($data['do_SimpleHuman']))
 {

   $raceID=1;
  $race="Человек";
  $_SESSION['RACE'] =$race; 
  $_SESSION['RACEID'] =$raceID; 
  

 }
  elseif (isset($data['do_VariantHuman']))
  {
  $raceID=2;
  $race="Человек";
   $_SESSION['RACE'] =$race; 
  $_SESSION['RACEID'] =$raceID; 
  }
elseif (isset($data['do_GornDwarf']))
  {
  $raceID=3;
  $race="Горный дварф";
   $_SESSION['RACE'] =$race; 
  $_SESSION['RACEID'] =$raceID; 
  }
  elseif (isset($data['do_HolmDwarf']))
  {
  $raceID=4;
  $race="Холмовой дварф";
   $_SESSION['RACE'] =$race; 
  $_SESSION['RACEID'] =$raceID; 
  }
   elseif (isset($data['do_LesGnome']))
  {
  $raceID=5;
  $race="Лесной гном";
   $_SESSION['RACE'] =$race; 
  $_SESSION['RACEID'] =$raceID; 
  }
   elseif (isset($data['do_SkalGnome']))
  {
  $raceID=6;
  $race="Скальный гном";
   $_SESSION['RACE'] =$race; 
  $_SESSION['RACEID'] =$raceID; 
  }
 elseif (isset($data['do_HighElf']))
  {
  $raceID=7;
  $race="Высший эльф";
   $_SESSION['RACE'] =$race; 
  $_SESSION['RACEID'] =$raceID; 
  }
   elseif (isset($data['do_LesElf']))
  {
  $raceID=8;
  $race="Лесной эльф";
  }
   elseif (isset($data['do_DarkElf']))
  {
  $raceID=9;
  $race="Тёмный эльф";
   $_SESSION['RACE'] =$race; 
  $_SESSION['RACEID'] =$raceID; 
  }

   elseif (isset($data['do_HalfElf']))
  {
  $raceID=10;
  $race="Полуэльф";
   $_SESSION['RACE'] =$race; 
  $_SESSION['RACEID'] =$raceID; 
  }
 elseif (isset($data['do_Tiffling']))
  {
  $raceID=11;
  $race="Тиффлинг";
   $_SESSION['RACE'] =$race; 
  $_SESSION['RACEID'] =$raceID; 
  }
   elseif (isset($data['do_Halfing']))
  {
  $raceID=12;
  $race="Полурослик";
   $_SESSION['RACE'] =$race; 
  $_SESSION['RACEID'] =$raceID; 
  }
  elseif (isset($data['do_HalfOrc']))
  {
  $raceID=13;
  $race="Полуорк";
   $_SESSION['RACE'] =$race; 
  $_SESSION['RACEID'] =$raceID; 
  }
  elseif (isset($data['do_DragonBorne']))
  {
  $raceID=14;
  $race="Драконорожденный";
   $_SESSION['RACE'] =$race; 
  $_SESSION['RACEID'] =$raceID; 
  }

  ?>
   <?php
 $data = $_POST;
 $backgroundID=0;
 $background="";
 if( isset($data['do_Artist']))
 {
  $backgroundID=1;
  $background="Артист";

$_SESSION['BACKGROUND'] =$background; 
$_SESSION['BACKGROUNDID'] =$backgroundID; 
  
 }
  elseif (isset($data['do_Bespriz']))
  {
  $backgroundID=2;
  $background="Беспризорник";

$_SESSION['BACKGROUND'] =$background; 
$_SESSION['BACKGROUNDID'] =$backgroundID;
  }
  elseif (isset($data['do_Blag']))
  {
  $backgroundID=3;
  $background="Благородный";

$_SESSION['BACKGROUND'] =$background; 
$_SESSION['BACKGROUNDID'] =$backgroundID;
  }
   elseif (isset($data['do_GildRemesl']))
  {
  $backgroundID=4;
  $background="Гильдейский ремесленник";

$_SESSION['BACKGROUND'] =$background; 
$_SESSION['BACKGROUNDID'] =$backgroundID;
  }
  elseif (isset($data['do_More']))
  {
  $backgroundID=5;
  $background="Моряк";

$_SESSION['BACKGROUND'] =$background; 
$_SESSION['BACKGROUNDID'] =$backgroundID;
  }
  elseif (isset($data['do_Mudrez']))
  {
  $backgroundID=6;
  $background="Мудрец";

$_SESSION['BACKGROUND'] =$background; 
$_SESSION['BACKGROUNDID'] =$backgroundID;
  }
   elseif (isset($data['do_NarodHero']))
  {
  $backgroundID=7;
  $background="Народный герой";

$_SESSION['BACKGROUND'] =$background; 
$_SESSION['BACKGROUNDID'] =$backgroundID;
  }
   elseif (isset($data['do_Otshelnik']))
  {
  $backgroundID=8;
  $background="Отшельник";

$_SESSION['BACKGROUND'] =$background; 
$_SESSION['BACKGROUNDID'] =$backgroundID;
  }
   elseif (isset($data['do_Prestupnik']))
  {
  $backgroundID=9;
  $background="Преступник";

$_SESSION['BACKGROUND'] =$background; 
$_SESSION['BACKGROUNDID'] =$backgroundID;
  }
   elseif (isset($data['do_Prisluga']))
  {
  $backgroundID=10;
  $background="Прислужник";

$_SESSION['BACKGROUND'] =$background; 
$_SESSION['BACKGROUNDID'] =$backgroundID;
  }

   elseif (isset($data['do_Soldat']))
  {
  $backgroundID=11;
  $background="Солдат";

$_SESSION['BACKGROUND'] =$background; 
$_SESSION['BACKGROUNDID'] =$backgroundID;
  }
   elseif (isset($data['do_Chuzezemez']))
  {
  $backgroundID=12;
  $background="Чужеземец";

$_SESSION['BACKGROUND'] =$background; 
$_SESSION['BACKGROUNDID'] =$backgroundID;
  }
   elseif (isset($data['do_Sharlatan']))
  {
  $backgroundID=13;
  $background="Шарлатан";

$_SESSION['BACKGROUND'] =$background; 
$_SESSION['BACKGROUNDID'] =$backgroundID;
  }
  ?>