@extends('layouts.main-layout')
@section('links')
    <script type="text/javascript" src="../../public/js/js_validate.js"></script>
@endsection
@section('content')
    <section>
        <h1>Тест по дисциплине: &laquo;Основы программирования и алгоритмические языки&raquo;</h1>
        {!! Form::open(['url'=>route('resultStoreOrShow')]) !!}
        <div class="form-group">
            {!! Form::label('fio', 'Фамилия имя отчество:', ['class' =>'control-label']) !!}
            <div class="form-element">
                {!! Form::text('fio_php', null, ['id' => 'fio','class' => 'inp', 'autofocus']) !!}

            </div>
            <div class="clr"></div>
        </div>
        <div class="form-group">
            {!! Form::label('group', 'Группа:', ['class' =>'control-label']) !!}
            <div class="form-element">
                {!! Form::select('groupname',[
                    '1 курс' => ['ИС-11з' => 'ИС-11з',
                                 'ИС-11'=>'ИС-11',
                                 'ИС-12'=>'ИС-12'],
                    '2 курс' => ['ИС-21з' => 'ИС-21з',
                                 'ИС-21'=>'ИС-21',
                                 'ИС-22'=>'ИС-22'],
                    '3 курс' => ['ИС-31з' => 'ИС-31з',
                                 'ИС-31'=>'ИС-31',
                                 'ИС-32'=>'ИС-32'],
                    '4 курс' => ['ИС-41з' => 'ИС-41з',
                                 'ИС-41'=>'ИС-41',
                                 'ИС-42'=>'ИС-42'],
                    '5 курс' => ['ИС-51з' => 'ИС-51з',
                                 'ИС-51'=>'ИС-51',
                                 'ИС-52'=>'ИС-52'],
                ],
                null,
                [
                'size'=>'1',
                'class'=>'inp',
                'placeholder' => 'Номер Вашей группы?..'
                ]) !!}
            </div>
            <div class="clr"></div>
        </div>
        <div class="form-group">
            {!! Form::label('ans1', 'Основой надежного языка является:', ['class' =>'control-label']) !!}
            <div class="form-element">
                {!! Form::select('ans1_php',[
                'Гибкая система настройки' => 'Гибкая система настройки',
                'Система типов данных' => 'Система типов данных',
                'Совмещение нескольких парадигм программирования' => 'Совмещение нескольких парадигм программирования',
                ],
                null,
                [
                'size'=>'1',
                'class'=>'inp',
                'placeholder' => 'Выберите ответ...'
                ]) !!}
            </div>
            <div class="clr"></div>
        </div>
        <div class="form-group">
            {!! Form::label('ans2', 'Сколько байт в трех килобайтах:', ['class' =>'control-label']) !!}
            <div class="form-element">
                {!! Form::textarea('ans2_php', null, ['id' => 'ans2', 'rows' => '5', 'class' => 'inp']) !!}
            </div>
            <div class="clr"></div>
        </div>
        <div class="form-group">
            {!! Form::label('ans3', 'Создатель языка программирования Pascal:', ['class' =>'control-label']) !!}
            <div class="form-element">
                <label>{!! Form::radio('ans3_php','Алан Тьюринг') !!}Алан Тьюринг</label><br/><br/>
                <label>{!! Form::radio('ans3_php','Никлаус Вирт') !!}Никлаус Вирт</label><br/><br/>
                <label>{!! Form::radio('ans3_php','Блез Паскаль') !!}Блез Паскаль</label><br/><br/>
            </div>
            <div class="clr"></div>
        </div>
        <div class="form-group">
            {!! Form::label('sub', '&nbsp;',['class' =>'control-label']) !!}
            <div class="form-element">
                {!! Form::submit('Отправить') !!}
                {!! Form::reset('Очистить форму') !!}
            </div>
            <div class="clr"></div>
        </div>
        {!! Form::close() !!}
        <br><br><br><br>

        @if($user)

            <h1>Проверить результат:</h1>
            <form action="{{route('resultStoreOrShow')}}" method="post">
                <div class="form-group">
                    <label class="control-label">Фамилия имя отчество:</label>
                    <div class="form-element">
                        <input type="text" name="fior" id="fior" value="" class="inp" autofocus/>
                    </div>
                    <div class="clr"></div>
                </div>
                <input type="submit" value="Отправить"/>
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
                    <div class='blog_date'>Дата прохождения теста: {{$testresult->date}}</div>
                </div><br>';

            @endforeach
        @endif
    </section>
@endsection