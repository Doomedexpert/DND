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
 		echo '<div style=" color: green;">Так же просто, как и технологично</div><hr>';
 	} 
 	else
 	{
      echo '<div style=" color: red;">'.array_shift($errors).'</div><hr>';
      
 	}
 }
?>


<DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<title>Главная страница</title>
	<link rel="stylesheet" href="./css/Main.css">
	<link rel="stylesheet" href="./css/font-famaly-p.css">
	
 

</head>
<body>
	<div class="BgRamka">
		<div class="RegConteiner" style="margin-left: 100px;">
			
		
	
<form action="./singup.php" method="POST">
<p>
	Ваш логин<br>
	<input type="text" name="login" autocomplete="off" value="<?php echo @$data['login'] ?>">
</p>

<p>
	Ваш Email<br>
	<input type="Email" name="email" autocomplete="off" value="<?php echo @$data['email'] ?>">
</p>

<p>
	Ваш пароль<br>
	<input type="password" name="password" autocomplete="off" value="<?php echo @$data['password'] ?>">
</p>

<p>
	Повторите пароль<br>
	<input type="password" name="password_2" autocomplete="off" value="<?php echo @$data['password_2'] ?>">
</p>

<p>
	<button type="submit" name="do_singup">Зарегестрироваться</button>
</p>

 </form>


 		</div>
		
 </div>


</body>
</html>
</DOCTYPE>
