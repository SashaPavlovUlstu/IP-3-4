<?php 
  session_start();
  if($_SESSION['user']){
    header('Location:account.php');
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="images/logo.png" />
    <title>Вход</title>
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
            <?php if(isset($_SESSION['user']) == True ):?>

<a class="nav-link" href="vendor/logout.php"> Галерея </a>
<?php else:?>
<?php endif; ?>
            <a class="nav-link" href="account.php"> Кабинет</a>
            <a class="nav-link" href="sign up.php"> Войти </a>
          </nav>
        </div>
      </div>
    </header>
    <div class="signup">
      <form action="vendor/signin.php" method="post">
        <label>Логин</label>
        <input type="text" name ="login" placeholder="Введите свой логин" />
        <label>Пароль</label>
        <input type="password" name = "password" placeholder="Введите свой пароль" />
        <button type = "submit">Войти</button>
        <p>У вас нет аккаунта? - <a href="register.php"> Зарегистрируйтесь</a></p>
        <?php 
        if($_SESSION['message']){
          echo '<p class="msg"> ' .$_SESSION['message'] . '</p>';
        }
          unset($_SESSION['message']);
          ?>
      </form>
    </div>
  </body>
</html>
