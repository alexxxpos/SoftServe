
    
    function asyncTest(a,b) {
        $.get(
            "/qunit_vs_ajax/ajaxtest",
            {
                param1: a,
                param2: b
            },
            onAjaxSuccess
            );
 
        function onAjaxSuccess(data)
        {
            // Здесь мы получаем данные, отправленные сервером и выводим их на экран.
            //alert(data);
            return data;
        }
  
    }
