<?php
$title="Cat breeds"; //title, который название страницы
date_default_timezone_set("Europe/Moscow");
$today = date('d.m.Y в H-i:s'); //дата, время
$array = array('Погладить','Покормить','Поласкать','Обнять','Поиграть','Дать вкусняшку', 'Не мешать спать'); 
?>
<head>
    <title>Лабораторная работа 1</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">  <!--подключение стилей css -->
    <link rel="preconnect" href="https://fonts.googleapis.com"> <!--подключение шрифтов -->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans+Narrow&display=swap" rel="stylesheet"> 
</head>

<body>
    <header>
        <p><div id = "catalog_cat"><a href = "main.html">КАТАЛОГ ПОРОД КОШЕК</a> </div>
        <div id = "main_search">Главная
        Поиск
        <a href = "login.html">Войти</a></div></p>
    </header>

    <div class = "main">
        <secion class="title">
                    <h1>Породы кошек</h1>
                </section>
                <section class="history">
                    <div class="text">
                        <h2>Бенгальская кошка</h2>
                        <p> 
                            Бенгальская порода кошек возникла в результате целенаправленного скрещивания дикого азиатского кота с домашней кошкой. 
                            Основательница породы Джейн Милл - американский биолог, хотела, чтобы люди смогли содержать дома ласковое и ручное животное, 
                            напоминающее дикого жителя джунглей, и перестали истреблять лесного хищника в его естественной среде обитания. 
                            Бенгальские кошки впервые приняли участие в выставке TICA в 1991 г, а на сегодняшний день порода признана большинством 
                            фелинологических организаций.
                        </p>
                    </div>
                    
                    <img src="cat3.jpg" alt="cat" title="бенгальский котенок" width="300"> 

                </section> 
                
                <section class="new">
                    <h2>Фотографии</h2>
                    <div class="text_img">
                            <?php
                                include "database.php";
                                $sql = "SELECT * FROM image";
                                $result = mysqli_query($db, $sql);//обращение к бд
                                
                                if (!$result) die('Error result');
                                
                                while ($row_img = mysqli_fetch_assoc($result)) { //(вывод данных из бд) получает массив из запроса который отправили (из result)
                                    ?>
                                        <img title="<?php echo $row_img['name'];?>" src="<?php echo $row_img['src']?>" height="300" />
                                        
                                    <?php
                                }
                            ?>
                        </div>
                </section>

                <section class="foto_cats">
                    <div class="text">
                        <h2>Описание породы</h2>
                        <p>
                            Мощное и вытянутое тело с хорошо развитой мускулатурой, костяк крепкий, лапы средней длины. Голова пропорциональная по 
                            отношению к туловищу с хорошо развитыми челюстями. Уши довольно короткие с широким основанием, расположены максимально широко. 
                            Глаза округлые, яркие и выразительные.
                        </p>
                    </div>
                    <? echo '<img title="кот сидит" src="cat'.(date('s') % 2+1).'.jpg" alt="Меняющаяся фотография">'; ?>

                </section>  

                <section class="formule_cats_love">
                <h2>Рецепт достижния любви котиков</h2>
                <? foreach ($array as $n => $row) {
                    echo ($n + 1) . '.' . $row . "<br>\r\n";
                } ?>
              </section> 
        </secion>
    </div>
    
    <footer>
        <p>Контактная информация</p>
        <p>Горностаева Екатерина 211-362</p>
        <p>Почта: kate.gornostaeva@inbox.ru </p>
        <p><a href="feedback.html">Обратная связь</a></p>
    </footer>
</body>


