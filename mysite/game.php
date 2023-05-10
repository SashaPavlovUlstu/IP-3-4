<?php
  session_start();
  ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="images/logo.png" />
    <title>Игра</title>
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
        <h1 class="about-game">Название игры</h1>
        <p class="text-game">
          Пока что описание игры недоступно,так как автор пока что не знает,что
          за игра будет.
        </p>
        <img class="img-game" src="images/razrabotka.jpg" />
      </div>
    </div>
  </body>
</html>
