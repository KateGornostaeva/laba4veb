
<div class="site_page_feedback">
    <form action="https://httpbin.org/post" method="post">
        <p><h3>Обратная связь</h3></p>
        <p>ФИО</p>
        <p><input type="text" id = "fio" size="40"></p>

        <p>Электронная почта</p>
        <p><input type="text" id = "email" size="40"></p>

        <p>Откуда вы о нас узнали?</p>
        <p><input type="radio" name="answer" value="a1">Учеба<Br>
        <input type="radio" name="answer" value="a2">Работа<Br>
        <input type="radio" name="answer" value="a3">Друзья</p>

        <p><select name="select">
            <option>Жалоба</option>
            <option>Предложение</option>
        </select></p>

        <p>Введите ваше сообщение</p>
        <p><textarea name="comment" cols="40" rows="6"></textarea></p></p>
        <p><input type="file" name="f">

        <p><input type="checkbox" name="a" value="согласие"> Даю согласие на обработку персональных данных</p>
        
        <p><input type="submit" value="Отправить"></p>
    
    </form>
</div>
