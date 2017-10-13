@extends('layouts.main-layout')

@section('content')
	<div class="blog_addcontainer">
		<h3>
			Форма добавления сообщения
		</h3>
		<form action="{{route('entryStore')}}" method="post"  class="form">

			<div class="form-group">
				<label class="control-label">
					ФИО:*
				</label>
				<div class="form-element">
					<input type="text" class="inp" name="fio" id="fio" title='Обязательно к заполнению' />
				</div>
				<div class="clr">
				</div>
			</div>

			<div class="form-group">
				<label class="control-label">
					Email:*
				</label>
				<div class="form-element">
					<input type="text" name="email" class="inp" id="email" title='Обязательно к заполнению' />
				</div>
				<div class="clr">
				</div>
			</div>

			<div class="form-group">
				<label class="control-label">
					Текст сообщения:*
				</label>
				<div class="form-element">
					<textarea name="body" id="body" class="inp" rows="5" title="Обязательно к заполнению">
					</textarea>
				</div>
				<div class="clr">
				</div>
			</div>

			<div class="form-group">
				<label class="control-label">
					&nbsp;
				</label>
				<div class="form-element">
					<input type="submit" class="form-btn" value="Опубликовать" />
					<input type="reset" id="opener" class="form-btn-clear" value="Очистить форму" />
				</div>
				<div class="clr">
				</div>
			</div>
			
			<!--Защита от CSRF атак-->
			{{ csrf_field() }}
			<!--Функция добавляет следующий код на сайт
			<input type="hidden" name="_token" value="kjsgliauehgKLNGFD"/>
			в поле value сохраняется случайная строка и она же сохраняется в сессии.
			Если при отправке строки не равны генерируется исключение
			-->
			
		</form>
	</div>

	{!!$table!!}
@endsection