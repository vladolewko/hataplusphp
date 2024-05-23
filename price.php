
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/price.css">
    <link rel="stylesheet" href="css/general.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
</head>

<body>
<?php
require 'House.php';

$json_file_houses = 'json/houses.json';
$json_houses = file_get_contents($json_file_houses);
$houses = json_decode($json_houses, true);

if (!is_array($houses)) {
    $houses = [];
}

    if ($_POST) {
        $admin = $_POST["admin"];
        $new_house = new House($house_name, $house_square, $house_rooms, $house_car, $house_img, $house_cost);
        $houses[] = $new_house;
        House::saveHousesToFile($json_file_houses, $houses);
    }
    else{
        $admin = 0;
    }

?>


<div class="form">
    <a href="admin.php">login as admin?</a>
    </div>
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
                                    </ul></li>
                            </ul></li>
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

    <div class="wrapper">
        <main>
            <section class="description">
                <h1>Ціни на послуги тимчасового проживання</h1>
                <p>Кожен котедж оснащений комфортабельними меблями, супутниковим ТБ, душем, туалетом, холодильником,
                    Wi-Fi-зоною. Послуга може бути надана кожному з наших гостей, незалежно від терміну проживання в
                    готелі та категорії
                    обраного номера.</p>
            </section>
            <table>
                

                    <?php if($houses !== NULL):?>
                        <thead>
                            <tr>
                                <th><p>Назва котеджу</p></th>
                                <th><p>Загальна площа м.кв.</p></th>
                                <th><p>Кількість кімнат</p></th>
                                <th><p>Гараж</p></th>
                                <th><p>Ціна</p></th>
                            </tr>
                        </thead>
                        <?php
                        $json_file_houses = 'json/houses.json';
                        $json_houses = file_get_contents($json_file_houses);
                        $houses = json_decode($json_houses, true);

                        foreach($houses as $house) {
                            $name = $house["name"];
                            $square = $house["square"];
                            $rooms = $house["rooms"];
                            $car = $house["car"];
                            $img = $house["img"];
                            $cost = $house["cost"];
                            $id = $house["id"];
                        
                        echo "<tbody>";
                            echo "<tr>";
                                echo "<td><p>$name</p></td>";
                                echo "<td><p>$square</p></td>";
                                echo "<td><p>$rooms</p></td>";
                                echo "<td><p>$car</p></td>";
                                echo "<td><p>$cost $</p></td>";                    
                            echo "</tr>";
                        echo "</tbody>";
 
                        }
                        ?>
                    <?php endif;?>
                   
                   <?php if($admin == 1):?>
                    <form action="admin.php" method="POST">
                        <tr>
                            <td colspan="5">
                                <p>
                                    <input type="submit" name ="add" value="add">
                                    <input type="hidden" name="login" value="vlad">
                                    <input type="hidden" name="password" value="123123">
                                </p>
                            </td>
                        </tr>
                        </form>
                    <?php endif;?>
                </tbody>
            </table>
            <article>
                <p>Час заселення з 14-00, виїзд до 12-00.</p>
                <p>Можлива погодинна оренда котеджу (мінімальний час оренди - 5 днів).</p>
                <h2><a href="#">Ознайомитись з правилами проживання</a></h2>
            </article>
            <section class="popular">
                <h2>Популярні проекти</h2>
                <div class="examples">
                    <?php
                    if($houses !== NULL){
                        foreach($houses as $house) {

                            $name = $house["name"];
                            $square = $house["square"];
                            $rooms = $house["rooms"];
                            $car = $house["car"];
                            $img = $house["img"];
                        
                            echo "<figure class=\"edmonton\">";
                            echo "<img src=\"img/$img\" alt=\"first house\">";
                            echo "<a href=\"#\">";
                            echo "<h2>$name ($square м<sup>2</sup>)</h2>";
                            echo "</a>";
                            echo "<p>Загальна площа будови: $square м<sup>2</sup></p>";
                            echo "<p>Кількість спалень: $rooms</p>";
                            echo "<p>Гараж: $car авто</p>";
                            echo "</figure>";

 
                        }
                    }
                
                    ?>
                </div>
            </section>
        </main>
    </div>
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
    <?php

    ?>
</body>

</html>