<?php>
    session_start();
$period_cookie = 2592000; // 30 дней (2592000 секунд)

if($_GET){
    setcookie("utm_source",$_GET['utm_source'],time()+$period_cookie);
    setcookie("utm_medium",$_GET['utm_medium'],time()+$period_cookie);
    setcookie("utm_term",$_GET['utm_term'],time()+$period_cookie);
    setcookie("utm_content",$_GET['utm_content'],time()+$period_cookie);
    setcookie("utm_campaign",$_GET['utm_campaign'],time()+$period_cookie);
}

if(!isset($_SESSION['utms'])) {
    $_SESSION['utms'] = array();
    $_SESSION['utms']['utm_source'] = '';
    $_SESSION['utms']['utm_medium'] = '';
    $_SESSION['utms']['utm_term'] = '';
    $_SESSION['utms']['utm_content'] = '';
    $_SESSION['utms']['utm_campaign'] = '';
}
$_SESSION['utms']['utm_source'] = $_GET['utm_source'] ? $_GET['utm_source'] : $_COOKIE['utm_source'];
$_SESSION['utms']['utm_medium'] = $_GET['utm_medium'] ? $_GET['utm_medium'] : $_COOKIE['utm_medium'];
$_SESSION['utms']['utm_term'] = $_GET['utm_term'] ? $_GET['utm_term'] : $_COOKIE['utm_term'];
$_SESSION['utms']['utm_content'] = $_GET['utm_content'] ? $_GET['utm_content'] : $_COOKIE['utm_content'];
$_SESSION['utms']['utm_campaign'] = $_GET['utm_campaign'] ? $_GET['utm_campaign'] : $_COOKIE['utm_campaign'];
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=480">
    <title>БРОНИРОВАННАЯ ПЛЁНКА</title>
    <meta name="description" content="Бронированная гидрогелевая плёнка">
    <link rel="shortcut icon" href="img/favicon.png" type="image/png">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="fonts/Montserrat/Montserrat.css">
    <link rel="stylesheet" href="js/slider/slick-1.8.0/slick.css">
    <link rel="stylesheet" href="css/settings.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<!--wrap-->
<div class="wrap">

    <!--offer-->
    <section class="offer">
        <div class="title">
            <h1><span style="font-size: 18px">Бронированная гидрогелевая 
                плёнка</span></h1>
            <h2>ARMOR</h2>
        </div>
       <!-- <div class="sale">скидка <b>-53%</b></div> -->
        <div class="bullet">
            <h4>Подходит для смартфона и для smart-часов</h4>
            <ul>
                <li>
                    <img src="img/bullet-im1.jpg" alt="">
                    <p> <b>Олеофобное покрытие</b> <br> Палец легко скользит
                        по экрану</p>
                </li>
                <li>
                    <img src="img/bullet-im2.jpg" alt="">
                    <p> <b>Высшая степень
                        прочности</b> <br>  В 3 раза прочнее обычного
                            5д стекла</p>
                </li>
                <li>
                    <img src="img/bullet-im3.jpg" alt="">
                    <p> <b>Любой экран</b> <br> Мы вырезаем и отправляем
                        плёнку именно под
                        Ваш экран</p>
                </li>
            </ul>
        </div>
        <!--timer-->
        <div class="timer clrfix">
            <div class="timer-box"></div>
        </div>
        <!--/timer-->
        <!--price-->
        <div class="price clrfix">
            <div class="item">
                <p>Обычная цена:</p>
                <div class="value"><span>349 грн</span></div>
            </div>
            <div class="item">
                <p>Цена по акции:</p>
                <div class="value"><span>199 грн</span></div>
            </div>
        </div>
        <!--/price-->
        <a href="#order" class="button-m">Заказать сейчас</a>
        <div class="stock">Осталось <b>13</b> пленок</div>
    </section>
    <!--/offer-->

    <img class="image" src="img/photo-big.jpg" alt="">
    <!--b1-->
    <section class="b1">
        <h2 class="title">-ARMOR - <br>ЛУЧШИЙ ЗАЩИТНИК <span>ВАШЕГО ЭКРАНА</span></h2>
        <div class="desc">
            <img class="image" src="img/b1-im1.jpg" alt="">
            <p>
                ARMOR - Новая бронированная гидрогелевая защитная пленка для ЛЮБОГО смартфона и смарт часов. 
<br><br>
Чаще всего, клиенты клеят плёнку прямо при покупке смартфона в магазине, но не все знают, что эти плёнки
не настолько "прочные" как про них рассказывают консультанты при продаже
            </p>
        </div>
        
        <div class="video_block">
            <div class="youtube" id="OSuUSk7UfW4"></div>
        </div>
    </section>
    <!--/b1-->

    <!--b2-->
    <section class="b2">
        <h2 class="title">Почему Armor <span>так всем нравится?</span></h2>
        <!--benefit_list-->
        <div class="benefit_list">
            <!--item-->
            <div class="item">
                <div class="txt">
                    <img src="img/benefit-im1.jpg" alt="">
                    <h4>Высшая степень прочности</h4>
                    <p>
                        В 3 раза прочнее 5д стекла. Автоматическое восстановление царапин (То есть, если поцарапать экран, то царапина тут же самоуничтожится).
                    </p>
                </div>
            </div>
            <!--/item-->
            <!--item-->
            <div class="item">
                <div class="txt">
                    <img src="img/benefit-im3.jpg" alt="">
                    <h4>Кристально-чистая</h4>
                    <p>
                        Олеофобное покрытие. Незаметная на экране. Легко клеится на весь экран до самых краев. Не остаються отпечатки пальцев
                    </p>
                </div>
            </div>
            <!--item-->
            <div class="item">
                <div class="txt">
                    <img src="img/benefit-im2.jpg" alt="">
                    <h4>Подойдет ли пленка под мой размер?</h4>
                    <p>
                        Мы изготавливаем плёнку на собственном дорогостоящем оборудовании, которое позволяет вырезать плёнку абсолютно под любой смартфон или смарт-часы.
                    </p>
                </div>
            </div>
            <!--item-->
            <div class="item">
                <div class="txt">
                    <img src="img/b1-im11.jpg" alt="">
                    <h4>Что я получу в комплекте?</h4>
                    <p>
                        За 199 грн вы получите: Пленку, стильную коробку, салфетку из микрофибры, спиртовую салфетку, стикер, пластиковую карту, бонусы)
                    </p>
                </div>
            </div>
            </div>
                    <!--/benefit_list-->
        <a href="#order" class="button-m">Заказать сейчас</a>
        <div class="stock">Осталось <b>13</b> пленок</div>
    </section>
    <!--/b2-->

    <!--characteristic-->
    <section class="characteristic">
        <h2 class="title">Любишь свой Смартфон? <span>  Мы поможем его защитить!</span></h2>
        <div class="top_text">
            Наша пленка защитит ваш гаджет на 100%.
        </div>
        <div class="box">
            <!--slider_photo-->
            <div class="slider_photo">
                <div class="item"><img src="img/slide1.jpg" alt=""></div>
                <div class="item"><img src="img/slide2.jpg" alt=""></div>
                <div class="item"><img src="img/slide3.jpg" alt=""></div>
            </div>
            <!--/slider_photo-->
            
            <ul>
                <li><b>Материал покрытия:</b> <span> Олеофобное</span></li>
                <li><b>Размеры:</b> <span> под любой гаджет</span></li>
                <li><b>Страна изготовитель:</b> <span> Украина</span></li>
                <li><b> Толщина плёнки:</b> <span> 0,18 мм.</span></li>
		<li><b> Комплектация:</b> <span> За 199 грн вы получите: Пленку, стильную коробку, салфетку из микрофибры, спиртовую салфетку, стикер, пластиковую карту, бонусы</span></li>


		
            </ul>
        </div>
    </section>
    <!--/characteristic-->

    <!--b3-->
    <section class="b3">
        <h2 class="title">Тебе дороги твои смарт часы? <span>НАКЛЕЙ бронированную защитную пленку!</span></h2>
        <img class="image" src="img/photo-big2.jpg" alt="">
        <a href="#order" class="button-m">Заказать сейчас</a>
        <div class="stock">Осталось <b>13</b> пленок по акции</div>
    </section>
    <!--/b3-->

    <!--reviews-->
    <section class="reviews">
        <h2 class="title">Отзывы наших <span>покупателей</span></h2>
        <!--slider-->
        <div class="slider">
            <!--item-->
            <div class="item">
                <div class="photo">
                    <img src="img/rev-im1.jpg" alt="">
                </div>
                <div class="ava">
                    <img src="img/rev-ava1.jpg" alt="">
                </div>
                <h4>Дмитрий Фомин, 28 лет</h4>
                <p>
                    Я в шоке от пленки, по такой цене получить такое качество! Просто блеск! Я до сих пор не верю. Вживую смотрится очень круто, при этом вид телефона не портится. Менеджеры очень приятные. Большое вам спасибо!
                </p>
            </div>
            <!--/item-->
            <!--item-->
            <div class="item">
                <div class="photo">
                    <img src="img/rev-im2.jpg" alt="">
                </div>
                <div class="ava">
                    <img src="img/rev-ava2.jpg" alt="">
                </div>
                <h4>Иван Ивазов, 32 года</h4>
                <p>
                    Купил месяц назад. Забрал на почте через 2 дня, сразу проверил всё, повертел в руках, абсолютно такое же, как на фото. Качество просто отличное. Уже месяц пользуюсь - очень удобно! Защита на высоте! Спасибо!
                </p>
            </div>
            <!--/item-->
            <!--item-->
            <div class="item">
                <div class="photo">
                    <img src="img/rev-im3.jpg" alt="">
                </div>
                <div class="ava">
                    <img src="img/rev-ava3.jpg" alt="">
                </div>
                <h4>Андрей Груничев, 30 лет</h4>
                <p>
                    Пленка Armor – супер! Качество очень хорошее. Всё пришло очень быстро, да и за такие небольшие деньги это отличное приобретение!! Всем рекомендую заказывать именно здесь.                </p>
            </div>
            <!--/item-->
        </div>
        <!--/slider-->
        
    </section>
    <!--/reviews-->

    <!--order_info-->
    <section class="order_info">
        <h2 class="title"><span>Как сделать заказ?</span></h2>
        <ul>
            <li>
                <div class="item">
                    <p>Оставляете заявку на нашем сайте</p>
                </div>
            </li>
            <li>
                <div class="item">
                    <p>Менеджер уточняет детали заказа</p>
                </div>
            </li>
            <li>
                <div class="item">
                    <p>Доставляем заказ в течение 3-10 дней</p>
                </div>
            </li>
            <li>
                <div class="item">
                    <p>Оплачиваете заказ при получении</p>
                </div>
            </li>
        </ul>
        <!--guarantees-->
        <div class="guarantees">
            <div class="txt">
                <img src="img/guarantees-icon.png" alt="">
                <h4>Гарантия качества</h4>
                <p>
                    БРОНИРОВАННАЯ ГИДРОГЕЛЕВАЯ ПЛЁНКА ARMOR соответствует всем стандартам качества и безопасности. Перед отправкой мы тщательно
                    проверяем товар на предмет заводского брака и дефектов.
                </p>
                <h4 class="line">Гарантия магазина</h4>
                <p>
                    Мы соблюдаем не только законы, но и человеческие отношения, поэтому при возникновении претензий со
                    стороны покупателя, мы решим проблему в самые
                </p>
            </div>
        </div>
        <!--/guarantees-->
    </section>
    <!--/order_info-->


    <!--offer-->
    <section class="offer bottom">
        <div class="title">
            <h1><span style="font-size: 18px">Бронированная гидрогелевая 
                плёнка</span></h1>
            <h2> ARMOR </h2>
        </div>
        <!--<div class="sale">скидка <b>-53%</b></div>-->
        <div class="bullet">
            <h4>Подходит для смартфона и для smart-часов</h4>
        </div>
        <!--timer-->
        <div class="timer clrfix">
            <div class="timer-box"></div>
        </div>
        <!--/timer-->
        <!--price-->
        <div class="price clrfix">
            <div class="item">
                <p>Обычная цена:</p>
                <div class="value"><span>349 грн</span></div>
            </div>
            <div class="item">
                <p>Цена по акции:</p>
                <div class="value"><span>199 грн</span></div>
            </div>
        </div>
        <!--/price-->
        <div class="stock">Осталось <b>13</b> пленок</div>
        <!--m1-form-->
        <form class="m1-form" id="order" action="zakaz.php" method="post" onsubmit="if(this.name.value==''){alert('Введите Ваше имя');return false}if(this.phone.value==''){alert('Введите Ваш номер телефона');return false}return true;">
            <input class="field name" type="text" name="name" placeholder="Введите имя" autocomplete="off" required>
            <input class="field phone" type="tel" name="phone" placeholder="Введите телефон" autocomplete="off" required>
            <button class="button-m">Заказать сейчас</button>
        </form>
        <!--/m1-form-->
        <div class="private">
            <span>Полностью конфиденциально.</span>
            Ваши данные не будут переданы третьим лицам.
        </div>
    </section>
    <!--/offer-->

    <!--footer-->
    <footer class="footer">
        <p>
            <a href="?page=politics" target="_blank">Политика&nbsp;конфиденциальности</a>
            
        </p>
    </footer>
    <!--/footer-->
</div>
<!--/wrap-->





<link rel="stylesheet" type="text/css" href="fonts/roboto.css">
<script src="js/jquery.js" type="text/javascript"></script>
<script src="js/plugins.js" type="text/javascript"></script>
<script src="js/detect.js" type="text/javascript"></script>


<script src="js/youtube/previewYouTube.js"></script>
<script src="js/slider/slick-1.8.0/slick.min.js"></script>
<script src="js/init.js"></script>
</body>
</html>
