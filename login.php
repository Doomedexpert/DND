<?php
require "./db.php";

 $data = $_POST;

  if( isset($data['do_login']))
 {
 	$errors = array();
 	$user = R::findOne('users', 'login=?',array($data['login']));
 	if($user)
 	{
 		//логин существует
 		 if ( md5($data['password']) == $user->password)
           {

            //login user
            $_SESSION['logged_user'] =$user;    
            echo '<div class="Text">Вы успешно Авторизировались! </div><hr>';
            header('Location: ./index.php');
           }
           else
           {
             $errors[] = 'Неверно введён пароль';
           }
 	}
 	else
 	{
 		$errors[] = 'Пользователь с таким логином не найден';
 	}
 	if( ! empty($errors))
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
  <title>Авторизация</title>
  <link rel="stylesheet" href="./css/Main.css">
  <link rel="stylesheet" href="./css/font-famaly-p.css">


  <div class="BgRamka" style=" margin-left: 550px; margin-right: 550px; padding: 10px; margin-top: 100px;">
    <div class="AutoConteiner" >
      <div style="margin-left: 60px;margin-right: 60px;">

 <form action="login.php" method="POST">
    <p class="Text">Введите логин</p> 
 	<p>
 	
 		<input class="InputTextBox" type="text" name="login" autocomplete="off" value="<?php echo @$data['login'] ?>">
 	</p>
<p class="Text">Введите пароль</p> 
 	<p>
	
	<input class="InputTextBox" type="password" name="password" autocomplete="off" value="<?php echo @$data['password'] ?>">
	</p>

	<p style="text-align: center;">
	<button class="Btn" type="submit" name="do_login">Войти</button>
</p>

 </form>

  </div>
        </div>
              </div>

 </body>
</html>
</DOCTYPE>
