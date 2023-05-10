<?php
require_once('vendor/connect.php');
    session_start();
    $id=$_GET['id'];
    $user1 = mysqli_query($connect,"SELECT * FROM `users` WHERE `id`='$id'");
    $user1 = mysqli_fetch_assoc($user1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body >
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
            <?php if(isset($_SESSION['admin']) == True ):?>

<a class="nav-link" href="vendor/logout.php"> Выйти </a>
<?php else:?>{
<a class="nav-link" href="sign up.php"> Войти </a>
}
<?php endif; ?>
          </nav>
        </div>
      </div>
    </header>
    <div class="user_update">
        
        <form  action="vendor/update.php" method="post">
            <p>Полное имя</p>
            <input type ="hidden" name = "id" value="<?=$_SESSION['user']['id']?>">
            <input type ="text" name="full_name" value="<?=$_SESSION['user']['full_name']?>">
            <p>Логин</p>
            <input type ="text" name="login"value="<?=$user1['login']?>">
            <p>Почта</p>
            <input type ="text" name="email" value="<?=$_SESSION['user']['email']?>">
            <p>Аватар</p>
            <input type ="file" name="avatar" value="<?=$_SESSION['user']['avatar']?>">
            <button type="submit"> Обновить</button>
    </div>
</body>
</html>