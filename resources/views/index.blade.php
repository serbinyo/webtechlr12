@extends('layouts.main-layout')

@section('content')

@if($user)

<div class='login_form_container'>
	<form action='{{route('userAuthorize')}}' method='post'>
		<input type='hidden' name='action' value='logout' >
		Вход выполнен
		<input type='submit' value='Выйти'>
		{{ csrf_field() }}
	</form>
</div>

@else

<div class='login_form_container'>
	<a class='reg' href='registration'>
		<button>
			Регистрация
		</button>
	</a>
	<form action='{{route('userAuthorize')}}' method='post'>
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
						Лабораторная работа №12
						<strong>
							&quot;Исследование возможностей фреймворка Laravel для разработки веб-приложений.&quot;
						</strong>
					</p>
				</td>
			</tr>
		</tbody>
	</table>
</section>

@endsection