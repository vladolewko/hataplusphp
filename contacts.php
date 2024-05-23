<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/contacts.css">
    <link rel="stylesheet" href="css/general.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">

</head>

<body>
    <header>
        <nav>
            <div class="wrapper">
                <div class="navigation">
                    <div class="menu">
                        <ul class="mainmenu">
                            <li><a href="index.php">Головна</a></li>
                            <li><a href="#">Про компанію</a>
                                <ul class="submenu">
                                    <li><a href="#">Продані</a></li>
                                    <li><a href="#">Заброньованні</a></li>
                                    <li class="rel"><a href="#">В процесі</a>
                                        <ul class="second-submenu">
                                            <li><a href="#">Продані</a></li>
                                            <li><a href="#">Заброньованні</a></li>
                                            <li><a href="#">В процесі</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="price.php">Наші будівлі</a></li>
                            <li><a href="#">Акції</a></li>
                            <li><a href="contacts.php">Контакти</a></li>
                        </ul>
                    </div>
                    <div class="social">
                        <ul class="socials">
                            <li><a href="#" class="fb"></a></li>
                            <li><a href="#" class="tw"></a></li>
                            <li><a href="#" class="inst"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>


        <div class="wrapper">
            <div class="header-info">
                <a href="index.html"><img src="img/logo.png" alt="Main Logo"></a>
                <div class="phone">
                    <p><a class="phn" href="#">+38(097) 100-25-25</a></p>
                    <p><a href="#">+38(097) 100-25-25</a></p>
                </div>
                <div class="email">
                    <p><a class="eml" href="#">hataplus@hata.com.ua</a></p>
                    <p><a class="skype" href="#">hataplus</a></p>
                </div>
                <div class="buttoncall">
                    <a href="#">Замовити дзвінок</a>
                </div>
            </div>
        </div>
    </header>



    <main>
        <div class="wrapper">
            <h1>Контакти</h1>
            <div class="contacts">

                <div class="column">
                    <p>Наш офіс</p>
                    <ul>
                        <li>
                            <p>с. Війтівці, Хмельницька обл. 27500</p>
                        </li>
                        <li><a href="#">+38(097) 100-25-25</a></li>
                        <li><a href="#">+38(097) 100-25-25</a></li>
                        <li>
                            <p>hataplus@hata.com.ua</p>
                        </li>
                    </ul>
                </div>
                <div class="column">
                    <p>Консультація</p>
                    <ul>
                        <li>
                            <p>менеджер:</p>
                        </li>
                        <li><a href="#">+38(067) 123-10-05</a></li>
                        <li>
                            <p>директор:</p>
                        </li>
                        <li><a href="#">+38(068) 950-27-91</a></li>
                    </ul>
                </div>
                <div class="column">
                    <p>Реквізити</p>
                    <ul>
                        <li>
                            <p>ЄДРПОУ 60045123, ІПН 991097555173 Св.№59904423</p>
                        </li>
                        <li>
                            <p>Р/р 11137539962221, Банк ХФ ПАТ КБ «ПРИВАТБАНК»</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="wrapper">
            <div class="contact">
                <div class="map">
                    <iframe
                        src="https://www.google.com/maps/d/embed?mid=16osAp7qFH5mLCMcBp6g2xEI88IBJiMk&ehbc=2E312F"></iframe>
                </div>
                <form action="#">
                    <div class="communication">

                        <div class="row">

                            <th colspan="2">
                                <h2>Форма зворотнього зв’язку</h2>
                            </th>

                        </div>
                        <div class="row">

                            <p><label for="name"></label><input type="text" name="name" id="name"
                                    placeholder="Ваше ім’я"></p>
                            <p><label for="phone"></label><input type="tel" name="name" id="phone"
                                    placeholder="Телефон"></p>

                        </div>
                        <div class="row">

                            <p><label for="message"></label><input type="text" name="mess" id="message"
                                    placeholder="Тема повідомлення"></p>
                        </div>
                        <div class="row textarea">
                            <p>
                                <label for="text"></label><textarea name="text" id="text" cols="30" rows="10"
                                    placeholder="Текст"></textarea>
                            </p>
                        </div>
                        <div class="row last">
                            <p><input class="button" type="button" value="Відправити" id="button"><label
                                    for="button">Відправити</label></p>
                            <p class="checkbox"><input type="checkbox" id="check"><label for="check">Я бажаю отримувати
                                    останні новини</label></p>
                        </div>

                    </div>
                </form>
            </div>
        </div>


    </main>


    <footer>

        <div class="footer-line">
            <div class="wrapper">
                <div class="navigation">
                    <div class="bottommenu">
                        <ul>
                            <li><a href="#">Будинки</a></li>
                            <li><a href="#">Інфраструктура</a></li>
                            <li><a href="#">Сервіс</a></li>
                            <li><a href="#">Новини</a></li>
                        </ul>
                    </div>
                    <div class="bottommenu">
                        <ul>
                            <li><a href="#">Про компанію</a></li>
                            <li><a href="#">Страхування</a></li>
                            <li><a href="#">Контакти</a></li>
                        </ul>
                    </div>
                    <div class="phone">
                        <p><a class="phn" href="#">+38(097) 100-25-25</a></p>
                        <p><a href="#">+38(097) 100-25-25</a></p>
                    </div>
                    <div class="email">
                        <p><a class="eml" href="#">hataplus@hata.com.ua</a></p>
                        <p><a class="skype" href="#">hataplus</a></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="coperate">

            <p>&copy; Будівельна компанія “Хата Плюс” 2018.</p>

        </div>
    </footer>



</body>

</html>