<h1>Работа с массивами обьектов</h1>

<table class="panel">
    <tr>
        <td><input type="button" id="all_records" value="Все записи"/></td>
    </tr>
    <tr>
        <td><input type="button" id="choosen_record" value="Выбранный айди"/></td>
        <td>
            <select id="select_id">
                <?
                foreach ($id as $value):
                    echo'<option value="' . $value . '">' . $value . '</option>';
                endforeach;
                ?>
            </select>
        </td>
    </tr>
    <tr>
        <td><input type="button" id="show_header" value="Заголовок"/></td>
    </tr>
</table>
<br />
<div id="container"> 
    

        
</div>




