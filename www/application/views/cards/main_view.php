<h1>Choose some card and save it</h1>
<div id="main_box">
    <?

    foreach ($all_cards AS $card) :
        $i=$card->order;
        $top = ($i*50)+50;
        echo'
        <div class="card" id="' . $card->id . '" style="top:' . $top . 'px; z-index:'.$card->order.';">
             <table>
                <tr>
                    <td class="order" rowspan="20">' . $card->order . '</td>
                    <td class="card_td">Name:</td>
                    <td class="card_td">' . $card->name . '</td> 
                    <td class="for_image" rowspan="7"><img name="first" class="control_images" title="make first" src="../images/cards/first.png" /></td>
                    <td class="for_image" rowspan="7"><img name="top" class="control_images" title="move up" src="../images/cards/top.png" /></td>
                    <td class="for_image" rowspan="7"><img name="bottom" class="control_images" title="move lower" src="../images/cards/bottom.png" /></td>
                </tr>
                <tr>
                    <td class="card_td">Company:</td>
                    <td class="card_td">' . $card->company . '</td>
                    
                </tr>
                <tr>
                    <td class="card_td">Job:</td>
                    <td class="card_td">' . $card->job . '</td>
                    
                </tr>             
                <tr>
                    <td class="card_td">Address:</td>
                    <td class="card_td">' . $card->address . '</td>
                    
                </tr>   
                <tr>
                    <td class="card_td">Phone:</td>
                    <td class="card_td">' . $card->phone . '</td>
                </tr>
                <tr>
                    <td class="card_td">Email:</td>
                    <td class="card_td">' . $card->email . '</td>
                </tr>
 
              </table>
        </div>';
    endforeach;
    ?>
</div>

<div id="control_panel">
    <table cellspacing="0" cellpadding="17">
        <tr><td colspan="2" align="right">Choose your format</td></tr>
        <tr>
            <td>
                <p><input type="radio" name="type" value="xml" id="xml" checked /><label for="xml">XML</p></label>
            </td>
            <td>
                <p><input type="radio" name="type" value="json" id="json" /><label for="json">JSON</p></label>
            </td>
        </tr>

        <tr><td colspan="2" align="center">Save</td></tr>

        <tr>
            <td>
                <p><input type="radio" name="count" value="choosen" id="choosen" checked /><label for="choosen">Choosen</p></label>
            </td>
            <td>
                <p><input type="radio" name="count" value="all" id="all" /><label for="all">All</p></label>
            </td>
        </tr>
    </table>
</div>

