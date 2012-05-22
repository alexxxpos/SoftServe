$(document).ready(function(){

    $('#start_sort').click(function(){
        $('#choose').hide("slow"); // hide first div

        $.get(
            "/sort_types/sorting",
            {
                size: $('#count').val(),
                order: $('input[name=sort]:checked').val()
            },
            onAjaxSuccess
            );
 
        function onAjaxSuccess(result)
        {
            result=jQuery.parseJSON(result);
            $('#obmen').text(result.obmen);
            $('#vibor').text(result.vibor);
            $('#vstavka').text(result.vstavka);
            $('#shaker').text(result.shaker);
            $('#quick_sort').text(result.quick_sort);
            $('#gnomeSort').text(result.gnomeSort);
            $('#counting_sort').text(result.counting_sort);

        }
        
        
        
        
        $('#stat').show("slow"); // show result div
    });
    
    $('#one_more').click(function(){
        $('#choose').show("slow");
        $('#stat').hide("slow");
    });
});