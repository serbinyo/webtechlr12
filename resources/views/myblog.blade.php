@extends('layouts.main-layout')

@section('links')
<script type="text/javascript" src="../../public/js/jq/jquery.js"></script>
<script type="text/javascript" src="../../public/js/comments.js"></script>
@endsection

@section('content')
@foreach($articles as $article)

<div class='blog_container'>
	<div class='blog_title'>
		<h3>
			{{$article->title}}
		</h3>
	</div>
	<div class='blog_image'>
		<img src='{{$article->image}}' width='250' alt='{{$article->image}}'/>
	</div>
	<div class='blog_body'>
		{{$article->body}}
	</div>
	<div class='blog_date'>
		Дата публикации: {{$article->date}}
	</div>
	
	@if($user)
	
	<div class='blog_body'><strong>Комментарии:</strong></div>
	
	<div id="comment_body{{$article->id}}" class='comment_body'>
		
		@foreach ($comments as $comment)
		@if($article->id === $comment->blogid)
		
		{{$comment->date}}
		{{$comment->author}}
		написал: {{$comment->body}}<hr>
		
		@endif
		@endforeach
		
		<button id='btnaddcmnt{{$article->id}}' class="btnopenblock">
			Комментировать
		</button><br>
		
		<form id="comentform{{$article->id}}" action="{{ route('comment.store')}}" method="post" class="comentform" style='display: none'>
		
			<textarea id='comment{{$article->id}}' class="comment" name="body" cols='30' rows='10'></textarea>
			<div id="information"></div><br>
			<input id="comment_post_ID" type="hidden" name="blogid" value="{{ $article->id }}" />
			<input id="comment_user" type="hidden" name="author" value="{{ $user->login }}" />
			<input class="submit" type="submit" id="submit{{$article->id}}" value="Отправить" />
			
			{{csrf_field()}}
			
			
		</form>
	</div>
	
	@endif
	
</div>
@endforeach
{{$articles->links()}}
@endsection