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
                    <form id="addform" action="{{ route('article.store')}}" method="post"  class="form">

                        <div class="message js-form-message"></div>

                        <div class="form-group">
                            <label class="control-label">Заголовок:*</label>
                            <div class="form-element">
                                <input type="text" class="inp" name="title" id="title" title='Обязательно к заполнению' />
                            </div>
                            <div class="clr"></div>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Ссылка на изображение изображение:</label>
                            <div class="form-element">
                                <input type="text" name="image" class="inp" id="image" title='Не обязательно к заполнению' />
                            </div>
                            <div class="clr"></div>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Основной текст:*</label>
                            <div class="form-element">
                                <textarea name="body" id="body" class="inp" rows="5" title="Обязательно к заполнению"></textarea>
                            </div>
                            <div class="clr"></div>
                        </div>

                        <div class="form-group">
                            <label class="control-label">&nbsp;</label>
                            <div class="form-element">
                                <input type="submit" id="addform-submit" class="form-btn" value="Опубликовать" />
                                <input type="reset" id="opener" class="form-btn-clear" value="Очистить форму" />
                            </div>
                            <div class="clr"></div>
                        </div>
                    </form>
                </div>

                
                	<div id="articles">
                @foreach($articles as $i => $article)

                    <div class="blog_container" id="article{{$article->id}}">
                    <h3><div class='blog_title' id='ttl{{$article->id}}'>{{$article->title}}</div></h3>
                    <div class='blog_image'><img src='{{$article->image}}' id='img{{$article->id}}' width='250' alt='{{$article->image}}'/></div>
                    <div class='blog_body' id='bdy{{$article->id}}'>{{$article->body}}</div>
                    <div class='blog_date'>{{$article->date}}</div>
                	<div class='blog_link_container'>
                    <div class="blog_update_link" id="edit{{$article->id}}" style="cursor:pointer">Редактировать</div>                  
                    
                    <form action="{{ route('article.destroy', ['id'=>$article->id]) }}" method='post'>
                    <button type="submit" class="blog_delete_link">Удалить</button>
                    {{csrf_field()}}
                    {{method_field('DELETE')}}
                    </form>
                    
                    <div style="clear: left"></div>
                    </div>
                    </div><br>

                    <!--вывод блока редактирования записи-->
                    <div id='editablebox{{$article->id}}' class='blog_editcontainer' style='display:none'>
                    <h3>Форма редактирования публикации</h3>
                    
                    <form id="editform{{$article->id}}" action="{{ route('article.store')}}" method='post'  class='editform'>
                    <input type="hidden" name="article_id" value="{{$article->id}}" />
                    <div class='message js-form-message'></div>

                    <div class='form-group'>
                        <label class='control-label'>Заголовок:*</label>
                        <div class='form-element'>
                            <input type='text' class='inp' name='title' id='title{{$article->id}}' value = '{{$article->title}}' title='Обязательно к заполнению' />
                        </div>
                        <div class='clr'></div>
                    </div>

                    <div class='form-group'>
                        <label class='control-label'>Ссылка на изображение изображение:</label>
                        <div class='form-element'>
                            <input type='text' name='image' class='inp' id='image{{$article->id}}' value = '{{$article->image}}' title='Не обязательно к заполнению' />
                        </div>
                        <div class='clr'></div>
                    </div>

                    <div class='form-group'>
                        <label class='control-label'>Основной текст:*</label>
                        <div class='form-element'>
                            <textarea name='body' id='body{{$article->id}}' class='inp' rows='5' title='Обязательно к заполнению'>{{$article->body}}</textarea>
                        </div>
                        <div class='clr'></div>
                    </div>

                    <div class='form-group'>
                        <label class='control-label'>&nbsp;</label>
                        <div class='form-element'>
                            <input class="edit_submit" type="submit" id="submit{{$article->id}}" value='Отредактировать' />
                            <input type='reset' id='opener' class='form-btn-clear' value='Сбросить изменения' />
                            {{csrf_field()}}
                        </div>
                        <div class='clr'></div>
                    </div>
                    </form>
                    
                	</div>
                	
                    
                    @endforeach
                    </div>
                	{{$articles->links()}}
                	
                


                <p style="text-align: center;">
                    <a href="blogloadfile" id="mybutton">Загрузка сообщений блога</a>
                </p>
@endsection