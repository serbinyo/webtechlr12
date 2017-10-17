@extends('layouts.main-layout')
@section('links')
        <script type="text/javascript" src="../../public/js/jq/jquery.js"></script>
        <script>
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
        </script>
@endsection
@section('content')

                <div class="blog_addcontainer">
                    <h3>Форма регистрации пользователя</h3>
                    <form action="{{route('registrate')}}" method="post"  class="form" id="reg_form">
                        <input type="hidden" name="action" value="reg_new" />
                        <div class="message js-form-message"></div>

                        <div class="form-group">
                            <label class="control-label">ФИО:*</label>
                            <div class="form-element">
                                <input type="text" class="inp" name="fio" id="fio" title='Обязательно к заполнению' />
                            </div>
                            <div class="clr"></div>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Email:*</label>
                            <div class="form-element">
                                <input type="text" class="inp" name="email" id="email" title='Обязательно к заполнению' />
                            </div>
                            <div class="clr"></div>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Логин:*</label>
                            <div id="login-label">
                            <div class="form-element">                            
                                <input type="text" class="inp" name="login" id="login" title='Обязательно к заполнению'/>                                
                                <div id="information"></div>
                            </div>
                            </div>
                            <div class="clr"></div>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Пароль:*</label>
                            <div class="form-element">
                                <input type="password" class="inp" name="password" id="password" title='Обязательно к заполнению' />
                            </div>
                            <div class="clr"></div>
                        </div>

                        <div class="form-group">
                            <label class="control-label">&nbsp;</label>
                            <div class="form-element">
                                <input type="submit" class="form-btn" value="Зарегистрироваться" />
                                <input type="reset" id="opener" class="form-btn-clear" value="Очистить форму" />
                            </div>
                            <div class="clr"></div>
                        </div>
                        {{csrf_field()}}
                    </form>
                    <form action="{{route('checklogin.store')}}" id="check-login-form"></form>
                </div>

@endsection