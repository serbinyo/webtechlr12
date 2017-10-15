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
                @foreach($articles as $i => $blog)

                    <div class="blog_container" id="article{{$blog->id}}">
                    <h3><div class='blog_title' id='ttl{{$blog->id}}'>{{$blog->title}}</div></h3>
                    <div class='blog_image'><img src='{{$blog->image}}' id='img{{$blog->id}}' width='250' alt='{{$blog->image}}'/></div>
                    <div class='blog_body' id='bdy{{$blog->id}}'>{{$blog->body}}</div>
                    <div class='blog_date'>{{$blog->date}}</div>
                	<div class='blog_link_container'>
                    <div class="blog_update_link" id="edit{{$blog->id}}" style="cursor:pointer">Редактировать</div>
                    <a class="blog_delete_link" href = blogeditor?action=delete&id={{$blog->id}}>Удалить</a>
                    <div style="clear: left"></div>
                    </div>
                    </div><br>

                    <!--вывод блока редактирования записи-->
                    <div id='editablebox{{$blog->id}}' class='blog_editcontainer' style='display:none'>
                    <h3>Форма редактирования публикации</h3>
                    
                    <form id="editform{{$blog->id}}" action="{{ route('article.store')}}" method='post'  class='editform'>
                    <input type="hidden" name="article_id" value="{{$blog->id}}" />
                    <div class='message js-form-message'></div>

                    <div class='form-group'>
                        <label class='control-label'>Заголовок:*</label>
                        <div class='form-element'>
                            <input type='text' class='inp' name='title' id='title{{$blog->id}}' value = '{{$blog->title}}' title='Обязательно к заполнению' />
                        </div>
                        <div class='clr'></div>
                    </div>

                    <div class='form-group'>
                        <label class='control-label'>Ссылка на изображение изображение:</label>
                        <div class='form-element'>
                            <input type='text' name='image' class='inp' id='image{{$blog->id}}' value = '{{$blog->image}}' title='Не обязательно к заполнению' />
                        </div>
                        <div class='clr'></div>
                    </div>

                    <div class='form-group'>
                        <label class='control-label'>Основной текст:*</label>
                        <div class='form-element'>
                            <textarea name='body' id='body{{$blog->id}}' class='inp' rows='5' title='Обязательно к заполнению'>{{$blog->body}}</textarea>
                        </div>
                        <div class='clr'></div>
                    </div>

                    <div class='form-group'>
                        <label class='control-label'>&nbsp;</label>
                        <div class='form-element'>
                            <input class="edit_submit" type="submit" id="submit{{$blog->id}}" value='Отредактировать' />
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