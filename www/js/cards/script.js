$(document).ready(function(){
 
    // Save Cards +++++++++++++++++++++ 
    $('.card td:not(.for_image)').click(function(){
        
        var id= $(this).closest('div').attr("id"); // id of our card
        var type=$('input[name=type]:checked', '#control_panel').val(); // choose "XML" or "Json"
        var count=$('input[name=count]:checked', '#control_panel').val(); // all cards or only carrent
        
        $.get(
            base_url+"cards/save",
            {
                id: id,
                type: type,
                count: count
            },
            onAjaxSuccess
            );
 
        function onAjaxSuccess(data)
        {
            window.open(data,"JSSite","width=420,height=500,resizable=yes,scrollbars=yes,status=yes");
        // receive link to our file and show it in a new window
        }
 

    });
    // Save Cards +++++++++++++++++++++ 
 
 
 
 
    $('img[name="first"]').click(function(){
        var cur_div = $(this).closest('div'); // our div
        if(cur_div.attr("id")!=$('.card:first').attr("id")){
            var other_div = $('.card:first');
            cur_div.insertBefore(cur_div.prev()); // change them
        
            var cur_div_top=get_css_clean_value(cur_div.css('top')); //new pos of our div
            var other_div_top=get_css_clean_value(other_div.css('top')); //new pos of next div

            cur_div.css('top',other_div_top+'px');
            other_div.css('top',cur_div_top+'px');
        
            cur_div_z_index=parseInt(cur_div.css('z-index'));
            cur_div.css('z-index','1');
            other_div.css('z-index',cur_div_z_index);
        }else{
            alert("This element is almostly first!");
        }
        

    });
    $('img[name="top"]').click(function(){
        
        var cur_div = $(this).closest('div'); // our div
        if(cur_div.attr("id")!=$('.card:first').attr("id")){
            var other_div = cur_div.prev(); // next div
            cur_div.insertBefore(cur_div.prev()); // change them
        
            var cur_div_top=get_css_clean_value(cur_div.css('top'))-50; //new pos of our div
            var other_div_top=get_css_clean_value(other_div.css('top'))+50; //new pos of next div

            cur_div_z_index=parseInt(cur_div.css('z-index'))-1;
            other_div_z_index=parseInt(other_div.css('z-index'))+1;
            cur_div.css('z-index',cur_div_z_index);
            other_div.css('z-index',other_div_z_index);


            cur_div.css('top',cur_div_top+'px');
            
            other_div.css('top',other_div_top+'px');
        }else{
            alert("This element cant't be higher!");
        }
        
    });
    
    $('img[name="bottom"]').click(function(){
        var cur_div = $(this).closest('div'); // our div
        if(cur_div.attr("id")!=$('.card:last').attr("id")){
            var other_div = cur_div.next(); // next div
            cur_div.insertAfter(cur_div.next()); // change them
        
            var cur_div_top=get_css_clean_value(cur_div.css('top'))+50; //new pos of our div
            var other_div_top=get_css_clean_value(other_div.css('top'))-50; //new pos of next div
        
            cur_div_z_index=parseInt(cur_div.css('z-index'))+1;
            other_div_z_index=parseInt(other_div.css('z-index'))-1;
            cur_div.css('z-index', cur_div_z_index);
            other_div.css('z-index',other_div_z_index);
        
            cur_div.css('top',cur_div_top+'px');
            other_div.css('top',other_div_top+'px');
        }else{
            alert("This element cant't be lower!");
        }
    });
    
});

function get_css_clean_value(str){
    str=str.slice(0,str.length-2);
    return parseInt(str);
//here we get css paremetr like "250px"
//cut "px", convert this string to int and return
}