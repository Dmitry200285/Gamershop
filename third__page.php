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
    <title>Gamershop</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/normalize.css">
</head>
<body>
<header class="header">
    <div class="content header__content">
        <div class="header__left" >
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


</header>
<div class="reasons">
    <div class="content">
        <div class="reasons__title">
            <p class="reasons__title__text">
                Почему именно мы
            </p>
        </div>
        <div class="reason__items">
            <div class="reason__item">
                <div class="reason__item__left">
                    <img src="img\new-product.svg" alt="" class="reason__item__img">
                </div>
                <div class="reason__item__right">
                    <p class="reason__item__title">Большой ассортимент товара</p>
                    <p class="reason__item__text">В нашем магазине у вас не возникнет проблем в выбором товара. На нашем сайте есть все для заядлого геймера, от раритетных платформеров до новейших экшенов.</p>
                </div>
            </div>
            <div class="reason__item">
                <div class="reason__item__left">
                    <img src="img\sale.png" alt="" class="reason__item__img">
                </div>
                <div class="reason__item__right">
                    <p class="reason__item__title">Акции и скидки</p>
                    <p class="reason__item__text">На нашем регулярно дейстувуют скидки не только на старый товар, но также вы сможете купить долгожданую игру по скидочной цене.</p>
                </div>
            </div>
            <div class="reason__item">
                <div class="reason__item__left">
                    <img src="img\promo.png" alt="" class="reason__item__img">
                </div>
                <div class="reason__item__right">
                    <p class="reason__item__title">Промокоды</p>
                    <p class="reason__item__text">Переодически на нашем сайте работают промокоды благодаря которым вы сможете получить приятные бонусы при пополнении счета и при покупке.</p>
                </div>
            </div>
            <div class="reason__item">
                <div class="reason__item__left">
                    <img src="img\MoneyOff.png" alt="" class="reason__item__img">
                </div>
                <div class="reason__item__right">
                    <p class="reason__item__title">Низкая цена</p>
                    <p class="reason__item__text">У нас вы не увидете цен, как в популярних игровых площадках. У нас идет минимальная наценка на продукт продаваемый на сайте. Мы хотим чтобы вы играли в хорошие игры по приятным ценам..</p>
                </div>
            </div>
            <div class="reason__item">
                <div class="reason__item__left">
                    <img src="img\bonus.png" alt="" class="reason__item__img">
                </div>
                <div class="reason__item__right">
                    <p class="reason__item__title">Бонусы</p>
                    <p class="reason__item__text">Купив игру на нашем вы не только сможете насладиться игрой, но и также получите бонусы которые в процессе сможете потратить уже при следующей покупке.</p>
                </div>
            </div>
            <br>
            <div class="reason__item">
                <div class="reason__item__left">
                    <img src="img\key.png" alt="" class="reason__item__img">
                </div>
                <div class="reason__item__right">
                    <p class="reason__item__title">Официальные ключи</p>
                    <p class="reason__item__text">Весь продаваемый товар закупаеться у официальних дилеров, которые в свою очередь закупают товар напрямую  у издателей.</p>
                </div>

            </div>

            <div class="reason__item">
                <div class="reason__item__left">
                    <img src="img\new-product.svg" alt="" class="reason__item__img">
                </div>
                <div class="reason__item__right">
                    <p class="reason__item__title">Последние новинки</p>
                    <p class="reason__item__text">У нас новинки игровой индустрии появлються раньше чем у других дилеров. Благодаря чему вы можете преобрести желанный продукт первыми.</p>
                </div>
            </div>
        </div>


    </div>
</div>
<div class="payment__block">
    <div class="content">
        <p class="payment__title">
            Несколько способов оплаты
        </p>
        <div class="type_of_payment">
            <a href=""><img src="img\easypay.png" alt=""></a>
            <div class="borderr"></div>
            <a href=""><img src="img\web-money.png" alt=""></a>
            <div class="borderr"></div>
            <a href=""><img src="img\visa.png" alt=""></a>
            <div class="borderr"></div>
            <a href=""><img src="img\qiwi.png" alt=""></a>
        </div>
    </div>
</div>
</body>
</html>
