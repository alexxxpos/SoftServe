<table id="report">
    <tr>
        <th>Задание</th>
        <th>Автор</th>
        <th>Дата</th>
        <th>Статус</th>
        <th>Ссылка</th>
        <th>Детально</th>
    </tr>
    <!--   Task 1    -->
    <tr>
        <td>Визитки</td>
        <td>Дима</td>
        <td>Март</td>
        <td>В разработке</td>
        <td><a href="/cards">Переход</a></td>
        <td><div class="arrow"></div></td>
    </tr>
    <tr>
        <td colspan="6">
            <img class="made_in_ukraine" src="../images/made_in_ukraine.png" alt="made_in_ukraine" />
            <h4>Дополнительная информация</h4>
            <br />
            <b>Архитектура: клиент-сервер</b>

            <ul>
                <li>Функционал сервера:</li>
                На сервере в базе данных сериализованы объекты класса Визитка. 
                Сервер «умеет» по запросу клиента десериализовыввать объекты из БД, 
                формировать на выбор клиента XML или JSon документ, 
                схему к нему и отправлять его клиенту.
                <li>Функционал клиента:</li>
                Клиент умеет инициировать запрос к серверу, в котором указывается формат ответа 
                (XML или JSon) и, получив ответ, проверяет его на корректность и соответствие схеме. 
                Если формат полученного документа не содержит ошибок, 
                клиент формирует веб-страницу по шаблону, показанному на рисунке. 
                Визитки поддерживают следующий функционал: при обработке события OnClick выбранная визитка 
                перемещается на первое место, все остальные визитки, 
                стоявшие впереди не нарушая порядок следования, перемещаются в конец очереди.
            </ul>   
        </td>
    </tr>

    <!--   Task 2    -->

    <tr>
        <td>Стадион</td>
        <td>Андрей</td>
        <td>Март</td>
        <td>Готово</td>
        <td><a href="/stadium">Переход</a></td>
        <td><div class="arrow"></div></td>
    </tr>
    <tr>
        <td colspan="6">
            <img class="made_in_ukraine" src="../images/made_in_ukraine.png" alt="made_in_ukraine" />
            <h4>Дополнительная информация</h4>

            <ul>
                <li>Background-color состоит из "перелива" 3-х цветов, где средний цвет занимает не более 10%;</li>
                <li>В середине экрана у нас блок с закругленными краями и тенями (внешние и внутренние);</li>
                <li>Сам блок разбит на 3 сектора и это показано 2 вертикальными линиями;</li>
                <li>Внутри каждого сектора его название ("А", "Б", "C") c тенями;</li>
                <li>+ Сделать какую-либо анимацию.</li>
  
            </ul>   
        </td>
    </tr>

    <!--   Task 3    -->
    
        <tr>
        <td>Выделить подмассив в массиве</td>
        <td>Андрей</td>
        <td>Март</td>
        <td>Готово</td>
        <td><a href="/array2array">Переход</a></td>
        <td><div class="arrow"></div></td>
    </tr>
    <tr>
        <td colspan="6">
            <img class="made_in_ukraine" src="../images/made_in_ukraine.png" alt="made_in_ukraine" />
            <h4>Дополнительная информация</h4>

            <ul>
                <li>Сформировать массив на 1000 элементов, где элементы - вещественные числа от 0 до 1;</li>
                <li>Создать второй массив в который войдут все числа из 1-го массива в интервале от 0,2 до 0,5;</li>
                <li>Вывести оба массива.</li>

  
            </ul>   
        </td>
    </tr>
    
    
    <!--   Task 4    -->
    
        <tr>
        <td>Реализация Drag&Drop</td>
        <td>Андрей</td>
        <td>Апрель</td>
        <td>Готово</td>
        <td><a href="/drag_and_drop">Переход</a></td>
        <td><div class="arrow"></div></td>
    </tr>
    <tr>
        <td colspan="6">
            <img class="made_in_ukraine" src="../images/made_in_ukraine.png" alt="made_in_ukraine" />
            <h4>Дополнительная информация</h4>

            <ul>
                <li>У нас на странице Div;</li>
                <li>Кликаем на нем и двигаем курсор, что вызывает смещение положения Div'a по курсору.</li>
            </ul>   
        </td>
    </tr>
    
        <!--   Task 5    -->
    
        <tr>
        <td>Реализация Sort of types</td>
        <td>Дима</td>
        <td>Апрель</td>
        <td>Готово</td>
        <td><a href="/sort_types">Переход</a></td>
        <td><div class="arrow"></div></td>
    </tr>
    <tr>
        <td colspan="6">
            <img class="made_in_ukraine" src="../images/made_in_ukraine.png" alt="made_in_ukraine" />
            <h4>Дополнительная информация</h4>

            <ul>
                <li>Реализовать следующие виды сортировок:</li>
                <li>Обмена, выбора, вставки, шейкерная, бинарная, гномия, быстрая, подсчета;</li>
                <li>Замерить время выполнения каждой сортировки.</li>
                <br />
                <li>* Реализовать сортировки для массива обьектов</li>
            </ul>   
        </td>
    </tr>
    
    <!--   Task 6    -->
      <tr>
        <td>Работа с формами (Get/Post)</td>
        <td>Дима</td>
        <td>Май</td>
        <td>Готово</td>
        <td><a href="/get_and_post">Переход</a></td>
        <td><div class="arrow"></div></td>
    </tr>
    <tr>
        <td colspan="6">
            <img class="made_in_ukraine" src="../images/made_in_ukraine.png" alt="made_in_ukraine" />
            <h4>Дополнительная информация</h4>

            <ul>
                <li>Cделать страницу, на которой будет находиться форма;</li>
                <li>Форма содержит все мозможные поля Input;</li>
                <br />
                <li>При помощи GET и POST методов необходимо передать данные на сторону сервера для отображения в виде «элемент — значение»;</li>
                

            </ul>   
        </td>
    </tr>
    
    
    <!--   Task 7    -->
      <tr>
        <td>Массив обьектов</td>
        <td>Дима</td>
        <td>Май</td>
        <td>Готово</td>
        <td><a href="/arr_and_obj">Переход</a></td>
        <td><div class="arrow"></div></td>
    </tr>
    <tr>
        <td colspan="6">
            <img class="made_in_ukraine" src="../images/made_in_ukraine.png" alt="made_in_ukraine" />
            <h4>Дополнительная информация</h4>

            <ul>
                <li>Представить таблицу из БД в виде массива объектов;</li>
                <li>Объекты должны предоставлять методы для отображения в виде таблицы (getRow() и getHead());</li>
                <li>Методы должны возвращать данные в обрамлении из HTML-тегов;</li>
                <br />
                <li>С помощью метода Show() отобразить массив объектов на экран.</li>

            </ul>   
        </td>
    </tr>
    
    
        <!--   Task 8    -->
      <tr>
        <td>QUnit vs Ajax</td>
        <td>Дима</td>
        <td>Май</td>
        <td>Готово</td>
        <td><a href="/qunit_vs_ajax">Переход</a></td>
        <td><div class="arrow"></div></td>
    </tr>
    <tr>
        <td colspan="6">
            <img class="made_in_ukraine" src="../images/made_in_ukraine.png" alt="made_in_ukraine" />
            <h4>Дополнительная информация</h4>

            <ul>
                <li>Разобраться с QUnit;</li>
                <li>Подключить QUnit к проэкту;</li>
                <li>Протестировать работу Ajax запроса;</li>
                <br />
                <li>Показать полученные результаты.</li>

            </ul>   
        </td>
    </tr>
    
    
            <!--   Task 9    -->
      <tr>
        <td>PHP: Exceptions</td>
        <td>Дима</td>
        <td>Май</td>
        <td>Готово</td>
        <td><a href="/my_exception">Переход</a></td>
        <td><div class="arrow"></div></td>
    </tr>
    <tr>
        <td colspan="6">
            <img class="made_in_ukraine" src="../images/made_in_ukraine.png" alt="made_in_ukraine" />
            <h4>Дополнительная информация</h4>
            
            <ul>
                <li>Реализовать сквозную генерацию.<br />Сквозная генерация. Это означает, что возникновение исключения где либо в коде будет приводит к последовательному выходу из управляющих конструкций и функций до первого блока catch либо до функции main (с выдачей соответствующей ошибки в поток) основного скрипта</li>
                <li>Возможность переопределения основного класса Exception через наследование;</li>
                <li>Возможность обработки нескольких типов исключений одновременно</li>
                <li>Проброс исключений</li>

            </ul>   
        </td>
    </tr>
    
                <!--   Task 9    -->
      <tr>
        <td>Ext JS</td>
        <td>Стас</td>
        <td>Май</td>
        <td>Готово</td>
        <td><a href="/ext_js">Переход</a></td>
        <td><div class="arrow"></div></td>
    </tr>
    <tr>
        <td colspan="6">
            <img class="made_in_ukraine" src="../images/made_in_ukraine.png" alt="made_in_ukraine" />
            <h4>Дополнительная информация</h4>
            
            <ul>
                <li>Разобраться с фреймворком Ext JS</li>
                <li>Написать простое приложение (типа "Hello, world!")</li>
            </ul>   
        </td>
    </tr>
    
</table>