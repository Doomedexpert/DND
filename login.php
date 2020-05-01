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
             echo '<div style=" color: green;">Вы авторизованы, можете перейти на <a href ="./index.php">главную</a> страницу!</div><hr>';
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
 		
 		
      echo '<div style=" color: red;">'.array_shift($errors).'</div><hr>';
      
 	}
 }

 ?>

 <form action="login.php" method="POST">
 	<p>
 		Введите логин <br>
 		<input type="text" name="login" autocomplete="off" value="<?php echo @$data['login'] ?>">
 	</p>

 	<p>
	Введите пароль <br>
	<input type="password" name="password" autocomplete="off" value="<?php echo @$data['password'] ?>">
	</p>

	<p>
	<button type="submit" name="do_login">Войти</button>
</p>

 </form>
