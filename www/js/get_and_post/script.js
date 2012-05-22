$(document).ready(function(){
    $('#type').bind('click', function(){
        alert('Вы выбрали метод перессылки - '+$(this).val());
        $("#main").attr("action","get_and_post/"+$(this).val()+"_result");
        $("#main").attr("method", $(this).val());
    });
});