$(document).ready(function(){
    asyncTest('asynctest1','asynctest2', function () {
        // Pause the test
        expect(3);
        
        
    //equal(asyncTest(), 'x', 'Начальные пробелы');
    
    
    
    
        $.get(function () {
            // асинхронные проверки
            ok(true);
        });

        $.get(function () {
            // другие асинхронные проверки
            ok(true);
            ok(true);
        });

        setTimeout(function () {
            start();
        }, 2000);
    });
});