<?php
if (!isset($_SESSION))
{
    session_start();
}
if (isset($_GET['cabinet_submit'])) {
    $name = $_GET['user_name'];
    $password = $_GET['user_password'];
    if ($name == 'admin' && $password == 'admin') {
        $_SESSION['admin'] = true;
    }
}
if (isset($_GET['cabinet_logout'])) {
    session_destroy();
    header('Location: /index-1.php');
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">


  <title>Gamershop</title>
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/normalize.css">


</head>

<body>

  <header class="header">
    <div class="content header__content" id="#content2">
      <div class="header__left" id="frsthead">
        <div class="header__logo"><a href="index.php"><img src="img\logo.png" alt=""></a></div>
        <div class="header__title">
          <p class="title">Gamershop</p>
          <p class="under__title">онлайн магазин игр
          </p>
          <?php if (isset($_SESSION['admin'])) :?>
             <p>Поздравляем, вы успешно авторизовались</p>
          <?php endif;?>
        </div>

      </div>
      <div class="header__burger">
        <p><img src="img\burger.svg" alt=""></p>
      </div>
      <nav class="header__navbar">
        <div class="header__navitem">
          <a class="header__nav__a catalog" href="second__page.php">Каталог товаров</a>
        </div>
        <div class="header__navitem">
          <a class="header__nav__a" href="">Скидки</a>
        </div>
        <div class="header__navitem">
          <a class="header__nav__a" href="third__page.php">О нас</a>
        </div>
        <div class="header__navitem">
          <a class="header__nav__a" href="">Мои покупки</a>
        </div>
        <div class="header__navitem">
          <form action="" class="header__find"><img src="img\find.svg" alt="">
            <a class="header__nav__a" href="">
              поиск игр</a>
            <input type="input" class="header__find__input" required>
          </form>

        </div>

      </nav>
      <div class="header__shop">
        <a href=""><img src="img\shop.svg" alt="" class="go__shop"></a>
      </div>

    </div>
    <div class="burger__menu">
      <div class="burger__item"><a href="second__page.php" class="burger__item__text">Каталог товаров</a></div>
      <div class="burger__item"><a href="" class="burger__item__text">Скидки</a></div>
      <div class="burger__item"><a href="third__page.php" class="burger__item__text">Поддержка</a></div>
      <div class="burger__item"><a href="" class="burger__item__text">Мои покупки</a></div>
    </div>
  </header>
  <div class="slider">
    <div class="content">

      <div class="slider__wrapper">
        <div class="slider__slide slide_1">
          <div class="slide_1__block__1">
            <div class="game__item">
              <div class="game__img"></div>
              <p class="bestseller">Хит продаж</p>
            </div>
          </div>
          <div class="slide_1__block__2">
            <div class="game__item">
              <div class="game__img"></div>
              <div class="game_discount"><span>-</span>
                <p class="size_of_discount">80</p><span>%</span>
              </div>
            </div>
          </div>
          <div class="slide_1__block__3">
            <div class="game__item">
              <div class="game__img"></div>
              <div class="game_discount"><span>-</span>
                <p class="size_of_discount">80</p><span>%</span>
              </div>
            </div>
          </div>
        </div>
        <div class="slider__slide slide_2">

        </div>
        <div class="slider__slide slide_3"></div>
        <div class="slider__slide slide_4"></div>
        <div class="slider__slide slide_5"></div>
      </div>
      <div class="slider__panel">
        <div class="slider__panel__prev" onclick="minusSlide()"><img src="img\arrow_left.svg" alt=""></div>
        <div class="slider__panel__middle">
          <div class="slider__panel__middle__button" onclick="currentSlide(1)"></div>
          <div class="slider__panel__middle__button" onclick="currentSlide(2)"></div>
          <div class="slider__panel__middle__button" onclick="currentSlide(3)"></div>
          <div class="slider__panel__middle__button" onclick="currentSlide(4)"></div>
          <div class="slider__panel__middle__button" onclick="currentSlide(5)"></div>
        </div>
        <div class="slider__panel__next" onclick="plusSlide()"><img src="img\arrow_right.svg" alt=""></div>
      </div>
      <div class="slider__tittle">
        <p class="slider__tittle__text">Хиты продаж</p>
      </div>
      <div class="slider__short__list">
        <div class="game__item">
          <div class="game__img" style="background-image: url(img/cyberpank.jpg)"></div>
        </div>
        <div class="vl"></div>
        <div class="game__item">
          <div class="game_discount"><span>-</span>
            <p class="size_of_discount">80</p><span>%</span>

          </div>
          <div class="game__img" style="background-image: url(img/ds3.jpg)"></div>

        </div>

      </div>
    </div>
  </div>
  <div class="list_of_games">
    <div class="content">
      <div class="left__side">
        <div class="left__side__top">
          <a class="left__side_item" href="">Новинки</a>
          <a class="left__side_item" href="">Лидеры продаж</a>
          <a class="left__side_item" href="">Ожидаемые</a>
        </div>
        <div class="left__side_list">
          <div class="game__item">
            <div class="game__item_left">
              <div class="game__img" style="background-image: url(img/littleNightmares.jpg)"></div>
              <div class="game__info">
                <a class="game__name" href="">Little Nightmares II</a>
                <div class="game__info__bottom">
                  <div class="game__platforms">
                    <img src="img\steam.svg" alt="" class="game__platform">
                  </div>
                  <div class="game__genres">
                    <a class="game__genre" href="">
                      Приключение
                    </a>

                  </div>
                </div>
              </div>


            </div>
            <div class="game__item_right">
              <div class="game__price__block">
                <p class="game__price">900</p><img src="img\grivna.svg" alt="" class="currency">
              </div>
            </div>
          </div>
          <div class="game__item">
            <div class="game__item_left">
              <div class="game__img" style="background-image: url(img/TWW.jpg)"></div>
              <div class="game__info">
                <a class="game__name" href="">Total War: Warhammer</a>
                <div class="game__info__bottom">
                  <div class="game__platforms">
                    <img src="img\steam.svg" alt="" class="game__platform">
                  </div>
                  <div class="game__genres" style="clear:both;">
                    <a class="game__genre" href="">
                      Экшен
                    </a>
                    <span class="game__genre">, &nbsp</span>
                    <a class="game__genre" href="">
                      Стратегии
                    </a>
                  </div>
                </div>
              </div>


            </div>
            <div class="game__item_right">
              <div class="game__price__block">
                <p class="game__price">1200</p><img src="img\grivna.svg" alt="" class="currency">
              </div>
            </div>
          </div>
          <div class="game__item">
            <div class="game__item_left">
              <div class="game__img" style="background-image:url(img/bluefire.jpg)"></div>
              <div class="game__info">
                <a class="game__name" href="">Blue Fire</a>
                <div class="game__info__bottom">
                  <div class="game__platforms">
                    <img src="img\steam.svg" alt="" class="game__platform">
                  </div>
                  <div class="game__genres" style="clear:both;">
                    <a class="game__genre" href="">
                      Экшен
                    </a>
                    <span class="game__genre">, &nbsp</span>
                    <a class="game__genre" href="">
                      Приключение
                    </a>

                  </div>
                </div>
              </div>


            </div>
            <div class="game__item_right">
              <div class="game__price__block">
                <p class="game__price">200</p><img src="img\grivna.svg" alt="" class="currency">
              </div>
            </div>
          </div>
          <div class="game__item">
            <div class="game__item_left">
              <div class="game__img" style="background-image:url(img/skyrim.jpg)"></div>
              <div class="game__info">
                <a class="game__name" href="">The Elder Scrolls online - Blackwood</a>
                <div class="game__info__bottom">
                  <div class="game__platforms">
                    <img src="img\steam.svg" alt="" class="game__platform">
                  </div>
                  <div class="game__genres" style="clear:both;">
                    <a class="game__genre" href="">
                      RPG
                    </a>

                  </div>
                </div>
              </div>


            </div>
            <div class="game__item_right">
              <div class="game__price__block">
                <p class="game__price">530</p><img src="img\grivna.svg" alt="" class="currency">
              </div>
            </div>
          </div>
          <div class="game__item">
            <div class="game__item_left">
              <div class="game__img" style="background-image:url(img/mount-and-blade-2.jpg)"></div>
              <div class="game__info">
                <a class="game__name" href="">Mount and Blade II</a>
                <div class="game__info__bottom">
                  <div class="game__platforms">
                    <img src="img\steam.svg" alt="" class="game__platform">
                  </div>
                  <div class="game__genres" style="clear:both;">
                    <a class="game__genre" href="">
                      Экшен
                    </a>
                    <span class="game__genre">, &nbsp </span>
                    <a class="game__genre" href="">
                      Приключение
                    </a>
                    <span class="game__genre">, &nbsp</span>
                    <a class="game__genre" href="">
                      Стратегии
                    </a>

                  </div>
                </div>
              </div>


            </div>
            <div class="game__item_right">
              <div class="game__price__block">
                <p class="game__price">480</p><img src="img\grivna.svg" alt="" class="currency">
              </div>
            </div>
          </div>
          <div class="hidden__games">
            <div class="game__item"></div>
            <div class="game__item"></div>
            <div class="game__item"></div>
            <div class="game__item"></div>
          </div>
          <p class="show__more">Show more</p>
        </div>
      </div>
      <div class="right__side">
        <div class="right__side__top">
          <p class="right__side__top__title">
            Скидки
          </p>
          <div class="right__side__top__panel">
            <div class="right__side__top__button"><img src="img\left.svg" alt=""></div>
            <div class="right__side__top__button"><img src="img\left.svg" alt=""></div>
          </div>
        </div>
        <div class="right__game__list">
          <div class="game__item">
            <div class="game__img" style="background-image: url(img/resident3.jpg)"></div>
            <a href="" class="game__name"> Resident Evil 3</a>
            <div class="item__right__side">
              <div class="game_discount"><span>-</span>
                <p class="size_of_discount">50</p><span>%</span>

              </div>
              <div class="game__price__block">
                <p class="game__price">250</p><img src="img\grivna.svg" alt="" class="currency">
              </div>

            </div>

          </div>
          <div class="game__item">
            <div class="game__img" style="background-image: url(img/crysis3.jpg)"></div>
            <a href="" class="game__name">Crysis 3</a>
            <div class="item__right__side">
              <div class="game_discount"><span>-</span>
                <p class="size_of_discount">68</p><span>%</span>

              </div>
              <div class="game__price__block">
                <p class="game__price">75</p><img src="img\grivna.svg" alt="" class="currency">
              </div>

            </div>

          </div>
          <div class="game__item">
            <div class="game__img" style="background-image: url(img/detroi.jpg)"></div>
            <a href="" class="game__name">Detroit: Become Human</a>
            <div class="item__right__side">
              <div class="game_discount"><span>-</span>
                <p class="size_of_discount">48</p><span>%</span>

              </div>
              <div class="game__price__block">
                <p class="game__price">319</p><img src="img\grivna.svg" alt="" class="currency">
              </div>

            </div>

          </div>
          <div class="game__item">
            <div class="game__img" style="background-image: url(img/ds3.jpg)"></div>
            <a href="" class="game__name">Dark Souls 3</a>
            <div class="item__right__side">
              <div class="game_discount"><span>-</span>
                <p class="size_of_discount">80</p><span>%</span>

              </div>
              <div class="game__price__block">
                <p class="game__price">235</p><img src="img\grivna.svg" alt="" class="currency">
              </div>

            </div>
          </div>
          <div class="hidden__games2">
            <div class="game__item"></div>
            <div class="game__item"></div>
            <div class="game__item"></div>
            <div class="game__item"></div>
          </div>
          <p class="show__more2">Show more</p>
        </div>
        <div class="right__side__last">
          <div class="last__title">
            <p class="last__title__text">Последние продажи</p>
          </div>
          <div class="game__item">
            <div class="game__img" style="background-image: url(img/DeadByDaylight.jpg)"></div>
            <a href="" class="game__name"> Dead by DayLight</a>
            <div class="item__right__side">
              <div class="game_discount"><span>-</span>
                <p class="size_of_discount">20</p><span>%</span>

              </div>
              <div class="game__price__block">
                <p class="game__price">162</p><img src="img\grivna.svg" alt="" class="currency">
              </div>

            </div>

          </div>
          <div class="game__item">
            <div class="game__img" style="background-image: url(img/break.jpg)"></div>
            <a href="" class="game__name"> Quantum Break</a>
            <div class="item__right__side">
              <div class="game_discount"><span>-</span>
                <p class="size_of_discount">69</p><span>%</span>

              </div>
              <div class="game__price__block">
                <p class="game__price">220</p><img src="img\grivna.svg" alt="" class="currency">
              </div>

            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="categories">
    <div class="content">
      <div class="categories__title">
        <p class="categories__title__text">Категории</p>
      </div>
      <div class="categories__list">
        <div class="categories__item">
          <img src="img\sport.svg" alt="" class="categories__item__img">
          <p class="categories__name">Спортивные игры</p>
        </div>
        <div class="categories__item">
          <img src="img\campfire.svg" alt="" class="categories__item__img">
          <p class="categories__name">Выживание</p>
        </div>
        <div class="categories__item">
          <img src="img\world.svg" alt="" class="categories__item__img">
          <p class="categories__name">Открытый мир </p>
        </div>
        <div class="categories__item">
          <img src="img\swords.svg" alt="" class="categories__item__img">
          <p class="categories__name">Кооператив</p>
        </div>
        <div class="categories__item">
          <img src="img\rifle.svg" alt="" class="categories__item__img">
          <p class="categories__name">Шутеры</p>
        </div>
        <div class="categories__item">
          <img src="img\meteorite.svg" alt="" class="categories__item__img">
          <p class="categories__name">Экшен</p>
        </div>
      </div>
      <div class="categories__list hidden_list">
        <div class="categories__item">
          <img src="" alt="" class="categories__item__img">
          <p class="categories__name"></p>
        </div>
        <div class="categories__item">
          <img src="" alt="" class="categories__item__img">
          <p class="categories__name"></p>
        </div>
        <div class="categories__item">
          <img src="" alt="" class="categories__item__img">
          <p class="categories__name"> </p>
        </div>
        <div class="categories__item">
          <img src="" alt="" class="categories__item__img">
          <p class="categories__name"></p>
        </div>
        <div class="categories__item">
          <img src="" alt="" class="categories__item__img">
          <p class="categories__name"></p>
        </div>
        <div class="categories__item">
          <img src="" alt="" class="categories__item__img">
          <p class="categories__name"></p>
        </div>
      </div>
      <div class="shhh"><p class="show__more3">Show more</p></div>
    </div>

  </div>
  <div class="future__game">
    <div class="content">
      <div class="future__game__title">
        <p class="future__game__text">Список релизов</p>
        <div class="future__game__top__panel">
          <div class="future__game__top__button"><img src="img\left.svg" alt=""></div>
          <div class="future__game__top__button"><img src="img\left.svg" alt=""></div>
        </div>
      </div>
      <div class="future__game__list">
        <div class="game__item">
          <div class="game__img" style="background-image: url(img/werewolf.jpg)"></div>
          <div class="date__release">
            <p class="date__release__text">4 фев 2021</p>
          </div>
        </div>
        <div class="game__item">
          <div class="game__img" style="background-image: url(img/resident.jpg)"></div>
          <div class="date__release">
            <p class="date__release__text">7 мая 2021</p>
          </div>
        </div>
        <div class="game__item">
          <div class="game__img" style="background-image: url(img/deathloop.jpg)"></div>
          <div class="date__release">
            <p class="date__release__text">21 мая 2021</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <footer class="footer">
    <div class="content">
      <div class="footer-title">
        <p class="footer__title" >
          Что такое<br> Gamershop
        </p>
        <p class="footer__text">
          Gamersop - магазин для настоящих геймеров. В нашем магазине вы сможете гарантированно
          приобрести ключи к играм от Steam, Uplay, Battle.net и прочих популярних игровых платформ.
          Наш магазин делает все для того, чтобы ваши покупки проходили быстро, с максимальным
          удобством и безопасностю, а цены были максимально доступными. <br><br>
          Для совершения покупки вам достаточно лишь указать адрес электронный адрес при оформлении
          заказа и выбрать удобный вам способ оплати. После этого вам на почту прийдет пароль доступа в
          личний кабинет, в котором вы получите ключ активации
        </p>
      </div>
      <div class="form-admin">
          <?php if (empty($_SESSION['admin'])) :?>
          <form action="" method="GET" onsubmit="return submitResult();">
              <label>Имя</label>
              <input class="admin_input" type="text" name="user_name" placeholder="Имя">
              <label>Пароль</label>
              <input class="admin_input" name="user_password" placeholder="Пароль">
              <button class="admin_submit" type="submit" name="cabinet_submit" value="1">Войти</button>
          </form>
          <?endif;?>
          <?php if (isset($_SESSION['admin'])) :?>
          <form action="" method="GET">
               <button class="admin_submit" type="submit" name="cabinet_logout" value="1">Вийти из аккаунта</button>
          </form>
          <?endif;?>
      </div>
    </div>
  </footer>
  <script src="main.js"></script>
</body>

</html>