
<div class="site_page_answer">
    <?php
        if(isset($_POST['fio'])){
            $name=$_POST['fio'];
            $message=$_POST['comment'];
            $type_mess=$_POST['select'];
            // $radio=$_POST['radio'];
            if (isset($_POST['answer'])) {$radio=$_POST['answer'];} else {$radio='';}
        }
    ?>

    <?
        echo '<p>Здравствуйте, '.$_POST['fio'].'</p>';
        if ($_POST['select'] == 'Предложение'){
            echo '<p> Спасибо за ваше предложние:</p>';
            echo '<textarea>'.$_POST['comment'].'</textarea>';
        }else{
            echo '<p>Мы рассмотрим вашу жалобу:</p>';
            echo '<textarea>'.$_POST['comment'].'</textarea>';
        }
        if (isset($_FILES['file']) & $_FILES['file'] != '') echo '<p>Вы приложили следующий файл: '.$_FILES['file']['name'].'</p>';

        echo '<p><a href="site_feedback.php?N='.$_POST['fio'].'&E='.$_POST['email'].'&R='.$radio.'">Заполнить снова</a></p>';
    ?>
</div>
