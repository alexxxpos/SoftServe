$(document).ready(function(){
 
    $('#throwing_e').bind('click', function(){
        $.get(
            "my_exception/throwing_e",
            {
                param: $("#throwing option:selected").val()
            },
            onAjaxSuccess
            );
 
        function onAjaxSuccess(data)
        {
            alert(data);
        }
    });

    $('#nested_e').bind('click', function(){
        $.get(
            "my_exception/nested_e",
            {
                param: $("#nested option:selected").val()
            },
            onAjaxSuccess
            );
 
        function onAjaxSuccess(data)
        {
            alert(data);
        }
    });
    
    
    
        $('#following_e').bind('click', function(){
        $.get(
            "my_exception/following_e",
            {
                param: $("#following option:selected").val()
            },
            onAjaxSuccess
            );
 
        function onAjaxSuccess(data)
        {
            alert(data);
        }
    });

});