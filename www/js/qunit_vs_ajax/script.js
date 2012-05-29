//window.sessionStorage.setItem('result','Ajax не сработал!');
window.sessionStorage.result="Ajax не сработал!";

function asyncTest(a) {
        
    $.ajax({
        type: "POST",
        url: "/qunit_vs_ajax/ajaxtest",
        data:"a="+a,
        async: false,
        success:function(result){
            alert(result);
            window.sessionStorage.result=result;
        }
    });

 
    function onAjaxSuccess(data)
    {
        window.sessionStorage.result=data;
    }
    

    return window.sessionStorage.result;
}
