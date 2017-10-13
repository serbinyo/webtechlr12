@extends('layouts.main-layout')
@section('links')
				<script>
					window.onload = function () {
                InvalidInputHelper(document.getElementById('fio'), {
                    'change': function (val) {
                        return !val.match(/^[A-Za-z0-9а-яА-Я_]+\s[A-Za-z0-9а-яА-Я_]+\s[A-Za-z0-9а-яА-Я_]+$/gi)
                                ? "Ф.И.О. должно состоять из 3-х слов, разделенных пробелом" : "";
                    },
                });
                InvalidInputHelper(document.getElementById('ans2'), {
                    'change': function (val) {
                        return !val.match(/^\-?\d+$/g)
                                ? "Введите целочисленное значение" : "";
                    }
                });
                
				};
				</script>
@endsection
@section('content')
                <section>

                    <h1>Тест по дисциплине: &laquo;Основы программирования и алгоритмические языки&raquo;</h1>
                    <form action="{{route('resultStoreOrShow')}}" method="post">
                        <div class="form-group">
                            <label class="control-label">Фамилия имя отчество:</label>
                            <div class="form-element">
                                <input type="text" name="fio_php" id="fio" value="" class="inp" autofocus />
                            </div>
                            <div class="clr"></div>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Группа:</label>
                            <div class="form-element">
                                <select name="groupname" size="1" class="inp">
                                    <option value="">-</option>
                                    <optgroup label="1 курс">
                                        <option value="ИС-11з">ИС-11з</option>
                                        <option value="ИС-11">ИС-11</option>
                                        <option value="ИС-12">ИС-12</option>
                                    </optgroup>
                                    <optgroup label="2 курс">
                                        <option value="ИС-21з">ИС-21з</option>
                                        <option value="ИС-21">ИС-21</option>
                                        <option value="ИС-22">ИС-22</option>
                                    </optgroup>
                                    <optgroup label="3 курс">
                                        <option value="ИС-31з">ИС-31з</option>
                                        <option value="ИС-31">ИС-31</option>
                                        <option value="ИС-32">ИС-32</option>
                                    </optgroup>
                                    <optgroup label="4 курс">
                                        <option value="ИС-41з">ИС-41з</option>
                                        <option value="ИС-41">ИС-41</option>
                                        <option value="ИС-42">ИС-42</option>
                                    </optgroup>
                                    <optgroup label="5 курс">
                                        <option value="ИС-51з">ИС-51з</option>
                                        <option value="ИС-51">ИС-51</option>
                                        <option value="ИС-51">ИС-52</option>
                                    </optgroup>								
                                </select>
                            </div>
                            <div class="clr"></div>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Основой надежного языка является:</label>
                            <div class="form-element">
                                <select name="ans1_php" size="1" class="inp">
                                    <option value="0">-</option>
                                    <option value="Гибкая система настройки">Гибкая система настройки</option>
                                    <option value="Кроссплатформенность">Кроссплатформенность</option>
                                    <option value="Система типов данных">Система типов данных</option>
                                    <option value="Совмещение нескольких парадигм программирования">Совмещение нескольких парадигм программирования</option>
                                </select>
                            </div>
                            <div class="clr"></div>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Сколько байт в трех килобайтах:</label>
                            <div class="form-element">
                                <textarea name="ans2_php" id="ans2" rows="5" class="inp"></textarea>
                            </div>
                            <div class="clr"></div>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Создатель языка программирования Pascal:</label>
                            <div class="form-element">
                                <label><input type="radio" name="ans3_php" value="Алан Тьюринг" />Алан Тьюринг</label><br /><br />
                                <label><input type="radio" name="ans3_php" value="Никлаус Вирт" />Никлаус Вирт</label><br /><br />
                                <label><input type="radio" name="ans3_php" value="Блез Паскаль" />Блез Паскаль</label><br /><br />
                            </div>
                            <div class="clr"></div>
                        </div>
                        <div class="form-group">
                            <label class="control-label">&nbsp;</label>
                            <div class="form-element">
                                <input type="submit" value="Отправить" />
                                <input type="reset" value="Очистить форму" />
                            </div>
                            <div class="clr"></div>
                        </div>
                        
                        <!--Защита от CSRF атак-->
						{{ csrf_field() }}
						<!--Функция добавляет следующий код на сайт
						<input type="hidden" name="_token" value="kjsgliauehgKLNGFD"/>
						в поле value сохраняется случайная строка и она же сохраняется в сессии.
						Если при отправке строки не равны генерируется исключение
						-->
                        
                    </form><br><br><br><br>
                    
                    <h1>Проверить результат:</h1> 
                    <form action="{{route('resultStoreOrShow')}}" method="post">
                        <div class="form-group">
                            <label class="control-label">Фамилия имя отчество:</label>
                            <div class="form-element">
                                <input type="text" name="fior" id="fior" value="" class="inp" autofocus />
                            </div>
                            <div class="clr"></div>
                        </div>
                        <input type="submit" value="Отправить" />
                        <!--Защита от CSRF атак-->
						{{ csrf_field() }}						
                    </form>
                    
                    @foreach ($testresults as $testresult)
                    
				         <div class="blog_container">
				         <div class='blog_title'><h3>{{$testresult->fio}}</h3></div>
				         <div class='blog_image'>{{$testresult->groupname}}</div>
				         <div class='blog_body'>Вопрос 1: {{$testresult->result1}}</div>
				         <div class='blog_body'>Вопрос 2: {{$testresult->result2}}</div>
				         <div class='blog_body'>Вопрос 3: {{$testresult->result3}}</div>
				         <div class='blog_title'><h3>Оценка: {{$testresult->mark}}</h3></div>
				         <div class='blog_date'>Дата ппрохождения теста: {{$testresult->date}}</div>
				         </div><br>';
                    
                    @endforeach                   
                </section>
@endsection