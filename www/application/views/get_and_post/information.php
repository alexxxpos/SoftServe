<form class="register"> 
    <h1>Выбрано <b><?= $type ?></b></h1>
    <fieldset class="row1">
        <legend>Обязательные данные
        </legend>
        <p>
            <label class="long">Email:  <?= $email ?></label>
            <label class="long">Пароль: <?= $password ?></label> 
        </p>
        <p></p>
    </fieldset>
    <fieldset class="row2">
        <legend>Личные данные
        </legend>
        <p>
            <label class="long">Имя: <?= $name ?></label>
        </p>
        <p>
            <label>Телефон: <?= $tel ?></label>
        </p>

        <p>
            <label>Город: <?= $city ?></label>
        </p>
        <p>
            <label>Страна: <?= $country ?></label>
        </p>
        <p>
            <label class="optional">Website: <?= $web ?></label>
        </p>
    </fieldset>
    
    <fieldset class="row3">
        <legend>Дополнительная информация
        </legend>
        <p>
            <label>Пол: <?= $gender ?></label>
        </p>
        <p>
            <label>Дата рождения: <?= $date ?> <?= $month ?></label>
        </p>
        <p>
            <label>Национальность: <?=$nationality ?></label>
        </p>
        <p>
            <label>Дети: <?=$children ?></label>
        </p>
        <div class="infobox"><h4>Вот и все=)</h4>
            <p>Спасибо за Ваше внимание. Вы великолепны=)</p>
        </div>
    </fieldset>


</form>