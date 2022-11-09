<?php
$title="Cat breeds";//title, который название страницы

date_default_timezone_set("Europe/Moscow"); //дата, время
$today= date("d.m.y");
$time = date("G:i:s");

$s = date("s"); // определяем текущую секунду
$os = (int)$s % 2; // определяем текущую секунду

$img1;

if($os == 0){ // если в переменной $os хранится ноль
    $img1 = "cat"; // сохраняем имя первого файла
} else { // иначе
    $img1 = "cat2"; // сохраняем имя второго файла
}

$array = array('Погладить','Покормить','Поласкать','Обнять','Поиграть','Дать вкусняшку', 'Не мешать спать');
//список, динамически формируется из массива
?>

<?php require("header.php")?>
<?php require("main.php")?>
<?php require("footer.php")?>