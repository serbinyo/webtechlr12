@extends('layouts.admin-layout')
@section('admincontent')
                <h2> Форма для загрузки файлов </h2>

                <form action="guestbookloadfile" class="form-fileload" method="post" enctype="multipart/form-data">
                    <input type="file" name="messages"/> <br>
                    <input type="submit" value="3arpyзить" name="loadfile"/>
                </form>

                <?php
//                if (isset($_POST['loadfile'])) {
//                    $source = $_FILES["messages"]["tmp_name"];
//                    $dest = WWW . '/assets/files/' . $_FILES["messages"]["name"];
//                    if (is_file($source)) {
//                        if ($_FILES["messages"]["name"] === 'messages.inc') {
//                            if (copy($source, $dest)) {
//                                echo('<h3 style="text-align: center; color: blue;">Файл успешно загружен</h3>');
//                            } else {
//                                echo('<h3 style="text-align: center; color: red;">Ошибка загрузки файла</h3>');
//                            }
//                        } else {
//                            echo '<h3 style="text-align: center; color: red;">Ошибка. Требуется messages.inc</h3>';
//                        }
//                    } else {
//                        echo('<h3 style="text-align: center; color: red;">Ошибка чтения файла</h3>');
//                    }
//                }
                ?>
@endsection