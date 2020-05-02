<?php
require "./db.php";

 $data = $_POST;
 if( isset($data['do_singup']))
 {

 	//Здесь регистрация 
 	$errors = array(); //Массив с выводом ошибок 
 	if(trim($data['login'])=='')
 	{
 		$errors[] = 'Введите ваш логин!'; //Проверка логина 
 	}

 	if(trim($data['email'])=='')
 	{
 		$errors[] = 'Введите вашу почту!'; //Проверка почты
 	}

 	if($data['password']=='')
 	{
 		$errors[] = 'Введите ваш пароль!'; //Проверка пароля 
 	}

 	if($data['password_2'] !==$data['password'])
 	{
 		$errors[] = 'Повторный пароль введён неверно!'; //Проверка пароля 2
 	}

 	if( R::count('users',"login = ?", array($data['login'],))>0)
 	{
 		$errors[] = 'Пользователь с таким логином уже существует!'; //Проверка сущ логина
 	}

 	if( R::count('users',"email = ?", array($data['email'],))>0)
 	{
 		$errors[] = 'Пользователь с такой почтой уже существует!'; //Проверка сущ почты
 	}
 	if(empty($errors))
 	{
 		// Всё хорошо, регистрация
 		$user = R::dispense('users');
 		$user -> login =$data['login'];
 		$user -> email =$data['email'];
 		$user -> password = md5($data['password']);
 		R::store($user);
 		echo '<div class="Text">Вы успешно зарегестрировались! </div><hr>';
 		$text1 ="Ваш путь, полный приключений и опасностей только начинается! Перейдите на главную страницу, что бы продолжить.";
 		$text2 =2;
 		 	} 
 	else
 	{
      echo '<div class="Text">'.array_shift($errors).'</div><hr>';
      
 	}
 }
?>


<DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<title>Регистрация</title>
	<link rel="stylesheet" href="./css/Main.css">
	<link rel="stylesheet" href="./css/font-famaly-p.css">
	
 

</head>
<body>
	<div class="BgRamka" style=" margin-left: 550px; margin-right: 550px; padding: 10px; margin-top: 100px;">
		<div class="RegConteiner" >
			<div style="margin-left: 50px;margin-right: 50px;">
			
		
	
<form action="./singup.php" method="POST">
<p class="Text" style="text-align: center;">
	Введите логин<br>
	<input class="InputTextBox" type="text" name="login" autocomplete="off" value="<?php echo @$data['login'] ?>">
</p>

<p class="Text" style="text-align: center;">
	Введите ваш Email<br>
	<input class="InputTextBox" type="Email" name="email" autocomplete="off" value="<?php echo @$data['email'] ?>">
</p>

<p class="Text" style="text-align: center;">
	Введите пароль<br>
	<input  class="InputTextBox" type="password" name="password" autocomplete="off" value="<?php echo @$data['password'] ?>">
</p>

<p class="Text" style="text-align: center;">
	Повторите пароль<br>
	<input class="InputTextBox" type="password" name="password_2" autocomplete="off" value="<?php echo @$data['password_2'] ?>">
</p>

<p class="Text" style="text-align: center;">
	<button class="Btn" type="submit" name="do_singup">Зарегестрироваться</button>
</p>



 	

 </form>
				</div>

 		</div>

		
 </div>


 <?php
if($text2==2)
{

echo 
'<div class="BgRamka" style=" margin-left: 550px; margin-right: 550px; padding: 10px; margin-top: 20px;">
 	<div class="RegConteiner2 Text" >

 		<p style="margin-top: 10px;">Ваш путь, полный приключений и опасностей только начинается! Перейдите на страницу авторизации, что бы продолжить.
 		</p>
 	 <p class="Text" style="text-align: center;">
 	 <a href="./login.php">
	<button class="Btn" type="submit" action="./index.php">Авторизация</button>
	</a>
    </p>
 	</div>
</div>';
}
?>

</body>
</html>
</DOCTYPE>
