<?php
if (!isset($_SESSION))
{
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/main2.css">
    <link rel="stylesheet" href="css/normalize.css">


    <title>Gamershop</title>
</head>

<body>
<header class="header">
    <div class="content header__content">
        <div class="header__left">
            <div class="header__logo"><a href="index.php"><img src="img\gamepad.svg" alt=""></a></div>
            <div class="header__title">
                <p class="title">Gamershop</p>
                <p class="under__title">онлайн магазин игр
                </p>
                <?php if (isset($_SESSION['admin'])) :?>
                    <p>Поздравляем, вы успешно авторизовались</p>
                <?php endif;?>
            </div>

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
</header>
<div class="list">
    <div class="content">

        <div class="list__left__side">
            <div class="list__title">
                <p class="list__title__text">Каталог товаров</p>
            </div>
            <div class="list__top__panel">
                <p class="found__element">Найдено <span class="number__of__games">2500</span> товаров</p>
                <div class="sorting">
                    <p class="sorted__by">Сортировать по:</p>
                    <select name="" id="" class="kind__of__sorting">
                        <option class="option">По дате</option>
                        <option class="option">Скидке</option>
                        <option class="option">Цене(за убыванием)</option>
                        <option class="option">Цене(за возрастанием)</option>
                    </select>
                </div>
                <div class="last__items">
                    <p class="last__item">Все</p>
                    <p class="last__item">В наличии</p>
                </div>
            </div>
            <div class="left__side__games">
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
                        <div class="game__img" style="background-image: url(img/vampire.jpg)"></div>
                        <div class="game__info">
                            <a class="game__name" href="">Vampire: The masquerade - Bloodlines 2</a>
                            <div class="game__info__bottom">
                                <div class="game__platforms">
                                    <img src="img\steam.svg" alt="" class="game__platform">
                                </div>
                                <div class="game__genres">
                                    <a class="game__genre" href="">
                                        Экшен
                                    </a>
                                    <span class="game__genre">,</span>
                                    <a class="game__genre" href="">
                                        RPG
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="game__item_right">
                        <div class="game__price__block">
                            <p class="game__price">1000</p><img src="img\grivna.svg" alt="" class="currency">
                        </div>
                    </div>
                </div>
                <div class="game__item">
                    <div class="game__item_left">
                        <div class="game__img" style="background-image: url(img/death.jpg)"></div>
                        <div class="game__info">
                            <a class="game__name" href="">Death Stranding</a>
                            <div class="game__info__bottom">
                                <div class="game__platforms">
                                    <img src="img\steam.svg" alt="" class="game__platform">
                                </div>
                                <div class="game__genres">
                                    <a class="game__genre" href="">
                                        Экшен
                                    </a>
                                    <span class="game__genre">,</span>
                                    <a class="game__genre" href="">
                                        Приключение
                                    </a>

                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="game__item_right">
                        <div class="game__price__block">
                            <p class="game__price">1500</p><img src="img\grivna.svg" alt="" class="currency">
                        </div>
                        <div class="game_discount">
                            <span>-</span>
                            <p class="size_of_discount">58</p><span>%</span>

                        </div>
                    </div>
                </div>
                <div class="game__item">
                    <div class="game__item_left">
                        <div class="game__img" style="background-image: url(img/beyond.jpg)"></div>
                        <div class="game__info">
                            <a class="game__name" href="">Beyound: Two souls</a>
                            <div class="game__info__bottom">
                                <div class="game__platforms">
                                    <img src="img\steam.svg" alt="" class="game__platform">
                                </div>
                                <div class="game__genres">
                                    <a class="game__genre" href="">
                                        Экшен
                                    </a>
                                    <span class="game__genre">,</span>
                                    <a class="game__genre" href="">
                                        Приключение
                                    </a>

                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="game__item_right">
                        <div class="game__price__block">
                            <p class="game__price">335</p><img src="img\grivna.svg" alt="" class="currency">
                        </div>
                        <div class="game_discount">
                            <span>-</span>
                            <p class="size_of_discount">45</p><span>%</span>

                        </div>
                    </div>
                </div>
                <div class="game__item">
                    <div class="game__item_left">
                        <div class="game__img" style="background-image: url(img/Cyberpunk.jpg)"></div>
                        <div class="game__info">
                            <a class="game__name" href="">Cyberpunk</a>
                            <div class="game__info__bottom">
                                <div class="game__platforms">
                                    <img src="img\steam.svg" alt="" class="game__platform">
                                </div>
                                <div class="game__genres">
                                    <a class="game__genre" href="">
                                        RPG
                                    </a>

                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="game__item_right">
                        <div class="game__price__block">
                            <p class="game__price">899</p><img src="img\grivna.svg" alt="" class="currency">
                        </div>
                    </div>
                </div>
                <div class="game__item">
                    <div class="game__item_left">
                        <div class="game__img" style="background-image: url(img/hope.jpg)"></div>
                        <div class="game__info">
                            <a class="game__name" href="">The Dark Picture Anthology: Little Hope</a>
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
                            <p class="game__price">499</p><img src="img\grivna.svg" alt="" class="currency">
                        </div>

                    </div>
                </div>
                <div class="game__item">
                    <div class="game__item_left">
                        <div class="game__img" style="background-image: url(img/medan.jpeg)"></div>
                        <div class="game__info">
                            <a class="game__name" href="">The Dark Picture Antthology: Man of Medan</a>
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
                            <p class="game__price">249</p><img src="img\grivna.svg" alt="" class="currency">
                        </div>
                        <div class="game_discount">
                            <span>-</span>
                            <p class="size_of_discount">58</p><span>%</span>

                        </div>
                    </div>
                </div>
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
                        <div class="game__img" style="background-image: url(img/dmc.jpg)"></div>
                        <div class="game__info">
                            <a class="game__name" href="">Devil May Cry 5</a>
                            <div class="game__info__bottom">
                                <div class="game__platforms">
                                    <img src="img\steam.svg" alt="" class="game__platform">
                                </div>
                                <div class="game__genres">
                                    <a class="game__genre" href="">
                                        Экшен
                                    </a>

                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="game__item_right">
                        <div class="game__price__block">
                            <p class="game__price">625</p><img src="img\grivna.svg" alt="" class="currency">
                        </div>
                        <div class="game_discount">
                            <span>-</span>
                            <p class="size_of_discount">25</p><span>%</span>

                        </div>
                    </div>
                </div>
                <div class="hidden__games4">
                    <div class="game__item"></div>
                    <div class="game__item"></div>
                    <div class="game__item"></div>
                    <div class="game__item"></div>
                </div>
                <p class="show__more4">Show more</p>
            </div>
        </div>
        <div class="list__right__side">
            <div class="list__title2">
                <p class="list__title__text">Каталог товаров</p>
            </div>
            <div class="list__right__side__price">
                <div class=" filter__title">
                    <p class="title__text">
                        Цена
                    </p>
                </div>
                <div class="price__selectors">
                    <select name="" id="" class="right__side__select">
                        <option value="">От 0</option>
                        <option value="">От 100</option>
                        <option value="">От 500</option>
                        <option value="">От 1500</option>
                    </select>
                    <select name="" id="" class="right__side__select">
                        <option value="">До 3000</option>
                        <option value="">До 1500</option>
                        <option value="">До 500</option>
                        <option value="">До 100</option>
                    </select>
                </div>
            </div>
            <div class="list__right__side__genres">
                <div class=" filter__title">
                    <p class="title__text">
                        Жанры
                    </p>
                </div>
                <div class="checkboxs">
                    <div>
                        <div class="genre__checkbox">
                            <div class="checkbox checkbox1"></div><span class="checkbox__text">Экшен</span>
                        </div>
                        <div class="genre__checkbox">
                            <div class="checkbox checkbox2"></div><span class="checkbox__text">Стратегии</span>
                        </div>
                        <div class="genre__checkbox">
                            <div class="checkbox checkbox3"></div><span class="checkbox__text">Гонки</span>
                        </div>
                        <div class="genre__checkbox">
                            <div class="checkbox checkbox4"></div><span class="checkbox__text">Казуальные</span>
                        </div>
                    </div>
                    <div>
                        <div class="genre__checkbox">
                            <div class="checkbox checkbox5"></div><span class="checkbox__text">RPG</span>
                        </div>
                        <div class="genre__checkbox">
                            <div class="checkbox checkbox6"></div><span class="checkbox__text">Симуляторы</span>
                        </div>
                        <div class="genre__checkbox">
                            <div class="checkbox checkbox7"></div><span class="checkbox__text">Приключения</span>
                        </div>
                        <div class="genre__checkbox">
                            <div class="checkbox checkbox8"></div><span class="checkbox__text">Спорт</span>
                        </div>
                    </div>

                </div>


            </div>
            <div class="list__right__side__tags">
                <div class=" filter__title">
                    <p class="title__text">
                        Метки
                    </p>
                </div>

                <form action=""><input type="text" name="" value="" class="tags__find">
                    <img src="img\loupe.svg" alt="" class="find__img">
                </form>
                <div class="genre__checkbox">
                    <div class="checkbox checkbox9"></div><span class="checkbox__text">RPG</span>
                </div>
                <div class="genre__checkbox">
                    <div class="checkbox checkbox10"></div><span class="checkbox__text">Симуляторы</span>
                </div>
                <div class="genre__checkbox">
                    <div class="checkbox checkbox11"></div><span class="checkbox__text">Приключения</span>
                </div>
                <div class="genre__checkbox">
                    <div class="checkbox checkbox12"></div><span class="checkbox__text">Спорт</span>
                </div>
            </div>
            <div class="list__right__side__gamemode">
                <div class=" filter__title">
                    <p class="title__text">
                        Режим игры
                    </p>
                </div>
                <div class="gamemodes">
                    <div class="gamemode"><img src="img\user-icon1.svg" alt="" class="gamemode__img"><span class="gamemode__name">Одиночный</span></div>
                    <div class="gamemode"><img src="img\users2.png" alt="" class="gamemode__img"><span class="gamemode__name">Кооперативный</span></div>
                    <div class="gamemode"><img src="img\users3.png" alt="" class="gamemode__img"><span class="gamemode__name">Мультиплеер</span></div>
                </div>

            </div>
            <div class="list__right__side__date">
                <div class=" filter__title">
                    <p class="title__text">
                        Дата выхода
                    </p>
                </div>
                <div class="date__inputs">
                    <select name="" id="" class="right__side__select">
                        <option value="">2000</option>
                        <option value="">2005</option>
                        <option value="">2010</option>
                        <option value="">2015</option>


                    </select>
                    <select name="" id="" class="right__side__select">
                        <option value="">2005</option>
                        <option value="">2010</option>
                        <option value="">2015</option>
                        <option value="">2020</option>
                    </select>
                </div>
            </div>
        </div>

    </div>
</div>
</div>
<script src="main2.js"></script>
</body>

</html>
