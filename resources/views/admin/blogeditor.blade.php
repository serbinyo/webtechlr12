@extends('layouts.admin-layout')
@section('links')
    <script type="text/javascript" src="../../public/js/jq/jquery.js"></script>
    <script type="text/javascript" src="../../public/js/articles.js"></script>
@endsection

@section('admincontent')
    <br/>
    <br/>

    <div class="blog_addcontainer">
        <h3>Форма добавления публикации</h3>

        {!! Form::open(['url' => route('admin_blogeditor.store'),'class' => 'form','id'=>'addform']) !!}
        <div class="message js-form-message"></div>
        <div class="form-group">
            {!! Form::label(null, 'Заголовок:*',['class' =>'control-label']) !!}
            <div class="form-element">
                {!! Form::text('title', null, ['class'=>'inp','id'=>"title", 'title'=>'Обязательно к заполнению']) !!}
            </div>
            <div class="clr"></div>
        </div>
        <div class="form-group">
            {!! Form::label(null, 'Ссылка на изображение изображение:',['class' =>'control-label']) !!}
            <div class="form-element">
                {!! Form::text('image', null, ['class'=>'inp','id'=>"image", 'title'=>'Не обязательно к заполнению']) !!}
            </div>
            <div class="clr"></div>
        </div>
        <div class="form-group">
            {!! Form::label(null, 'Основной текст:*',['class' =>'control-label']) !!}
            <div class="form-element">
                {!! Form::textarea('body', null, [
                                'id' => "body",
                                'class' => 'inp',
                                'rows'=> '5',
                                'title' => "Обязательно к заполнению"])
                !!}
            </div>
            <div class="clr"></div>
        </div>
        <div class="form-group">
            {!! Form::label(null, '&nbsp;',['class' =>'control-label']) !!}
            <div class="form-element">
                {!! Form::submit('Опубликовать', ['class'=>'form-btn', 'id' => "addform-submit"]) !!}
                {!! Form::reset('Очистить форму', ['class'=>'form-btn-clear', 'id'=>'opener']) !!}
            </div>
            <div class="clr"></div>
        </div>
        {!! Form::close() !!}

    </div>

    <div id="articles">
        @foreach($articles as $i => $article)
            <div class="blog_container" id="article{{$article->id}}">
                <div class='blog_title' id='ttl{{$article->id}}'>{{$article->title}}</div>
                <div class='blog_image'>
                    <img src='{{$article->image}}' id='img{{$article->id}}' width='250' alt='{{$article->image}}'/>
                </div>
                <div class='blog_body' id='bdy{{$article->id}}'>{!!nl2br($article->body)!!}</div>
                <div class='blog_date'>{{$article->date}}</div>
                <div class='blog_link_container'>
                    <div class="blog_update_link" id="edit{{$article->id}}" style="cursor:pointer">Редактировать</div>
                    {!! Form::open(['url'=>route('admin_blogeditor.destroy', ['id'=>$article->id])]) !!}
                    {!! Form::submit('Удалить', ['class'=>'blog_delete_link']) !!}
                    {{method_field('DELETE')}}
                    {!! Form::close() !!}
                    <div style="clear: left"></div>
                </div>
            </div><br>

            <!--вывод блока редактирования записи-->
            <div id='editablebox{{$article->id}}' class='blog_editcontainer' style='display:none'>
                <h3>Форма редактирования публикации</h3>

                {!! Form::open(['url' => route('admin_blogeditor.store'),'class' => 'editform', 'id'=>"editform$article->id"]) !!}
                {!! Form::hidden('article_id', $article->id) !!}
                <div class='message js-form-message'></div>
                <div class='form-group'>
                    {!! Form::label(null, 'Заголовок:*',['class' =>'control-label']) !!}
                    <div class='form-element'>
                        {!! Form::text('title', $article->title, ['class'=>'inp','id'=>"title$article->id", 'title'=>'Обязательно к заполнению']) !!}
                    </div>
                    <div class='clr'></div>
                </div>
                <div class='form-group'>
                    {!! Form::label(null, 'Ссылка на изображение изображение:',['class' =>'control-label']) !!}
                    <div class='form-element'>
                        {!! Form::text('image', $article->image, ['class'=>'inp','id'=>"image$article->id", 'title'=>'Не обязательно к заполнению']) !!}
                    </div>
                    <div class='clr'></div>
                </div>
                <div class='form-group'>
                    {!! Form::label(null, 'Основной текст:*',['class' =>'control-label']) !!}
                    <div class='form-element'>
                        {!! Form::textarea('body', $article->body, [
                                'id' => "body$article->id",
                                'class' => 'inp',
                                'rows'=> '5',
                                'title' => "Обязательно к заполнению"])
                         !!}
                    </div>
                    <div class='clr'></div>
                </div>
                <div class='form-group'>
                    {!! Form::label(null, '&nbsp;',['class' =>'control-label']) !!}
                    <div class='form-element'>
                        {!! Form::submit('Отредактировать', ['class'=>'edit_submit', 'id' => "submit$article->id"]) !!}
                        {!! Form::reset('Сбросить изменения', ['class'=>'form-btn-clear', 'id'=>'opener']) !!}
                    </div>
                    <div class='clr'></div>
                </div>
                {!! Form::close() !!}

            </div>
        @endforeach
    </div>
    {{$articles->links()}}
@endsection