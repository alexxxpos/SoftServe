$(document).ready(function() {
   
    $('#all_records').bind('click', function(){
        $("#container").load(
            "/arr_and_obj/all_records"
            );
    });


    $('#choosen_record').bind('click', function(){
        $("#container").load(
            "/arr_and_obj/choosen_record",
            {
                id: $('#select_id option:selected').val()
            }
            );

                
    });
    
    $('#show_header').bind('click', function(){
        $("#container").load(
            "/arr_and_obj/show_header"
            );
 
    });
    
    
    
    

});