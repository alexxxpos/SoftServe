<div id="choose">
    <h3>Установите параметры сортировки</h3>
<label for="count">Размер массива</label> <input type="text" id="count" value="9" />
<br />

<label for="bubble">По возрастанию</label><input type="radio" name="sort" id="bubble" value="bubble" checked />
<br />
<label for="stone">По убыванию</label><input type="radio" name="sort" value="stone" id="stone" />
<br /><br />
    <button id="start_sort">Поехали</button>
    
</div>

<div id="stat">
    <h2>Статистика по сортировкам </h2> 
    <table class="bordered">
        <thead>
            <tr>
                <th>№</th>        
                <th>Вид сортировки</th>
                <th>Время выполнения,мкс</th>
            </tr>
        </thead>
        <tr>
            <td>1</td>        
            <td>Обмен</td>
            <td id="obmen"></td>
        </tr>        
        <tr>
            <td>2</td>         
            <td>Выбор</td>
            <td id="vibor"></td>
        </tr>
        <tr>
            <td>3</td>         
            <td>Вставка</td>
            <td id="vstavka"></td>
        </tr>    
        <tr>
            <td>4</td> 
            <td>Шейкерная</td>
            <td id="shaker"></td>
        </tr>
        <tr>
            <td>5</td> 
            <td>Быстрая</td>
            <td id="quick_sort"></td>
        </tr>
        <tr>
            <td>6</td> 
            <td>Гномия</td>
            <td id="gnomeSort"></td>
        </tr>    
        <tr>
            <td>7</td> 
            <td>Подсчета</td>
            <td id="counting_sort"></td>
        </tr>


    </table>
<h2><a id="one_more"href="#">Новая сортировка</a></h2>
</div>