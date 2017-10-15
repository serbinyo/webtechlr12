<div class="blog_container">
<div class='blog_title' id='ttl{{$article->id}}'><h3>{{$article->title}}</h3></div>
<div class='blog_image' id='img{{$article->id}}'><img src='{{$article->image}}'  width='250' alt='{{$article->image}}'/></div>
<div class='blog_body' id='bdy{{$article->id}}'>{{$article->body}}</div>
<div class='blog_date'>{{$article->date}}</div>
<div class='blog_link_container'>
<div class="blog_update_link" id="edit{{$article->id}}" style="cursor:pointer">Редактировать</div>
<a class="blog_delete_link" href = "blogeditor?action=delete&id={{$article->id}}">Удалить</a>
<div style="clear: left"></div>
</div>
</div><br>