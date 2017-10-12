
<?php
/*
session_start();
Functions::add_guest_statistic();

        if (isset($_POST['action']) && $_POST['action'] == 'reg_new') {
            $userValidator = new UserValidation();
            $userValidator->userValidate();
            if ($userValidator->ValidateForm()) {
                if (checkUniqueLogin()) {
                    addNewUser();
                    ?>
                    <script type="text/javascript">
                        alert('Вы зарегистрировались');
                        window.opener.location.reload();
                        window.close();
                    </script>
                    <?php
                } else {
                    ?>
                    <script type="text/javascript">
                        alert('Логин занят');
                        document.getElementById("reg_form").reset();
                    </script>
                    <?php
                }
            } else {
                $errors = true;
            }
        }

        function checkUniqueLogin() {
            $login = htmlspecialchars(trim($_POST['login']));
            $query = "SELECT count(*) FROM users WHERE login = '$login'";
            BaseActiveRecord::check_connection();
            $total_rows = BaseActiveRecord::$pdo->query($query)->fetchColumn();
            if ($total_rows === '0') {
                return true;
            } else {
                return false;
            }
        }

        function addNewUser() {
            $fio = htmlspecialchars(trim($_POST['fio']));
            $email = htmlspecialchars(trim($_POST['email']));
            $login = htmlspecialchars(trim($_POST['login']));
            $password = htmlspecialchars(trim($_POST['password']));

            $newUser = new UsersModel();
            $newUser->fio = $fio;
            $newUser->email = $email;
            $newUser->login = $login;
            $newUser->password = $password;
            $newUser->save();
        }
*/
?>

@extends('layouts.main-layout')
@section('links')
        <script type="text/javascript" src="../../public/js/jquery-1.4.3.min.js"></script>
        <script>
                        $(document).ready(function () {
                            $("#login").blur(function () {                         
                                $.ajax({
                                    url: "logincheck",
                                    type: "POST",
                                    data: ({name: $("#login").val()}),
                                    dataType: "html",
                                    beforeSend: function () {
                                        $("#information").text("Ожидание данных...");
                                    },
                                    success: function (data) {
                                        if (data === 'Empty') {
                                            $("#information").empty();
                                        } else if (data === 'Fail') {
                                            alert("Имя занято");
                                        } else {
                                            $("#information").text("Логин свободен");
                                        }
                                    }
                                });
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
                            <div class="form-element">
                                <input type="text" class="inp" name="login" id="login" title='Обязательно к заполнению' />
                                <div id="information"></div>
                            </div>
                            <div class="clr"></div>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Пароль:*</label>
                            <div class="form-element">
                                <input type="text" class="inp" name="password" id="password" title='Обязательно к заполнению' />
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
                </div>

@endsection