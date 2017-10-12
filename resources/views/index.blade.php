@extends('layouts.main-layout')

@section('links')

<script>
	function handlePopupClick()
	{
		window.open(this.href, 'registration', 'width=980, height=600, top=50, left=50, status=no, location=no, toolbar=no, menubar=no');
		return false;
	}

	window.onload = function ()
	{
		var lnks = document.getElementsByTagName('A')
		for (var i = 0; i < lnks.length; i++)
		if (/\breg\b/.test(lnks[i].className))
		lnks[i].onclick = handlePopupClick;
	}
</script>

@endsection

@section('content')


@if($user)

<div class='login_form_container'>
	<form action='{{route('indexAuthorize')}}' method='post'>
		<input type='hidden' name='action' value='logout' >
		Вход выполнен
		<input type='submit' value='Выйти'>
		<!--Защита от CSRF атак-->
		{{ csrf_field() }}
		<!--Функция добавляет следующий код на сайт
		<input type="hidden" name="_token" value="kjsgliauehgKLNGFD"/>
		в поле value сохраняется случайная строка и она же сохраняется в сессии.
		Если при отправке строки не равны генерируется исключение
		-->
	</form>
</div>

@else

<div class='login_form_container'>
	<a class='reg' href='registration'>
		<button>
			Регистрация
		</button>
	</a>
	<form action='{{route('indexAuthorize')}}' method='post'>
		Логин: <input type='text' name='login'>
		Пароль: <input type='password' name='passwd'>
		<input type='submit' name='go' value='Вход'>
		{{ csrf_field() }}
	</form>
	<div style='clear: both'>
	</div>
</div>

@endif

<section>
	<table>
		<tbody>
			<tr>
				<td>
					<img src="../../public/img/ava.jpg"  width="350" alt=""/>
				</td>
				<td>
					<h3>
						Сербин Александр Александрович
					</h3>
					<p>
						<strong>
							группа: ИС/б-41-з
						</strong>
					</p>
					<p>
						Лабораторная работа №8
						<strong>
							&quot;Исследование возможностей асинхронного взаимодействия с сервером. Технология AJAX.&quot;
						</strong>
					</p>
				</td>
			</tr>
		</tbody>
	</table>
</section>

@endsection