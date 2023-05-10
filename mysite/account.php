<?php
require_once 'vendor/connect.php';
  session_start();
  
  $id=$_GET['id'];
    $user1 = mysqli_query($connect,"SELECT * FROM `users` WHERE `id`='$id'");
    $user1 = mysqli_fetch_assoc($user1);
    $admin1 = mysqli_query($connect,"SELECT * FROM `users` WHERE `id`='$id'");
    $admin1 = mysqli_fetch_assoc($admin1);
  if(!$_SESSION['user'] ){
    header('Location:sign up.php');
  }
  ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="images/logo.png" />
    <title>Кабинет</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body class="login">
    <header class="header">
      <div class="container">
        <div class="header-inner">
          <a class="header-logo" href="index.php">PavlovSite</a>
          <nav class="nav">
            <a class="nav-link" href="index.php"> Главная </a>
            <a class="nav-link" href="about me.php"> Обо мне </a>
            <a class="nav-link" href="hobby.php"> Хобби </a>
            <a class="nav-link" href="game.php"> Игра </a>
            <a class="nav-link" href="gallery.php"> Галерея</a>
            <a class="nav-link" href="account.php"> Кабинет</a>
            <?php if(isset($_SESSION['user']) == True ):?>

              <a class="nav-link" href="vendor/logout.php"> Выйти </a>
              <?php else:?>
              <a class="nav-link" href="sign up.php"> Войти </a>
              
              <?php endif; ?>
          </nav>
        </div>
      </div>
    </header>
  
    <div class="acc-container">
    
    <h1 class="acc-text">Вы успешно авторизовались</h1>
      <a class="acc-btn1" href="education.php">Образование</a>
      <a class="acc-btn2" href="table_user.php">Таблица пользователей</a>
      <a class="acc-btn3" href="matches.php">Фото с матчей</a>
      <a class="acc-btn3" href="update_user.php?id=<?=$_SESSION['user']['id']?>">Изменить</a>
      
      <img  class="acc-img"src="<?= $_SESSION['user']['avatar'] ?>" width ="200" height="200" alt="">
      <h2 height="100"><?= $_SESSION['user']['full_name'] ?>  </h2>
    </div>
   

  </body>
</html>
