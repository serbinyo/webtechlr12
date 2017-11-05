@extends('layouts.main-layout')

@section('content')
    <div class="blog_addcontainer">
        <h3>
            Форма добавления сообщения
        </h3>
        {!! Form::open(['url'=> route('entryStore'),'class'=>'form']) !!}
        <div class="form-group">
            {!! Form::label('fio', 'ФИО:*',['class' =>'control-label']) !!}
            <div class="form-element">
                {!! Form::text('fio', null, ['class' =>'inp', 'id' => 'fio', 'title' => 'Обязательно к заполнению']) !!}
            </div>
            <div class="clr"></div>
        </div>
        <div class="form-group">
            {!! Form::label('email', 'Email:*', ['class' =>'control-label']) !!}
            <div class="form-element">
                {!! Form::email('email', null, ['class' =>'inp', 'id' => 'email', 'title' => 'Обязательно к заполнению']) !!}
            </div>
            <div class="clr"></div>
        </div>
        <div class="form-group">
            {!! Form::label('body', 'Текст сообщения:*', ['class' =>'control-label']) !!}
            <div class="form-element">
                {!! Form::textarea('body', null, [
                    'id' => 'body',
                    'class' => 'inp',
                    'rows'=> '5',
                    'title' => "Обязательно к заполнению"])
                !!}
            </div>
            <div class="clr"></div>
        </div>
        <div class="form-group">
            {!! Form::label('sub', '&nbsp;',['class' =>'control-label']) !!}
            <div class="form-element">
                {!! Form::submit('Опубликовать', ['class'=>'form-btn']) !!}
                {!! Form::reset('Очистить форму', ['class'=>'form-btn-clear', 'id'=>'opener']) !!}
            </div>
            <div class="clr">
            </div>
        </div>
        {!! Form::close() !!}
    </div>
    {!!$table!!}
@endsection