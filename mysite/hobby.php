<?php
  session_start();
  ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="images/logo.png" />
    <title>Хобби</title>
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
        <img class="img-basket" src="images/basket.jpg" />
        <p class="text-basket">
          Я начал заниматься баскетболом с 2019 годо во время карантина.Мне
          подарили мяч и я пошел на ближайшую спортивную площадку. С этого и
          начался мой баскетбольный путь.Начал активно тренироваться,смотреть
          игры и играть на улице с местными "профессионалами". Так я
          прозанимался самостоятельно 3 года,а затем поступил в Улгту и решил
          пройти осмотр в команду.Успешно его прошел и попал в состав, где я
          играю стартового центрового.
        </p>
        <img class="img-chess" src="images/chess.jpg" />
        <p class="text-chess">
          Начал увлекаться шахматами относительно недавно.Как-то после учебного
          дня пришел домой и увидел в интернете видео,в котором гроссмейстер
          поставил шах за 2 хода.Меня это заинтересовало и я пошел учиться
          играть в шахматы.Так я и начал в них играть.
        </p>
      </div>
    </div>
  </body>
</html>
