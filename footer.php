<footer id ="footer">
    <p>Контактная информация</p>
    <p>Горностаева Екатерина 211-362</p>
    <p>Почта: kate.gornostaeva@inbox.ru </p>
    <p><a href = "<?php $name='Обратная связь'; $link ='site_feedback.php'; $current_page=true; echo $link;?>">
        <?php if( $current_page ) echo $name;?> <!--второе включение PHP‐кода -->
    </a></p>
    <p><?php echo 'Сформировано ', $today, " в ", $time?></p>
</footer>