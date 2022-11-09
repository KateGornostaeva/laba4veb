<!DOCTYPE html>
<html lang="ru">
<head>
    <title><?= $title?> </title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">  <!--подключение стилей css -->
    <link rel="preconnect" href="https://fonts.googleapis.com"> <!--подключение шрифтов -->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans+Narrow&display=swap" rel="stylesheet"> 
</head>

<body>
    <header id = "header">
        <p><div id = "catalog_cat"><a href = "site_main.php">КАТАЛОГ ПОРОД КОШЕК</a> </div>
        <div id = "main_search">Главная
        Поиск
        <a href = "<?php $name='Войти'; $link ='site_login.php'; $current_page=true; echo $link;?>">
            <?php if( $current_page ) echo $name;?> <!--второе включение PHP‐кода -->
        </a></div></p>
    </header>
</body>