<?php
  session_start();
  ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="images/logo.png" />
    <title>Главная</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <header class="header">
      <div class="container">
        <div class="header-inner">
          <a class="header-logo" href="index.php">PavlovSite</a>
          <nav class="nav">
            <a class="nav-link" href="index.php"> Главная </a>
            <a class="nav-link" href="about me.php"> Обо мне </a>
            <a class="nav-link" href="hobby.php"> Хобби </a>
            <a class="nav-link" href="game.php"> Игра </a>
            <?php if(isset($_SESSION['user']) == True ):?>

<a class="nav-link" href="vendor/logout.php"> Галерея </a>
<?php else:?>
<?php endif; ?>
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
    <div class="intro">
      <div class="container">
        <div class="intro-inner">
          <h1 class="intro-title">Добро пожаловать на PavlovSite</h1>
          <a href="steve.php">
            <img class="intro-img" src="images/main.jpg" alt="" />
</a>
          <h2 class="intro-suptitle">Студент первого курса</h2>
          <a href="https://vk.com/ssha1901">
            <img class="vk-image" src="images/icon_vk.png" />
          </a>
          <a href="https://www.twitch.tv/saint_samurai">
            <img class="twitch-image" src="images/twitch.png" />
          </a>
        </div>
      </div>
    </div>
  </body>
</html>
