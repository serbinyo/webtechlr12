@extends('layouts.main-layout')
@section('links')
    <script type="text/javascript" src="../../public/js/jq/jquery.js"></script>
    <script type="text/javascript" src="../../public/js/registrate_login-check.js"></script>
@endsection
@section('content')
    <div class="blog_addcontainer">
        <h3>Форма регистрации пользователя</h3>
        {!! Form::open(['url' => route('registration.store'), 'class' => 'form', 'id' => 'reg_form']) !!}
        <div class="message js-form-message"></div>

        <div class="form-group">
            {!! Form::label('fio', 'ФИО:*',['class' =>'control-label']) !!}
            <div class="form-element">
                {!! Form::text('fio', null, ['class' =>'inp', 'id' => 'fio', 'title' => 'Обязательно к заполнению']) !!}
            </div>
            <div class="clr"></div>
        </div>

        <div class="form-group">
            {!! Form::label('email', 'Email:*',['class' =>'control-label']) !!}
            <div class="form-element">
                {!! Form::email('email', null, ['class' =>'inp', 'id' => 'email', 'title' => 'Обязательно к заполнению']) !!}
            </div>
            <div class="clr"></div>
        </div>

        <div class="form-group">
            {!! Form::label('login', 'Логин:*',['class' =>'control-label']) !!}
            <div id="login-label">
                <div class="form-element">
                    {!! Form::text('login', null, ['class' =>'inp', 'id' => 'login', 'title' => 'Обязательно к заполнению']) !!}
                    <div id="information"></div>
                </div>
            </div>
            <div class="clr"></div>
        </div>

        <div class="form-group">
            {!! Form::label('password', 'Пароль:*',['class' =>'control-label']) !!}
            <div class="form-element">
                {!! Form::password('password', ['class' =>'inp', 'id' => 'password', 'title' => 'Обязательно к заполнению']) !!}
            </div>
            <div class="clr"></div>
        </div>

        <div class="form-group">
            {!! Form::label('sub', '&nbsp;',['class' =>'control-label']) !!}
            <div class="form-element">
                {!! Form::submit('Зарегистрироваться', ['class'=>'form-btn']) !!}
                {!! Form::reset('Очистить форму', ['class'=>'form-btn-clear', 'id'=>'opener']) !!}
            </div>
            <div class="clr"></div>
        </div>
        {!! Form::close() !!}
        <form action="{{route('checklogin.store')}}" id="check-login-form"></form>
    </div>
@endsection