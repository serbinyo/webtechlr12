@extends('layouts.admin-layout')
@section('admincontent')

                <h2> Форма для загрузки публикаций в блог </h2>

                <form action="{{route('blogLoad')}}" class="form-fileload" method="post" enctype="multipart/form-data">
                    <input type="file" name="messages"/> <br>
                    <input type="submit" value="3arpyзить" name="loadfile"/>
                    {{csrf_field()}}
                </form>
				@if($message)
					<div class="message-blog">
					{{$message}}
					</div>
				@endif
@endsection