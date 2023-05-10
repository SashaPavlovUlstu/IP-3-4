<?php
  session_start();
  ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="images/logo.png" />
    <title>Фото с матчей</title>
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
            <a class="nav-link" href="gallery.php"> Галерея</a>
            <a class="nav-link" href="account.php"> Кабинет</a>
            <?php if(isset($_SESSION['user']) == True):?>

<a class="nav-link" href="vendor/logout.php"> Выйти </a>
<?php else:?>
<a class="nav-link" href="sign up.php"> Войти </a>

<?php endif; ?>
          </nav>
        </div>
      </div>
    </header>
    <div class="intro-matches">
      <div class="container-matches">
        <div class="block">
          <img class="image" src="images/lOkjPOw4nbg (1).jpg" />
          <h3 class="match">АСБ: УлГУ / УиГА</h3>
        </div>
        <div class="block">
          <img class="image" src="images/ulgu2.jpg" />
          <h3 class="match">АСБ: УлГУ / УиГА</h3>
        </div>
        <div class="block">
          <img class="image" src="images/ulgu3.jpg" />
          <h3 class="match">АСБ: УлГУ / УиГА</h3>
        </div>
        <div class="block">
          <img class="image" src="images/ulgtu1.jpg" />
          <h3 class="match">АСБ: УлГТУ / УлГПУ</h3>
        </div>
        <div class="block">
          <img class="image" src="images/ulgtu2.jpg" />
          <h3 class="match">АСБ: УлГТУ / УлГПУ</h3>
        </div>
        <div class="block">
          <img class="image" src="images/ulgtu3.jpg" />
          <h3 class="match">АСБ: УлГТУ / УлГПУ</h3>
        </div>
        <div class="block">
          <img class="image" src="images/uor1.jpg" />
          <h3 class="match">АСБ Девушки: УлГТУ / УОР</h3>
        </div>
        <div class="block">
          <img class="image" src="images/uor2.jpg" />
          <h3 class="match">АСБ Девушки: УлГТУ / УОР</h3>
        </div>
        <div class="block">
          <img class="image" src="images/uor3.jpg" />
          <h3 class="match">АСБ Девушки: УлГТУ / УОР</h3>
        </div>
      </div>
    </div>
  </body>
</html>
