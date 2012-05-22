<form id="main" action="get_and_post/get_result" method="get" class="register">
    <h1>Get & Post</h1>
    <fieldset class="row1">
        <legend>Обязательные данные
        </legend>
        <p>
            <label>Email *</label>
            <input name="email" type="text" value="exapmle@mail.my"/>
            <label>Пароль *</label>
            <input name="password" type="password" value="password"/>
        </p>
        <p>


        </p>
    </fieldset>
    <fieldset class="row2">
        <legend>Личные данные
        </legend>
        <p>
            <label>Имя *</label>
            <input name="name" type="text" class="long" value="Иванов Иван Иванович"/>
        </p>
        <p>
            <label>Телефон *</label>
            <input name="tel" type="text" maxlength="10" value="002"/>
        </p>

        <p>
            <label>Город *</label>
            <input type="text" name ="city" class="long" value="Днепр"/>
        </p>
        <p>
            <label>Страна *</label>
            <select name="country">
                <option></option>
                <option value="Россия">Россия</option>
                <option value="Украина">Украина</option>
            </select>
        </p>
        <p>
            <label class="optional">Website</label>
            <input name="web" class="long" type="text" value="http://"/>

        </p>
    </fieldset>
    <fieldset class="row3">
        <legend>Дополнительная информация
        </legend>
        <p>
            <label>Пол *</label>
            <input type="radio" name="gender" value="Мужской" checked/>
            <label class="gender">М</label>
            <input type="radio" name="gender" value="Женский"/>
            <label class="gender">Ж</label>
        </p>
        <p>
            <label>Дата рождения *</label>
            <select name="date" class="date">
                <option value="1">01
                </option>
                <option value="2">02
                </option>
                <option value="3">03
                </option>
                <option value="4">04
                </option>
                <option value="5">05
                </option>
                <option value="6">06
                </option>
                <option value="7">07
                </option>
                <option value="8">08
                </option>
                <option value="9">09
                </option>
                <option value="10">10
                </option>
                <option value="11">11
                </option>
                <option value="12">12
                </option>
                <option value="13">13
                </option>
                <option value="14">14
                </option>
                <option value="15">15
                </option>
                <option value="16">16
                </option>
                <option value="17">17
                </option>
                <option value="18">18
                </option>
                <option value="19">19
                </option>
                <option value="20">20
                </option>
                <option value="21">21
                </option>
                <option value="22">22
                </option>
                <option value="23">23
                </option>
                <option value="24">24
                </option>
                <option value="25">25
                </option>
                <option value="26">26
                </option>
                <option value="27">27
                </option>
                <option value="28">28
                </option>
                <option value="29">29
                </option>
                <option value="30">30
                </option>
                <option value="31">31
                </option>
            </select>
            <select name="month">
                <option value="Январь">Январь</option>
                <option value="Февраль">Февраль</option>
                <option value="Март">Март</option>
                <option value="Апрель">Апрель</option>
                <option value="Май">Май</option>
                <option value="Июнь">Июнь</option>
                <option value="Июль">Июль</option>
                <option value="Август">Август</option>
                <option value="Сентябрь">Сентябрь</option>
                <option value="Октябрь">Октябрь</option>
                <option value="Ноябрь">Ноябрь</option>
                <option value="Декабрь">Декабрь</option>
            </select>
            
        </p>
        <p>
            <label>Национальность *</label>
            <select name="nationality">
                <option value="не выбрано">
                </option>
                <option value="Росиянин">Росиянин</option>
                <option value="Украинец">Украинец</option>
            </select>
        </p>
        <p>
            <label>Дети *</label>
            <input type="checkbox" name="children" value="есть" />
        </p>
        <div class="infobox"><h4>Информация</h4>
            <p>Пожалуйста,  максимально детально заполните текущую форму. Это поможет проверить работу методов Post и Get. Спасибо за внимание...</p>
        </div>
    </fieldset>
    <fieldset class="row4">
        <legend>Метод отправки</legend>
        <p class="agreement">
            <select id="type">
                <option value="get">Get</option>
                <option value="post">Post</option>
            </select>
        </p>

    </fieldset>
    <div><button type="submit"class="button">Поехали &raquo;</button></div>
</form>