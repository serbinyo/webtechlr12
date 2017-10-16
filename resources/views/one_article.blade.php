<div class="blog_container">
	<h3><div class='blog_title' id='ttl{{$article->id}}'>{{$article->title}}</div></h3>
	<div class='blog_image' id='img{{$article->id}}'><img src='{{$article->image}}'  width='250' alt='{{$article->image}}'/></div>
	<div class='blog_body' id='bdy{{$article->id}}'>{{$article->body}}</div>
	<div class='blog_date'>{{$article->date}}</div>
	<div class='blog_link_container'>
		<div class="blog_update_link" id="edit{{$article->id}}" style="cursor:pointer">Редактировать</div>
		<a class="blog_delete_link" href = "">Удалить</a>
		<div style="clear: left"></div>
	</div>
</div><br>

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