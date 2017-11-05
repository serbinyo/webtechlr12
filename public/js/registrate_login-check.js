jQuery(document).ready(function ($) {
    var btn = "<button id='checklogin' style='float: left; margin: 5px 0 0 10px'>Проверить</button>";
    $("#login-label").append(btn);
    $("#checklogin").click(function (e) {
        e.preventDefault();
        if ($("#login").val()===''){
            $("#information").text("Заполните поле Логин");
        }
        else{
            $.ajax({
                url: $("#check-login-form").attr('action'),
                data: ({login: $("#login").val()}),
                type: 'POST',
                headers:
                    {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                datatype: 'JSON',
                beforeSend: function () {
                    $("#information").text("Ожидание данных...");
                },
                success: function (html) {
                    if(html.error)
                    {
                        $("#information").text("Логин занят");
                    }
                    else if(html.success)
                    {
                        $("#information").text("Логин свободен");
                    }
                },
                error: function(){
                    $("#information").text("Ошибка");
                }
            });
        }
    });
});