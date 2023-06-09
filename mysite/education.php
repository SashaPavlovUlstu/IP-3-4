<?php
  session_start();
  ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="images/logo.png" />
    <title>Образование</title>
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

    <div class="container-education">
      <div class="name-education">
        <div class="block-education">
          <a class="nav-education" href="#school">Школа</a>
        </div>
        <div class="block-education">
          <h1 class="text-education">Курсы</h1>
        </div>
        <div class="block-education">
          <h1 class="text-education">Университет</h1>
        </div>
        <div class="info-container">
          <h1 class="h1-education" id="school">Школа</h1>
          <p class="text-education">
            Эта школа была привлекательна для меня тем,что стояла напротив моего
            дома,поэтому я поступил именно в нее.В ней я проучился 11 своих
            лет.Благодаря ней получил большой объем знаний об иностранных
            языках,в особеннности английского,что дало мне возможность с
            легкостью читать зарубежную литературу и документацию.Данная школа
            мне очень сильно запомнилась,потому что педагогически состав был
            улетным.Это все,что я могу рассказать об этой замечательной школе.
          </p>
          <div class="block-ed-img">
            <img class="image-ed" src="images/school1.jpg" />
          </div>
          <div class="block-ed-img">
            <img class="image-ed" src="images/school2.jpg" />
          </div>
          <div class="block-ed-img">
            <img class="image-ed" src="images/school3.jpg" />
          </div>
          <h1 class="h1-education">Курсы</h1>
          <p class="text-education">
            Во втором классе мама решила отдать меня на курсы по английскому
            языку.Туда я активно ходил заниматься до 11 класса.В нем я встртил 4
            замечательных преподователей,которые учили меня английскому в разные
            периоды времени.Мне повезло с группой,в ней я чувствовал себя
            комфортно,поэтому занятия проходили быстро и с удовольствием.
          </p>
          <div class="block-ed-img">
            <img class="image-ed" src="images/kursi1.jpg" />
          </div>
          <div class="block-ed-img">
            <img class="image-ed" src="images/kursi2.jpg" />
          </div>
          <div class="block-ed-img">
            <img class="image-ed" src="images/kursi3.jpg" />
          </div>
          <h1 class="h1-education">Университет</h1>
          <p class="text-education">
            После окончания школы я долго не думал куда поступать.Мой выбор пал
            на лучший вуз страны "УлГТУ".Его советовали мне знакомые родителей и
            дед,который окончил этот вуз на РТФ.Я очень доволен,что смог
            поступить в него.В нем мне нравится почти
            все:преподователи,расписание,преподоваемые дисциплины и отзывчивость
            рабочего персонала.
          </p>
          <div class="block-ed-img">
            <img class="image-ed" src="images/vuz1.jpg" />
          </div>
          <div class="block-ed-img">
            <img class="image-ed" src="images/vuz2.jpg " />
          </div>
          <div class="block-ed-img">
            <img class="image-ed" src="images/vuz3.jpg" />
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
