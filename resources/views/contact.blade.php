@extends('layouts.main-layout')

@section('links')

    <link rel="stylesheet" type="text/css" href="../../public/js/jquery-ui-1.9.2/themes/base/jquery.ui.all.css"/>
    <script src="../../public/js/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="../../public/js/bower_components/jquery-validation/dist/jquery.validate.js"></script>
    <script src="../../public/js/custom.js"></script>
    <script src="../../public/js/jquery-ui-1.9.2/ui/jquery.ui.core.js"></script>
    <script src="../../public/js/jquery-ui-1.9.2/ui/jquery.ui.widget.js"></script>
    <script src="../../public/js/jquery-ui-1.9.2/ui/jquery.ui.button.js"></script>
    <script src="../../public/js/jquery-ui-1.9.2/ui/jquery.ui.mouse.js"></script>
    <script src="../../public/js/jquery-ui-1.9.2/ui/jquery.ui.draggable.js"></script>
    <script src="../../public/js/jquery-ui-1.9.2/ui/jquery.ui.position.js"></script>
    <script src="../../public/js/jquery-ui-1.9.2/ui/jquery.ui.resizable.js"></script>
    <script src="../../public/js/jquery-ui-1.9.2/ui/jquery.ui.datepicker.js"></script>
    <script src="../../public/js/jquery-ui-1.9.2/ui/i18n/jquery.ui.datepicker-ru.js"></script>
    <script src="../../public/js/jquery-ui-1.9.2/ui/jquery.ui.tooltip.js"></script>
    <script src="../../public/js/jquery-ui-1.9.2/ui/jquery.ui.dialog.js"></script>
    <script src="../../public/js/jquery-ui-1.9.2/ui/jquery.ui.effect.js"></script>
    <script src="../../public/js/jquery-ui-1.9.2/ui/jquery.ui.effect-blind.js"></script>
    <script src="../../public/js/jquery-ui-1.9.2/ui/jquery.ui.effect-explode.js"></script>

@endsection

@section('content')
    <section>

        <h3>Форма обратной связи</h3>

        {!! Form::open(['url'=>route('contactSend'),'class'=>'inp','id'=>'js-register-form']) !!}
        <div class="form-group">
            {!! Form::label(null, 'Фамилия имя отчество:', ['class'=>'control-label']) !!}
            <div class="form-element">
                {!! Form::text('fio', null, ['class'=>'inp', 'title'=>'Введите Фамилию Имя Отчество используя кириллицу']) !!}
            </div>
            <div class="clr"></div>
        </div>
        <div class="form-group">
            {!! Form::label(null, 'Пол:', ['class'=>'control-label']) !!}
            <div class="form-element">
                <label>{!! Form::radio('gender', 'Мужчина', true, ['title'=>'Вы мужчина?']) !!} М</label> &nbsp;
                <label>{!! Form::radio('gender', 'Женщина', null, ['title'=>'Вы женщина?']) !!} Ж</label>
            </div>
            <div class="clr"></div>
        </div>
        <div class="form-group">
            {!! Form::label(null, 'Возраст:', ['class'=>'control-label']) !!}
            <div class="form-element">
                {!! Form::select('form_age',[
                        '3' => '3',
                        '4' => '4',
                        '5' => '5',
                        '6' => '6',
                        '7' => '7',
                        '8' => '8',
                        '9' => '9',
                        '10' => '10',
                        '11' => '11',
                        '12' => '12',
                        '13' => '13',
                        '14' => '14',
                        '15' => '15',
                        '16' => '16',
                        '17' => '17',
                        '18' => '18',
                        '19' => '19',
                        '20' => '20',
                        '21' => '21',
                        '22' => '22',
                        '23' => '23',
                        '24' => '24',
                        '25' => '25',
                        '26' => '26',
                        '27' => '27',
                        '28' => '28',
                        '29' => '29',
                        '30' => '30',
                        '31' => '31',
                        '33' => '32',
                        '34' => '35',
                        '36' => '36',
                        '37' => '37',
                        '38' => '38',
                        '39' => '39',
                        '40' => '40',
                        '41' => '41',
                        '42' => '42',
                        '43' => '43',
                        '44' => '44',
                        '45' => '45',
                        '46' => '46',
                        '47' => '47',
                        '48' => '48',
                        '49' => '49',
                        '50' => '50',
                        '51' => '51',
                        '52' => '52',
                        '53' => '53',
                        '54' => '54',
                        '55' => '55',
                        '56' => '56',
                        '57' => '57',
                        '58' => '58',
                        '59' => '59',
                        '60' => '60',
                        '61' => '61',
                        '62' => '62',
                        '63' => '63',
                        '64' => '64',
                        '65' => '65',
                        '66' => '66',
                        '67' => '67',
                        '68' => '68',
                        '69' => '69',
                        '70' => '70',
                        '71' => '71',
                        '72' => '72',
                        '73' => '73',
                        '74' => '74',
                        '75' => '75',
                        '76' => '76',
                        '77' => '77',
                        '78' => '78',
                        '79' => '79',
                        '80' => '80',
                        '81' => '81',
                        '82' => '82',
                        '83' => '83',
                        '84' => '84',
                        '85' => '85',
                        '86' => '86',
                        '87' => '87',
                        '88' => '88',
                        '89' => '89',
                        '90' => '90',
                        '91' => '91',
                        '92' => '92',
                        '93' => '93',
                        '94' => '94',
                        '95' => '95',
                    ],
                    null,
                    [
                    'size'=>'1',
                    'class'=>'inp',
                    'placeholder' => 'Выберите возраст...',
                    'title' => 'Выбирите возраст из выпадающего меню'
                    ])
                !!}
            </div>
            <div class="clr"></div>
        </div>
        <div class="form-group">
            {!! Form::label(null, 'Email:', ['class'=>'control-label']) !!}
            <div class="form-element">
                {!! Form::text('form_email', null, [
                    'class' => 'inp',
                    'title' => 'Введите E-mail в формате example@mail.com'
                ]) !!}
            </div>
            <div class="clr"></div>
        </div>
        <div class="form-group">
            {!! Form::label(null, 'Телефон:', ['class'=>'control-label']) !!}
            <div class="form-element">
                {!! Form::text('form_tel', null, [
                    'class' => 'inp',
                    'title' => 'Введите телефон используя +3|+7 и цифры'
                ]) !!}
            </div>
            <div class="clr"></div>
        </div>
        <div class="form-group">
            {!! Form::label(null, 'Дата рождения:', ['class'=>'control-label']) !!}
            <div class="form-element">
                {!! Form::text('birthday', null, [
                    'id' => 'datepicker',
                    'class' => 'inp',
                    'title' => 'Кликните на поле и выбирите Вашу дату рождения на календаре'
                ]) !!}
            </div>
            <div class="clr"></div>
        </div>
        <div class="form-group">
            {!! Form::label(null, 'Сообщение:', ['class'=>'control-label']) !!}
            <div class="form-element">
                {!! Form::textarea('message', null, [
                    'class' => 'inp',
                    'rows' => '5',
                    'title' => 'Введите свое сообщение'
                ]) !!}
            </div>
            <div class="clr"></div>
        </div>
        <div class="form-group">
            {!! Form::label(null, '&nbsp;', ['class'=>'control-label']) !!}
            <div class="form-element">
                {!! Form::submit('Отправить', ['class'=>'form-btn']) !!}
                {!! Form::reset('Очистить форму', ['class'=>'form-btn-clear', 'id'=>'opener']) !!}
            </div>
            <div class="clr"></div>
        </div>
        {!! Form::close() !!}

        <div id="dialog" title="Требуется подтверждение">
            <p>Очистить форму, Вы уверены?</p>
        </div>
    </section>
@endsection