<?php
require_once 'vendor/connect.php';
session_start();
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Таблица пользователей</title>
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
            <?php if(isset($_SESSION['user']) == True ||isset($_SESSION['admin']) == True):?>

<a class="nav-link" href="vendor/logout.php"> Выйти </a>
<?php else:?>{
<a class="nav-link" href="sign up.php"> Войти </a>
}
<?php endif; ?>
          </nav>
        </div>
      </div>
    </header>
    <div class="table">
    <table>
        <tr>
            <th>ID</th>
            <th>Полное имя</th>
            <th>Логин</th>
            <th>Почта</th>
            <th>Аватар</th>
            <th>Обновить</th>
            <th>Удалить</th>

        </tr>
        <?php
        $result = mysqli_query($connect,"SELECT * FROM `users`");
        while(($user = mysqli_fetch_assoc($result))!= false){
            ?>
             <tr>
            <td><?=$user['id']?></td>
            <td><?=$user['full_name']?></td>
            <td><?=$user['login']?></td>
            <td><?=$user['email']?></td>
            <td><img src="<?="../" . $user['avatar']?>" width="50" height="50"></td>
            <td>
                <a href="update.php?id=<?=$user['id'] ?>">
                <img  src="images/Update.png" width="50" height="50px" alt="Редактировать">
                </a>
            </td>
            <td>
                <a href="vendor/delete.php?id=<?=$user['id'] ?>">
                <img src="images/delete.png" width="50" height="50px" alt="Удалить">
                </a>
            </td>
        </tr>
        <?php
        }
        ?>
    

        
    </table>
</div>

</body>
</html>