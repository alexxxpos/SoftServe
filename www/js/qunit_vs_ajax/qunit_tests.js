$(document).ready(function(){
    test("asyncTest()", function () {
        // Pause the test
        //expect(3);

        equal(asyncTest('asynctest1'), 'Получены параметры с сервера: param1 = asynctest1', 'Все верно');
        
    });
});